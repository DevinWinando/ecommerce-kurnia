<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        document.documentElement.classList.remove('dark')
        localStorage.setItem('theme', 'light')
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="UTF-8" />
    <!-- Font Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="icon" href="/logo-fixed.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Kurnia Plastik</title>

    @vite(['resources/styles/main.scss', 'resources/app/main.js', 'resources/app/assets/style.css'])

    <script>
        document.documentElement.classList.remove('dark')
        window.AppConfig = {
            name: '{{ env('APP_NAME') }}',
            logo: '{{ url('/assets/images/logo.png') }}',
            url: '{{ env('APP_URL') }}',
            csrf: '{{ csrf_token() }}',
            defaultLocale: '{{ env('APP_LOCALE', 'en') }}',
            defaultTimezone: '{{ env('APP_TIMEZONE', 'UTC') }}',
            locales: {
                en: {!! json_encode(\Illuminate\Support\Facades\Lang::get('frontend', [], 'en')) !!},
                mk: {!! json_encode(\Illuminate\Support\Facades\Lang::get('frontend', [], 'mk')) !!},
            }
        }

        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light')
    </script>
</head>

<body>
    <noscript>
        <strong>We're sorry but this application doesn't work properly without JavaScript enabled. Please enable it to
            continue.</strong>
    </noscript>

    <div id="app"></div>

</body>

</html>
