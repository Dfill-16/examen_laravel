<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Workers Academy')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <header class="h-16 border-b-2 border-gray-200 bg-green-600 flex items-center justify-between px-4 py-2"> 
    <h1 class="text-2xl font-bold text-black">Torneos Sena</h1>
    </header>

    <main class="bg-white container mt-12 mx-auto px-4 py-4 gap-2 hover:bg-green-500 hover:scale-x-95 hover:scale-y-125 rounded-lg transition-all duration-500 shadow-lg">
        <h1 class="text-3xl font-bold">Bienvenido al sistema de gestión de torneos...</h1><br><br> 
        <p class="text-xl mt-2">Exitos en tu deporte.</p>
    </main>

    <div class="flex mt-8 mr-10">
        <button class="button text-left bg-green-600 text-white ml-10 mt-12 mx-auto px-4 py-4 w-80 shadow-md hover:bg-gradient-to-br hover:bg-green-600 transition-all duration-500 rounded-md"><a href="{{route ('torneo.index')}}" >Inicio</a></button>
        <button class="button text-left bg-green-600 text-white ml-10 mt-12 mx-auto px-4 py-4 w-80 shadow-md hover:bg-gradient-to-br hover:bg-green-600 transition-all duration-500 rounded-md"><a href="{{route ('torneo.create')}}" >Resultados</a></button>
        <button class="button text-left bg-green-600 text-white ml-10 mt-12 mx-auto px-4 py-4 w-80 shadow-md hover:bg-gradient-to-br hover:bg-green-600 transition-all duration-500 rounded-md"><a href="{{route ('torneo.show', 0)}}" >Tablas</a></button>
        <button class="button text-left bg-green-600 text-white ml-10 mt-12 mx-auto px-4 py-4 w-80 shadow-md hover:bg-gradient-to-br hover:bg-green-600 transition-all duration-500 rounded-md"><a href="/" >Ir a página principal</a></button>     
    </div>
    @yield('content')

    <footer class="h-12 border-t-2 border-gray-200 bg-green-600 flex items-center justify-between px-4 py-2 bottom-0 left-0 right-0 fixed mt-5">
        <h1 class="text-2xl font-bold text-white">Torneos Sena</h1>
        <h4 class="text-sm font-bold text-white relative bottom-1 right-1">2025 © Torneos Sena</h4>
    </footer>
    
</body>
</html>