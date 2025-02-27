<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneos Sena</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">
    <header class="h-12 border-b-2 border-gray-200 bg-green-500 flex items-center justify-between px-4 py-2"> 
    <h1 class="text-2xl font-bold text-black">Torneos Sena</h1>
    </header>

    <main class="bg-green-100 container mt-6 mx-auto px-4 py-4 gap-2 hover:bg-green-200 rounded-lg transition-all duration-500 shadow-md">
        <h1 class="text-3xl font-bold">Bienvenido al sistema de gestión de torneos...</h1><br><br> 
        <p class="text-xl mt-2">Exitos en tu deporte.</p>
    </main>

    <div class="flex justify-center mt-12">
        <button>
        <a href="{{route ('registro.index')}}" class="button text-left bg-green-500 text-white ml-10 mt-12 mx-auto px-4 py-4 w-80 shadow-md hover:bg-gradient-to-br hover:bg-green-600 transition-all duration-500">Registros</a>
        </button>
        <button>
        <a href="{{route ('torneo.index')}}" class="button text-left bg-green-500 text-white ml-10 mt-12 mx-auto px-4 py-4 w-80 shadow-md hover:bg-gradient-to-br hover:bg-green-600 transition-all duration-500">Tablas</a>
        </button>
    </div>

    <footer class="h-12 border-t-2 border-gray-200 bg-green-500 flex items-center justify-between px-4 py-2 absolute bottom-0 left-0 right-0">
        <h1 class="text-2xl font-bold text-white">Workers Academy</h1>
        <h4 class="text-sm font-bold text-white relative bottom-1 right-1">2022 © Workers Academy</h4>
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>