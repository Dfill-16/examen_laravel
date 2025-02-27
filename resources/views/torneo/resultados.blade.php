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
    @section('content')
    <h1 class="text-3xl font-bold mt-10 ml-20">Resultados de Partidos</h1>
    <table class="border-collapse border border-gray-200 rounded-lg shadow-md w-3/4 mx-auto bg-white mt-5 mb-20">
        <thead>
            <tr class="bg-green-600 text-white">
                <th class="p-4 text-left">Equipo Local</th>
                <th class="p-4 text-left">Equipo Visitante</th>
                <th class="p-4 text-left">Puntos Local</th>
                <th class="p-4 text-left">Puntos Visitante</th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-gray-100">
                <td class="p-4 border-r-2 border-gray-200">Equipo A</td>
                <td class="p-4 border-r-2 border-gray-200">Equipo B</td>
                <td class="p-4 border-r-2 border-gray-200">3</td>
                <td class="p-4">2</td>
            </tr>
            <tr class="hover:bg-gray-100">
                <td class="p-4 border-r-2 border-gray-200">Equipo C</td>
                <td class="p-4 border-r-2 border-gray-200">Equipo D</td>
                <td class="p-4 border-r-2 border-gray-200">1</td>
                <td class="p-4">4</td>
            </tr>
            <tr class="hover:bg-gray-100">
                <td class="p-4 border-r-2 border-gray-200">Equipo E</td>
                <td class="p-4 border-r-2 border-gray-200">Equipo F</td>
                <td class="p-4 border-r-2 border-gray-200">2</td>
                <td class="p-4">3</td>
            </tr>
        </tbody>
    </table>
    @endsection
</body>