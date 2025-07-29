<?php

namespace App\Clients;

use Illuminate\Database\Eloquent\Builder;

class Pos
{
    /**
     * Get the POS API URL
     *
     * @return string
     */
    public static function getPosUrl(): string
    {
        return config('services.pos.url');
    }

    /**
     * Get the POS API token
     *
     * @return string
     */
    public static function getPosToken(): string
    {
        return config('services.pos.token');
    }

    public static function http(string $method, string $endpoint, array $data = []): \Illuminate\Http\Client\Response
    {
        $url = self::getPosUrl() . '/' . ltrim($endpoint, '/');

        return \Http::withToken(self::getPosToken())
            ->acceptJson()
            ->send($method, $url, [
                'json' => $data,
            ]);
    }
}
