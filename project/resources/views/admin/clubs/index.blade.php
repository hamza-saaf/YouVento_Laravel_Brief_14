@extends('layouts.app')

@section('title', 'Gestion des Clubs')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Liste des Clubs</h2>

    <!-- Bouton d'ajout -->
    <a href="{{ route('admin.clubs.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md mb-4 inline-block">Ajouter un Club</a>

    <table class="w-full border-collapse border border-gray-300 mt-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">ID</th>
                <th class="border p-2">Nom</th>
                <th class="border p-2">Catégorie</th>
                <th class="border p-2">Logo</th>
                <th class="border p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clubs as $club)
                <tr class="border">
                    <td class="border p-2">{{ $club->id }}</td>
                    <td class="border p-2">{{ $club->name }}</td>
                    <td class="border p-2">{{ $club->category }}</td>
                    <td class="border p-2">
                        <img src="{{ asset('storage/' . $club->logo) }}" alt="Logo" class="w-12 h-12">
                    </td>
                    <td class="border p-2 space-x-2">
                        <a href="{{ route('admin.clubs.edit', $club->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-md">Modifier</a>
                        
                        <form action="{{ route('admin.clubs.destroy', $club->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md">Supprimer</button>
                        </form>
                        {{-- {{ route('admin.clubs.archive', $club->id) }} --}}
                        <form action="" method="POST" class="inline">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="bg-gray-500 text-white px-3 py-1 rounded-md">Archiver</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
