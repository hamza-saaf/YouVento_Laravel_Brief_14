<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-900 text-white min-h-screen p-5">
            <h2 class="text-2xl font-bold">Admin Dashboard</h2>
            <nav class="mt-5">
                <a href="" class="block py-2 px-3 bg-blue-700 rounded-md mt-2">Gestion des Clubs</a>
            </nav>
        </div>

        <!-- Content -->
        <div class="flex-1 p-8">
            @yield('content')
        </div>
    </div>

</body>
</html>
