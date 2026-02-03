<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans bg-white">
    <nav class="flex justify-between items-center p-6 max-w-7xl mx-auto">
        <div class="flex items-center gap-2">
            <x-application-logo class="w-10 h-10 fill-current text-blue-600" />
            <span class="text-xl font-semibold text-gray-800 tracking-tight">{{ config('app.name') }}</span>
        </div>
        
        @if (Route::has('login'))
            <div class="space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900">Fazer login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 transition ease-in-out duration-150">
                            Criar conta
                        </a>
                    @endif
                @endauth
            </div>
        @endif
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-24 sm:py-32 flex flex-col items-center text-center">
        <h1 class="text-5xl md:text-7xl font-bold text-gray-900 mb-6 tracking-tight">
            Trabalhe de forma <span class="text-blue-600">inteligente</span>.
        </h1>
        <p class="text-lg md:text-xl text-gray-600 mb-10 max-w-2xl leading-relaxed">
            Uma plataforma moderna para gerenciar seus projetos com a simplicidade que você precisa. Comece agora gratuitamente.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ route('register') }}" class="px-8 py-4 bg-blue-600 text-white rounded-full font-medium text-lg hover:bg-blue-700 transition shadow-lg shadow-blue-200">
                Começar agora
            </a>
            <a href="#funcionalidades" class="px-8 py-4 bg-white text-gray-700 border border-gray-300 rounded-full font-medium text-lg hover:bg-gray-50 transition">
                Ver funcionalidades
            </a>
        </div>

        <div class="mt-16 w-full max-w-5xl rounded-2xl border border-gray-200 shadow-2xl overflow-hidden bg-gray-50">
            <div class="h-8 bg-gray-100 border-b border-gray-200 flex items-center px-4 gap-1.5">
                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                <div class="w-3 h-3 rounded-full bg-green-400"></div>
            </div>
            <div class="aspect-video flex items-center justify-center text-gray-400 italic">
                [Espaço para o print do seu sistema ou um dashboard bonito]
            </div>
        </div>
    </main>
</body>
</html>