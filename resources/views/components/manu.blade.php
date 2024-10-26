<header class="text-gray-800 bg-white shadow-md dark:bg-gray-900 dark:text-white">
    <div class="container flex items-center justify-between px-6 py-4 mx-auto">
        <!-- Logo -->
        <div class="text-3xl font-extrabold">
            <a href="#" class="text-yellow-500 dark:text-yellow-400">
                {{-- TaxiPro --}}
                <img src="{{asset('images/logo.png')}}" alt="" class="w-32 rounded-2xl">
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav>
            <ul class="flex space-x-8 text-lg font-medium">
                <li><a href="#" class="transition hover:text-yellow-500 dark:hover:text-yellow-400">Home</a></li>
                <li><a href="#" class="transition hover:text-yellow-500 dark:hover:text-yellow-400">Services</a></li>
                <li><a href="#" class="transition hover:text-yellow-500 dark:hover:text-yellow-400">Fleet</a></li>
                <li><a href="#" class="transition hover:text-yellow-500 dark:hover:text-yellow-400">Contact</a></li>
            </ul>
        </nav>

        <!-- Call to Action, Login & Dark Mode Toggle -->
        <div class="flex items-center space-x-6">
            <!-- Call to Action Button -->
            <a href="#"
               class="px-5 py-2 font-bold text-gray-900 transition bg-yellow-500 rounded-full shadow dark:bg-yellow-400 dark:text-gray-800 hover:bg-yellow-600 dark:hover:bg-yellow-500">
               Book a Cab
            </a>

            <!-- Login Button -->
            <a href="#"
               class="px-5 py-2 text-white transition bg-gray-800 rounded-full shadow dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600">
               Login
            </a>
            <svg id="theme-toggle-light-icon" class="hidden w-6 h-6 cursor-pointer dark-mode"   stroke="currentColor"  xmlns="http://www.w3.org/2000/svg">
                <path d="M3.32031 11.6835C3.32031 16.6541 7.34975 20.6835 12.3203 20.6835C16.1075 20.6835 19.3483 18.3443 20.6768 15.032C19.6402 15.4486 18.5059 15.6834 17.3203 15.6834C12.3497 15.6834 8.32031 11.654 8.32031 6.68342C8.32031 5.50338 8.55165 4.36259 8.96453 3.32996C5.65605 4.66028 3.32031 7.89912 3.32031 11.6835Z" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <svg id="theme-toggle-dark-icon" class="w-6 h-6 cursor-pointer dark-mode" fill="none" stroke="currentColor" " xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="6" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M12 2V3" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
                    <path d="M12 21V22" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
                    <path d="M22 12L21 12" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
                    <path d="M3 12L2 12" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
                    <path d="M19.0708 4.92969L18.678 5.32252" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
                    <path d="M5.32178 18.6777L4.92894 19.0706" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
                    <path d="M19.0708 19.0703L18.678 18.6775" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
                    <path d="M5.32178 5.32227L4.92894 4.92943" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
                </svg>
        </div>
    </div>
</header>
