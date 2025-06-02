<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cars</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles / Scripts -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-800 bg-white shadow-md dark:bg-gray-900 dark:text-white">
        <x-menu />

        <div class="max-w-4xl mx-auto py-10">
            <h1 class="text-3xl font-bold mb-8 text-center">Cars</h1>
            <div class="overflow-x-auto rounded-lg shadow mb-8">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 bg-white dark:bg-gray-800">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Make</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Model</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Year</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">License plate</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Color</th>
                            <th class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($cars as $car)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $car->make }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $car->model }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $car->year }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $car->license_plate }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $car->color }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right space-x-2">
                                    <a href="{{ route('cars.edit', $car->id) }}"
                                       class="inline-block px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Edit</a>
                                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="inline-block"
                                          onsubmit="return confirm('Are you sure you want to delete this car?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('cars.create') }}"
                   class="inline-block px-5 py-2 bg-green-500 text-white font-semibold rounded hover:bg-green-600 transition">
                    Create a new car
                </a>
            </div>
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
