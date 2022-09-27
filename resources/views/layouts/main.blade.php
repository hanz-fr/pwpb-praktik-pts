<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="{{ request()->is('login') ? 'bg-white' : 'bg-slate-800' }} {{ request()->is('register') ? 'bg-white' : 'bg-slate-800' }}">
    @auth    
    <div class="flex overflow-x-hidden h-screen">
    @include('components.sidebar')
    @yield('content')
    </div>
    
    @else
    @yield('content')
    @endauth
</body>