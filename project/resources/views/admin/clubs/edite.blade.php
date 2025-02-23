@extends('layouts.app')

@section('title', 'Modifier un Club')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Modifier le Club</h2>

    <form action="{{ route('admin.clubs.update', $club->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Nom</label>
            <input type="text" name="name" value="{{ $club->name }}" class="w-full p-2 border border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Description</label>
            <textarea name="description" class="w-full p-2 border border-gray-300 rounded-lg" required>{{ $club->description }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Catégorie</label>
            <select name="category" class="w-full p-2 border border-gray-300 rounded-lg">
                <option value="Tech" {{ $club->category == 'Tech' ? 'selected' : '' }}>Tech</option>
                <option value="Design" {{ $club->category == 'Design' ? 'selected' : '' }}>Design</option>
                <option value="Robotique" {{ $club->category == 'Robotique' ? 'selected' : '' }}>Robotique</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Logo</label>
            <input type="file" name="logo" class="w-full p-2 border border-gray-300 rounded-lg">
        </div>

        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-md">Modifier</button>
    </form>
</div>
@endsection
