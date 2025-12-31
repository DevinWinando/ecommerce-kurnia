<?php

namespace App\Console\Commands;

use App\Clients\Pos;
use App\Models\User;
use Illuminate\Console\Command;

class SyncUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync users/clients from POS, focusing on point sync';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting user/client sync from POS...');

        $page = 1;
        $totalUsers = 0;
        $updatedUsers = 0;
        $skippedUsers = 0;

        do {
            $response = Pos::http('POST', '/clients', [
                'page' => $page,
                'per_page' => 1000,
            ]);

            if ($response->failed()) {
                $this->error('Failed to fetch clients from POS: ' . $response->body());
                break;
            }

            $responseData = $response->json();
            $clients = $responseData['data'] ?? [];

            if (!empty($clients)) {
                foreach ($clients as $clientData) {
                    try {
                        // Find user by pos_id (client id from POS)
                        $user = User::where('pos_id', $clientData['id'])->first();

                        if ($user) {
                            // Update user data, especially point
                            $updateData = [
                                'point' => $clientData['point'] ?? 0,
                                'code' => $clientData['code'] ?? 0,
                            ];

                            // Update location data if available
                            if (isset($clientData['latitude'])) {
                                $updateData['latitude'] = $clientData['latitude'];
                            }
                            if (isset($clientData['longitude'])) {
                                $updateData['longitude'] = $clientData['longitude'];
                            }
                            if (isset($clientData['adresse'])) {
                                $updateData['address'] = $clientData['adresse'];
                            }
                            if (isset($clientData['city'])) {
                                $updateData['city'] = $clientData['city'];
                            }
                            if (isset($clientData['country'])) {
                                $updateData['country'] = $clientData['country'];
                            }

                            // Update name if changed
                            if (isset($clientData['name'])) {
                                $nameParts = $this->parseName($clientData['name']);
                                if ($nameParts['first_name']) {
                                    $updateData['first_name'] = $nameParts['first_name'];
                                }
                                if ($nameParts['last_name']) {
                                    $updateData['last_name'] = $nameParts['last_name'];
                                }
                            }

                            // Update email and phone if changed
                            if (isset($clientData['email'])) {
                                $updateData['email'] = $clientData['email'];
                            }
                            if (isset($clientData['phone'])) {
                                $updateData['phone'] = $clientData['phone'];
                            }

                            $user->update($updateData);
                            $updatedUsers++;

                            $this->info("Updated user: {$user->email} (Point: {$updateData['point']})");
                        } else {
                            // User not found in ecommerce, skip (they need to register first)
                            $skippedUsers++;
                            $this->warn("User with pos_id {$clientData['id']} not found in ecommerce. Skipping...");
                        }
                    } catch (\Exception $e) {
                        $this->error("Error syncing client ID {$clientData['id']}: " . $e->getMessage());
                        $skippedUsers++;
                    }
                }

                $totalUsers += count($clients);
                $this->info("Page {$page}: Processed " . count($clients) . " clients (Total: {$totalUsers}, Updated: {$updatedUsers}, Skipped: {$skippedUsers})");
            }

            $page++;
        } while (!empty($clients) && $page <= ($responseData['last_page'] ?? 999));

        $this->info("User sync completed!");
        $this->info("Total clients processed: {$totalUsers}");
        $this->info("Users updated: {$updatedUsers}");
        $this->info("Users skipped: {$skippedUsers}");

        return 0;
    }

    /**
     * Parse full name into first_name and last_name
     *
     * @param string $fullName
     * @return array
     */
    private function parseName($fullName)
    {
        $parts = explode(' ', trim($fullName), 2);

        return [
            'first_name' => $parts[0] ?? '',
            'last_name' => $parts[1] ?? '',
        ];
    }
}

