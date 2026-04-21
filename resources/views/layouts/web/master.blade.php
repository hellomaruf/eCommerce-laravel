<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Stuffsus — Shop')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-['Inter',sans-serif] bg-[#f0f0f0] text-[#111111] text-sm min-w-[320px]">
    @include('layouts.web.partials.header')
    @yield('content')
    @include('layouts.web.partials.footer')

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>