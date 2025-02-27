@extends('layout.plantilla2')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Temas')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>

    <div x-data="{ open: true, x: 0, y: 0, offsetX: 0, offsetY: 0 }" 
         draggable="true"
         @dragstart="offsetX = $event.offsetX; offsetY = $event.offsetY" 
         @dragend="x = $event.clientX - offsetX; y = $event.clientY - offsetY" 
         :style="{ top: y + 'px', left: x + 'px', width: open ? '20rem' : '5rem', height: open ? 'auto' : '3rem' }" 
         class="fixed top-16 right-4 bg-white shadow-lg rounded-lg overflow-hidden cursor-move transition-all duration-300">
        <div class="bg-green-600 text-white px-4 py-2 flex justify-between items-center cursor-pointer" @click="open = !open">
            <h2 class="text-xl font-bold" x-show="open">Notificaciones</h2>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
        <ul x-show="open" class="divide-y divide-gray-200 transition-all duration-300">
            <li class="px-4 py-2 hover:bg-gray-100 transition-all duration-300">
                <p class="text-sm">Notificación 1: Detalles de la notificación...</p>
            </li>
            <li class="px-4 py-2 hover:bg-gray-100 transition-all duration-300">
                <p class="text-sm">Notificación 2: Detalles de la notificación...</p>
            </li>
            <li class="px-4 py-2 hover:bg-gray-100 transition-all duration-300">
                <p class="text-sm">Notificación 3: Detalles de la notificación...</p>
            </li>
        </ul>
    </div>

    @section('content')
    <h1 class="text-3xl font-bold mt-10 ml-20">Tabla de Posiciones de Equipos de Fútbol</h1>
    <table class="border-collapse border border-gray-200 rounded-lg shadow-md w-3/4 mx-auto bg-white mt-5 mb-20">
        <thead>
            <tr class="bg-green-600 text-white">
                <th class="p-4 text-left">Posición</th>
                <th class="p-4 text-left">Nombre del Equipo</th>
                <th class="p-4 text-left">Puntos</th>
                <th class="p-4 text-left">Partidos Jugados</th>
                <th class="p-4 text-left">Partidos Ganados</th>
                <th class="p-4 text-left">Partidos Empatados</th>
                <th class="p-4 text-left">Partidos Perdidos</th>
                <th class="p-4 text-left">Goles a Favor</th>
                <th class="p-4 text-left">Goles en Contra</th>
                <th class="p-4 text-left">Diferencia de Goles</th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-gray-100">
                <td class="p-4 border-r-2 border-gray-200">1</td>
                <td class="p-4 border-r-2 border-gray-200">Tigres FC</td>
                <td class="p-4 border-r-2 border-gray-200">30</td>
                <td class="p-4 border-r-2 border-gray-200">15</td>
                <td class="p-4 border-r-2 border-gray-200">9</td>
                <td class="p-4 border-r-2 border-gray-200">3</td>
                <td class="p-4 border-r-2 border-gray-200">3</td>
                <td class="p-4 border-r-2 border-gray-200">25</td>
                <td class="p-4 border-r-2 border-gray-200">10</td>
                <td class="p-4">15</td>
            </tr>
            <tr class="hover:bg-gray-100">
                <td class="p-4 border-r-2 border-gray-200">2</td>
                <td class="p-4 border-r-2 border-gray-200">Leones Negros</td>
                <td class="p-4 border-r-2 border-gray-200">28</td>
                <td class="p-4 border-r-2 border-gray-200">15</td>
                <td class="p-4 border-r-2 border-gray-200">8</td>
                <td class="p-4 border-r-2 border-gray-200">4</td>
                <td class="p-4 border-r-2 border-gray-200">3</td>
                <td class="p-4 border-r-2 border-gray-200">22</td>
                <td class="p-4 border-r-2 border-gray-200">12</td>
                <td class="p-4">10</td>
            </tr>
            <tr class="hover:bg-gray-100">
                <td class="p-4 border-r-2 border-gray-200">3</td>
                <td class="p-4 border-r-2 border-gray-200">Águilas Doradas</td>
                <td class="p-4 border-r-2 border-gray-200">25</td>
                <td class="p-4 border-r-2 border-gray-200">15</td>
                <td class="p-4 border-r-2 border-gray-200">7</td>
                <td class="p-4 border-r-2 border-gray-200">4</td>
                <td class="p-4 border-r-2 border-gray-200">4</td>
                <td class="p-4 border-r-2 border-gray-200">20</td>
                <td class="p-4 border-r-2 border-gray-200">15</td>
                <td class="p-4">5</td>
            </tr>
            <tr class="hover:bg-gray-100">
                <td class="p-4 border-r-2 border-gray-200">4</td>
                <td class="p-4 border-r-2 border-gray-200">Pumas UNAM</td>
                <td class="p-4 border-r-2 border-gray-200">22</td>
                <td class="p-4 border-r-2 border-gray-200">15</td>
                <td class="p-4 border-r-2 border-gray-200">6</td>
                <td class="p-4 border-r-2 border-gray-200">4</td>
                <td class="p-4 border-r-2 border-gray-200">5</td>
                <td class="p-4 border-r-2 border-gray-200">18</td>
                <td class="p-4 border-r-2 border-gray-200">16</td>
                <td class="p-4">2</td>
            </tr>
            <tr class="hover:bg-gray-100">
                <td class="p-4 border-r-2 border-gray-200">5</td>
                <td class="p-4 border-r-2 border-gray-200">Chivas</td>
                <td class="p-4 border-r-2 border-gray-200">20</td>
                <td class="p-4 border-r-2 border-gray-200">15</td>
                <td class="p-4 border-r-2 border-gray-200">5</td>
                <td class="p-4 border-r-2 border-gray-200">5</td>
                <td class="p-4 border-r-2 border-gray-200">5</td>
                <td class="p-4 border-r-2 border-gray-200">15</td>
                <td class="p-4 border-r-2 border-gray-200">15</td>
                <td class="p-4">0</td>
            </tr>
            <tr class="hover:bg-gray-100">
                <td class="p-4 border-r-2 border-gray-200">6</td>
                <td class="p-4 border-r-2 border-gray-200">Rayados</td>
                <td class="p-4 border-r-2 border-gray-200">18</td>
                <td class="p-4 border-r-2 border-gray-200">15</td>
                <td class="p-4 border-r-2 border-gray-200">5</td>
                <td class="p-4 border-r-2 border-gray-200">3</td>
                <td class="p-4 border-r-2 border-gray-200">7</td>
                <td class="p-4 border-r-2 border-gray-200">14</td>
                <td class="p-4 border-r-2 border-gray-200">18</td>
                <td class="p-4">-4</td>
            </tr>
        </tbody>
    </table>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>