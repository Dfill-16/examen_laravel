@extends('layout.plantilla')
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
    <table class="border-collapse border border-gray-200 rounded-lg shadow-md w-3/4 mx-auto bg-white mt-10"> 
        <thead> <tr class="bg-green-600 text-white"> <th class="p-4 text-left">Nombre</th> <th class="p-4"><input type="text" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Nombre del entrenador"></th> </tr> </thead> 
        <tbody> <tr class="hover:bg-gray-100"> <td class="p-4">Deporte</td> <td class="p-4"><input type="text" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Deporte"></td></tr>
        <tr class="hover:bg-gray-100"> <td class="p-4">Equipo</td> <td class="p-4"><input type="date" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Equipo"></td> </tr> 
        <tr class="hover:bg-gray-100"> <td class="p-4">Fecha de nacimiento</td> <td class="p-4"><input type="text" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Fecha de nacimiento del entrenador"></td> </tr> 

    <h1 class="text-3xl font-bold mt-10 ml-20">Temas</h1>
    <table class="border-collapse border border-gray-200 rounded-lg shadow-md w-3/4 mx-auto bg-white mt-5 mb-10">
    <thead> <tr class="bg-green-600 text-white"> <th class="p-4 text-left">Entrenadores</th> <th class="p-4">Equipos</th> </tr> </thead>
    <tbody class="h-40 mb-6"> <tr class="hover:bg-gray-100"> <td class="p-4 border-r-2 w-1/2 border-gray-200"></td> <td class="p-4"></td></tr>
    </table>

    <br><br>
    @endsection
</body>
</html>
    