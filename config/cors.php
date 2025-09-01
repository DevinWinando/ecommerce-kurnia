<?php

return [

    'paths' => [
        'api/*',
        'payment/*',
        'login',
        'logout',
        'register',
        'user/password',
        'forgot-password',
        'reset-password',
        'sanctum/csrf-cookie',
        'user/profile-information',
        'email/verification-notification',
    ],

    'allowed_methods' => ['*'], // 🔥 allow semua method (GET, POST, PUT, DELETE)

    'allowed_origins' => [
        'http://localhost:5173',          // FE dev (vite/nuxt/vue)
        'http://ecommerce-kurnia.test',   // domain lokal lo
        'https://*.ngrok-free.app',       // ngrok tunnel
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // 🔥 biar semua header (Authorization, Content-Type) boleh

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true, // 🔥 penting kalau lo pake Sanctum/Session
];
