<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="bg-red-600 border-gray-200 py-3 pl-16 pr-16">
            <div class="max-w-screen-xl mx-auto flex flex-col items-center">
                <!-- Pages boven de search bar -->
                <ul class="flex flex-wrap justify-center space-x-6 text-white text-xs mb-2">
                    <li><a href="#" class="hover:underline font-medium">MediaMarkt App</a></li>
                    <li><a href="#" class="hover:underline font-medium">Alle favorieten</a></li>
                    <li><a href="#" class="hover:underline font-medium">Laatste kans</a></li>
                    <li><a href="#" class="hover:underline font-medium">Business</a></li>
                    <li>
                        <a href="#" class="hover:underline font-medium flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 24 24">
                                <path fill="white" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2m1 13.5a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5Zm0-6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5Z"/>
                            </svg>
                            Klantenservice
                        </a>
                    </li>
                    <li><a href="#" class="hover:underline font-medium">myMediaMarkt</a></li>
                    <li><a href="#" class="hover:underline font-medium">Onze services</a></li>
                    <li><a href="#" class="hover:underline font-medium">Telefoonabonnementen</a></li>
                    <li><a href="#" class="hover:underline font-medium">Eigen merken</a></li>
                    <li><a href="#" class="hover:underline font-medium">Ons advies</a></li>
                    <li><a href="#" class="hover:underline font-medium">Vacatures</a></li>
                </ul>

                <div class="flex items-center justify-between w-full">
                    <!-- Logo -->
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img class="h-7 w-58" src="https://cms-images.mmst.eu/jq6pdee2ul1f/33Tzg81ndenxjnDZISYBRc/d947f7276b1e173409e6ffeb73950df4/MM_logo_white__1_.svg?q=80" class="h-8" alt="Logo">
                    </a>

                    <!-- Language dropdown en Search bar -->
                    <div class="flex items-center space-x-4">
                        <!-- Dropdown Button -->
                        <div class="relative">
                            <button id="dropdownButton" class="bg-red-600 border-2 border-white text-white px-4 py-2 rounded-lg font-semibold flex items-center gap-2 pt-3 pb-3 pl-6 pr-6">
                                <svg
                                    viewBox="0 0 80 80"
                                    class="w-6 h-6 text-gray-800 dark:text-white"
                                    fill="currentColor">
                                    <path d="M4.726 9.507c-2.66 0-4.56 2.279-4.56 4.938s2.28
                                    4.56 4.94 4.56h70.283c2.66 0 4.56-1.9 4.56-4.56s-1.9-4.938-4.56-4.938zm0 25.834c-2.66 0-4.56 1.9-4.56 4.559s2.28 4.559 4.94
                                    4.559h70.283c2.66 0 4.56-1.9 4.56-4.56s-1.9-4.558-4.56-4.558zm0 25.454c-2.66 0-4.94 2.28-4.94 4.939s2.28 4.559 4.94 4.559H75.01c2.659
                                    0 4.938-2.28 4.938-4.94s-2.28-4.938-4.938-4.938H4.726z"/>
                                </svg>
                                Alle categorieen
                            </button>

                            <!-- Dropdown Menu -->
                            <div id="dropdownMenu" class="absolute hidden bg-white text-gray-700 shadow-lg mt-2 rounded-lg w-40">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 1</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 2</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 3</a>
                            </div>
                        </div>

                        <!-- Search bar -->
                        <div class="relative w-80">
                            <input type="text" class="w-full p-2 pl-10 text-gray-800 border rounded-lg bg-white py-3" placeholder="Wat zoek je?">
                            <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-width="2" d="M19 19l-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                        </div>

                        <button id="dropdownButton" class="bg-red-600 border-2 border-none text-white px-4 py-2 rounded-lg font-semibold flex items-center gap-2 pt-3 pb-3 pl-6 pr-6">
                            <div class="flex items-start flex-col">
                                <div class="font-extrabold">
                                    Mijn winkel
                                </div>
                                <div class="text-xs font-normal">
                                    Selecteer winkel
                                </div>
                            </div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="w-6 h-6  rotate-[90deg]">
                                <path d="M15.78 11.28a.75.75 0 0 1 .22.53v.38a.77.77 0 0 1-.22.53l-5.14 5.13a.5.5 0 0 1-.7 0l-5.14-5.13a.75.75 0 0 1-.22-.53v-.38a.75.75 0 0 1 .22-.53l5.14-5.13a.5.5 0 0 1 .7 0l5.14 5.13z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p class="text-center py-4 bg-gray-800 text-white">© 2025 MediaMarkt. Alle rechten voorbehouden.</p>
    </footer>

    <style>
        @media (max-width: 768px) {
            .text-xs {
                font-size: 12px;
            }
            .pl-16, .pr-16 {
                padding-left: 8px;
                padding-right: 8px;
            }
            .flex {
                flex-direction: column;
            }
            .w-80 {
                width: 100%;
            }
        }
    </style>
</body>
</html>
