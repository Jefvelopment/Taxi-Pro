<section class="text-gray-800 bg-yellow-500 shadow-md dark:bg-gray-900 dark:text-white"

>
<div class="container flex flex-col items-center px-6 py-16 mx-auto lg:flex-row">
    <!-- Hero Content -->
    <div class="mb-10 lg:w-1/2 lg:mb-0">
        <h1 class="mb-4 text-4xl font-extrabold lg:text-6xl">
            Book Your Taxi in <span class="text-red-500">Minutes</span>
        </h1>
        <p class="mb-6 text-lg text-gray-700 lg:text-xl">
            Fast, reliable, and affordable taxi service. Get to your destination with ease and comfort.
        </p>
        <a href="#booking-form" class="px-6 py-3 font-bold text-white transition bg-red-500 rounded-full shadow-lg hover:bg-yellow-600">
            Book Now
        </a>
    </div>

    <!-- Booking Form -->
    <div class="p-8 text-gray-800 bg-white rounded-lg shadow-lg dark:bg-gray-900 dark:text-white lg:w-1/2">
        <h2 class="mb-6 text-3xl font-semibold text-center">Quick Cab Booking</h2>
        <form id="booking-form" class="space-y-4">
            <div>
                <label for="pickup-location" class="block mb-1 text-lg">Pickup Location</label>
                <input type="text" id="pickup-location" placeholder="Enter your pickup location"
                    class="w-full px-4 py-3 text-white bg-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>
            <div>
                <label for="dropoff-location" class="block mb-1 text-lg">Drop-off Location</label>
                <input type="text" id="dropoff-location" placeholder="Enter your destination"
                        class="w-full px-4 py-3 text-white bg-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>
            <div class="flex space-x-4">
                <div class="w-1/2">
                    <label for="date" class="block mb-1 text-lg">Date</label>
                    <input type="date" id="date"
                            class="w-full px-4 py-3 text-white bg-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                </div>
                <div class="w-1/2">
                    <label for="time" class="block mb-1 text-lg">Time</label>
                    <input type="time" id="time"
                            class="w-full px-4 py-3 text-white bg-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                </div>
            </div>
            <button type="submit"
                    class="w-full py-3 font-bold text-gray-900 transition bg-yellow-500 rounded-full hover:bg-yellow-600">
                Book a Cab
            </button>
        </form>
    </div>
</div>
</section>
