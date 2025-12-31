<?php

namespace App\Actions\Fortify;

use App\Clients\Pos;
use App\Models\User;
use Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'phone' => ['required', 'string', 'max:20'],
            'password' => $this->passwordRules(),
        ])->validate();

        $posUser = $this->syncPosUser($input);

        if (!$posUser) {
            throw new \Exception('Failed to sync user with POS system. User Not Found.');
        }

        return User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'pos_id' => $posUser['id'] ?? null,
            'point' => $posUser['point'] ?? 0,
            'password' => Hash::make($input['password']),
            'code' => $posUser['code'] ?? 0,
            'latitude' => $posUser['latitude'] ?? null,
            'longitude' => $posUser['longitude'] ?? null,
            'address' => $posUser['adresse'] ?? null,
            'city' => $posUser['city'] ?? null,
            'country' => $posUser['country'] ?? null,
        ]);
    }

    private function syncPosUser($data)
    {
        $user = Pos::http('POST', '/user', [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        if ($user->failed()) {
            if ($user->status() === 422) {
                $errors = json_decode($user->body(), true);
                throw new \Exception(implode(', ', $errors['message']));
            }

            throw new \Exception('Failed to create user in POS system. ' . $user->json()['error'] ?? "User Not Found.");
        }

        $user = json_decode($user->body(), true);

        if (isset($user['error'])) {
            throw new \Exception($user['error']);
        }

        return $user;
    }
}
