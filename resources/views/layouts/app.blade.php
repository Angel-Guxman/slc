
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    <script src="https://kit.fontawesome.com/58362e24f4.js" crossorigin="anonymous"></script>

        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $content }} 
          
            </main>
            <footer class="bg-white border-t border-gray-200">
                <div class="container mx-auto px-4 py-6">
                    <div class="flex flex-wrap justify-between items-center">
                        <div class="flex items-center">
                            <img src="{{asset('images/logo.webp')}}" alt="Logo" class="rounded-full h-8 w-8 mr-2">
                            <span class="text-gray-700 text-sm font-semibold">SIC</span>
                        </div>
                        <div class="flex items-center space-x-4 text-sm text-gray-600">
                            <a href="#" class="hover:underline">Inicio</a>
                            <a href="#" class="hover:underline">Sobre Nosotros</a>
                            <a href="#" class="hover:underline">Servicios</a>
                            <a href="#" class="hover:underline">Contacto</a>
                        </div>
                    </div>
                    <div class="mt-4 text-center text-sm text-gray-600">
                        © {{ date('Y') }} Tu Empresa o Proyecto. Todos los derechos reservados.
                    </div>
                </div>
            </footer>
            
        </div>
    </body>
</html>
