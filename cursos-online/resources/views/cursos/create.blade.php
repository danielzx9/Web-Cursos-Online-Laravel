@extends('layouts.app') {{-- si usas Jetstream o layout personalizado --}}

@section('content')
<div class="max-w-2xl mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-4">Crear nuevo curso</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold">Título</label>
            <input type="text" name="titulo" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Descripción</label>
            <textarea name="descripcion" class="w-full border rounded p-2" required></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Categoría</label>
            <input type="text" name="categoria" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Precio (USD)</label>
            <input type="number" name="precio" step="0.01" class="w-full border rounded p-2" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Crear curso
        </button>
    </form>
</div>
@endsection
