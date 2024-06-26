<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="max-w-2xl mx-auto my-10">
    <div>
        <h1 class="font-bold text-2xl">

            <a class="hover:text-blue-500 transition-colors delay-75" href="/">

                {{ config('app.name') }}

            </a>

        </h1>


        <div class="my-12">

            {{ $slot }}

        </div>


    </div>
</body>

</html>
