@extends('layouts.app')

@section('title', 'Créer un Club')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Ajouter un Club</h2>

    <form action="{{ route('admin.clubs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700">Nom</label>
            <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Description</label>
            <textarea name="description" class="w-full p-2 border border-gray-300 rounded-lg" required></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Catégorie</label>
            <select name="category" class="w-full p-2 border border-gray-300 rounded-lg">
                <option value="Tech">Tech</option>
                <option value="Design">Design</option>
                <option value="Robotique">Robotique</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Logo</label>
            <input type="file" name="logo" class="w-full p-2 border border-gray-300 rounded-lg">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Créer</button>
    </form>
</div>
@endsection
