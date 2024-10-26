<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-800 bg-white shadow-md dark:bg-gray-900 dark:text-white">
        <x-manu />
        <x-sections.hero />
        <x-sections.three-columns />
        <x-sections.footer />

        <!-- JavaScript to toggle dark mode -->
        <script>
            const themeToggle = document.getElementById('theme-toggle');

            const toggles = document.querySelectorAll('.dark-mode');
            const darkIcon = document.getElementById('theme-toggle-dark-icon');
            const lightIcon = document.getElementById('theme-toggle-light-icon');

            // Show the correct icon based on the current theme
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
                lightIcon.classList.remove('hidden');
            } else {
                darkIcon.classList.remove('hidden');
            }

            // Toggle dark mode on button click
            toggles.forEach(element => {
                element.addEventListener('click', function() {
                    // Toggle icons inside button
                    darkIcon.classList.toggle('hidden');
                    lightIcon.classList.toggle('hidden');

                    // Toggle dark mode
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


            // themeToggle.addEventListener('click', function() {
            //     // Toggle icons inside button
            //     darkIcon.classList.toggle('hidden');
            //     lightIcon.classList.toggle('hidden');

            //     // Toggle dark mode
            //     if (localStorage.getItem('color-theme')) {
            //         if (localStorage.getItem('color-theme') === 'light') {
            //             document.documentElement.classList.add('dark');
            //             localStorage.setItem('color-theme', 'dark');
            //         } else {
            //             document.documentElement.classList.remove('dark');
            //             localStorage.setItem('color-theme', 'light');
            //         }
            //     } else {
            //         if (document.documentElement.classList.contains('dark')) {
            //             document.documentElement.classList.remove('dark');
            //             localStorage.setItem('color-theme', 'light');
            //         } else {
            //             document.documentElement.classList.add('dark');
            //             localStorage.setItem('color-theme', 'dark');
            //         }
            //     }
            // });
        </script>

    </body>
</html>
