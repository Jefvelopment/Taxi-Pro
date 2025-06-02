<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Car</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-800 bg-white shadow-md dark:bg-gray-900 dark:text-white">
    <x-menu />

    <div class="max-w-xl mx-auto py-10">
        <h1 class="text-3xl font-bold mb-8 text-center">Update Car #{{ $car->id }}</h1>

        <form action="{{ route('cars.update', $car->id) }}" method="post" class="bg-white dark:bg-gray-800 rounded-lg shadow p-8 space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label for="make" class="block text-sm font-medium mb-1">Make<span class="text-red-500">*</span></label>
                <input type="text" name="make" id="make" placeholder="Make" value="{{ old('make', $car->make) }}"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-gray-900 dark:text-white">
            </div>
            <div>
                <label for="model" class="block text-sm font-medium mb-1">Model<span class="text-red-500">*</span></label>
                <input type="text" name="model" id="model" placeholder="Model" value="{{ old('model', $car->model) }}"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-gray-900 dark:text-white">
            </div>
            <div>
                <label for="year" class="block text-sm font-medium mb-1">Year<span class="text-red-500">*</span></label>
                <input type="text" name="year" id="year" placeholder="Year" value="{{ old('year', $car->year) }}"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-gray-900 dark:text-white">
            </div>
            <div>
                <label for="license_plate" class="block text-sm font-medium mb-1">License plate<span class="text-red-500">*</span></label>
                <input type="text" name="license_plate" id="license_plate" placeholder="License plate" value="{{ old('license_plate', $car->license_plate) }}"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-gray-900 dark:text-white">
            </div>
            <div>
                <label for="color" class="block text-sm font-medium mb-1">Color</label>
                <input type="color" name="color" id="color" value="{{ old('color', $car->color) }}"
                       class="w-12 h-10 p-0 border-0 bg-transparent">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                        class="px-6 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition">
                    Update
                </button>
                <a href="{{ route('cars.index') }}"
                   class="px-6 py-2 bg-gray-300 dark:bg-gray-700 text-gray-800 dark:text-white rounded hover:bg-gray-400 dark:hover:bg-gray-600 transition">
                    Cancel
                </a>
            </div>
            <span class="block text-xs text-gray-500 mt-2">* required</span>
        </form>

        @if ($errors->any())
            <div class="mt-6 bg-red-100 dark:bg-red-900 text-red-700 dark:text-red-200 rounded p-4">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <x-sections.footer />

    <!-- JavaScript to toggle dark mode -->
    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const toggles = document.querySelectorAll('.dark-mode');
        const darkIcon = document.getElementById('theme-toggle-dark-icon');
        const lightIcon = document.getElementById('theme-toggle-light-icon');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            lightIcon.classList.remove('hidden');
        } else {
            darkIcon.classList.remove('hidden');
        }

        toggles.forEach(element => {
            element.addEventListener('click', function() {
                darkIcon.classList.toggle('hidden');
                lightIcon.classList.toggle('hidden');
                if (localStorage.getItem('color-theme')) {
                    if (localStorage.getItem('color-theme') === 'light') {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    }
                } else {
                    if (document.documentElement.classList.contains('dark')) {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    } else {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    }
                }
            });
        });
    </script>
</body>
</html>
