@extends('layout.public')
@section('titulo', 'Syverum — Bienvenido')
@section('contenido')
  <div class="h-screen flex flex-col justify-center align-center"
    style="background: #170e0e;
background: linear-gradient(120deg,rgba(23, 14, 14, 1) 0%, rgba(48, 24, 20, 1) 12%, rgba(48, 24, 21, 1) 31%, rgba(13, 36, 36, 1) 77%, rgba(7, 28, 36, 1) 90%, rgba(0, 27, 33, 1) 100%);">
    <div class="flex justify-center align-center">
      <div class="px-6 py-10 text-center">
        <div class="mx-auto mb-8 h-auto w-50">
          <img class="h-full w-full" alt="Syverum" src="{{ asset('images/Logo_syverum.svg') }}"/>
        </div>
        <h1 class="text-4xl font-bold text-white">¡Bienvenido a Syverum!</h1>
        <p class="mt-3 text-lg text-gray-300">Un punto de partida limpio para tus aplicaciones.</p>

        <div class="mt-10 flex flex-wrap items-center justify-center gap-3">
          <a href="#"
            class="inline-flex items-center rounded-md border border-gray-700 px-5 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-900 transition-colors">Documentación</a>
          <a href="#"
            class="inline-flex items-center rounded-md border border-gray-700 px-5 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-900 transition-colors">GitHub</a>
        </div>
      </div>
    </div>

    <footer class="py-6 text-center text-sm text-gray-400">
      <span class="opacity-75">Listo para construir. Edita esta vista en</span>
      <code class="mx-1 rounded bg-gray-900 px-1.5 py-0.5">resources/views/welcome.blade.php</code>
    </footer>
  </div>
@endsection

