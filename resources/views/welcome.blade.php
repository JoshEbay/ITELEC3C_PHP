<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Add your meta and title here -->

        <!-- Add your styles here -->
    </head>
    <h1>This is Home</h1>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <!-- Navigation Bar -->
            <nav class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                <ul class="flex space-x-6">
                    <li class="font-semibold">
                        <a href="{{ url('/') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    </li>
                    <li class="font-semibold">
                        <a href="{{ url('/people') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">People</a>
                    </li>
                    <li class="font-semibold">
                        <a href="{{ url('/about') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">About</a>
                    </li>
                    <li class="font-semibold">
                        <a href="{{ url('/mission') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Mission</a>
                    </li>
                    <li class="font-semibold">
                        <a href="{{ url('/vision') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vision</a>
                    </li>
                </ul>
            </nav>

            <!-- Content -->
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <!-- Your page content goes here -->
            </div>
        </div>

        <!-- Add your JavaScript or additional content here -->
    </body>
</html>
