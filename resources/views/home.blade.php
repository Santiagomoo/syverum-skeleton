@extends('layout.public')
@section('titulo', 'Home')
@section('contenido')
<div class="h-screen flex justify-center items-center bg-gray-950 flex-col">
    <h2 class="text-4xl text-white">Bienvenido a la página de inicio</h2>
    <div class="flex justify-center items-center mt-5">
        <h4 class="text-xl text-white mx-10">Dirigirse a: </h4>
        <a class="py-2 px-5 bg-green-300 rounded-md text-lg" href="{{ route('service') }}">Servicios</a>
    </div>
</body>
</html>


@endsection