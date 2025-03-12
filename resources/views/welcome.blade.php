<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <header>
        <nav class="bg-red-600 border-gray-200 py-3 pl-16 pr-16">
            <div class="max-w-screen-xl mx-auto flex flex-col items-center">
                <ul class="flex flex-wrap justify-center space-x-6 text-white text-xs mb-2">
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current font-medium">MediaMarkt App</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current font-medium">Alle favorieten</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current font-medium">Laatste kans</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current font-medium">Business</a></li>
                    <li>
                        <a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current font-medium flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 24 24">
                                <path fill="white" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2m1 13.5a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5Zm0-6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5Z"/>
                            </svg>
                            Klantenservice
                        </a>
                    </li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current font-medium">myMediaMarkt</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current font-medium flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 24 24" style="color: white;">
                        <path fill="white" d="M2.18 9.86A.49.49 0 0 1 2 9.32l.08-.25a.49.49 0 0 1 .44-.35l6.39-.51 2.45-5.89a.51.51 0 0 1 .51-.32h.26a.49.49 0 0 1 .47.32l2.46 5.89 6.39.51a.49.49 0 0 1 .44.35l.08.25a.49.49 0 0 1-.15.54L17 14l1.48 6.21a.51.51 0 0 1-.19.53l-.29.16a.5.5 0 0 1-.56 0L12 17.6l-5.47 3.33a.5.5 0 0 1-.56 0l-.22-.15a.51.51 0 0 1-.19-.53L7 14Z"/>
                    </svg>
                    Onze services</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current font-medium">Telefoonabonnementen</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current font-medium">Eigen merken</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current font-medium">Ons advies</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current font-medium">Vacatures</a></li>
                </ul>

                <div class="flex items-center justify-between w-full">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img class="h-7 w-58" src="https://cms-images.mmst.eu/jq6pdee2ul1f/33Tzg81ndenxjnDZISYBRc/d947f7276b1e173409e6ffeb73950df4/MM_logo_white__1_.svg?q=80" class="h-8" alt="Logo">
                    </a>

                    <div class="flex items-center space-x-4">
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

                            <div id="dropdownMenu" class="absolute hidden bg-white text-gray-700 shadow-lg mt-2 rounded-lg w-40">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 1</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 2</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 3</a>
                            </div>
                        </div>

                        <div class="relative w-80">
                            <input type="text" class="w-full p-2 pl-10 text-gray-800 border rounded-lg bg-white py-3" placeholder="Wat zoek je?">
                            <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-width="2" d="M19 19l-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                        </div>

                        <button id="dropdownButton" class="bg-red-600 border-2 border-none text-white rounded-lg font-semibold flex items-center gap-2 pt-2 pb-2 pl-6 pr-6">
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
                                <path d="M15.78 11.28a.75.75 0 0 1 .22.53v.38a.77.77 0 0 1-.22.53l-5.14 5.13a.5.5 0 0 1-.71 0l-.71-.71a.49.49 0 0 1 0-.7L13.67 12 9.22 7.56a.5.5 0 0 1 0-.71l.71-.7a.5.5 0 0 1 .71 0Z" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-row space-x-2">
                    <div>
                        <button class="bg-white rounded-full w-12 h-12 flex items-center justify-center">
                            <svg class="w-6 h-6 fill-current text-black font-bold" viewBox="0 0 20 20">
                                <path
                                stroke="black"
                                stroke-width="1"
                                d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <button class="bg-white rounded-full w-12 h-12 flex items-center justify-center">
                            <svg class="w-6 h-6 fill-current text-black" viewBox="0 0 20 20">
                                <path
                                stroke="black"
                                stroke-width="1"
                                d="M9.719,17.073l-6.562-6.51c-0.27-0.268-0.504-0.567-0.696-0.888C1.385,7.89,1.67,5.613,3.155,4.14c0.864-0.856,2.012-1.329,3.233-1.329c1.924,0,3.115,1.12,3.612,1.752c0.499-0.634,1.689-1.752,3.612-1.752c1.221,0,2.369,0.472,3.233,1.329c1.484,1.473,1.771,3.75,0.693,5.537c-0.19,0.32-0.425,0.618-0.695,0.887l-6.562,6.51C10.125,17.229,9.875,17.229,9.719,17.073 M6.388,3.61C5.379,3.61,4.431,4,3.717,4.707C2.495,5.92,2.259,7.794,3.145,9.265c0.158,0.265,0.351,0.51,0.574,0.731L10,16.228l6.281-6.232c0.224-0.221,0.416-0.466,0.573-0.729c0.887-1.472,0.651-3.346-0.571-4.56C15.57,4,14.621,3.61,13.612,3.61c-1.43,0-2.639,0.786-3.268,1.863c-0.154,0.264-0.536,0.264-0.69,0C9.029,4.397,7.82,3.61,6.388,3.61"></path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <button class="bg-white rounded-full w-12 h-12 flex items-center justify-center">
                            <svg class="w-6 h-6 fill-current text-black" viewBox="0 0 20 20">
                                <path
                                stroke="black"
                                stroke-width="1"
                                d="M17.671,13.945l0.003,0.002l1.708-7.687l-0.008-0.002c0.008-0.033,0.021-0.065,0.021-0.102c0-0.236-0.191-0.428-0.427-0.428H5.276L4.67,3.472L4.665,3.473c-0.053-0.175-0.21-0.306-0.403-0.306H1.032c-0.236,0-0.427,0.191-0.427,0.427c0,0.236,0.191,0.428,0.427,0.428h2.902l2.667,9.945l0,0c0.037,0.119,0.125,0.217,0.239,0.268c-0.16,0.26-0.257,0.562-0.257,0.891c0,0.943,0.765,1.707,1.708,1.707S10,16.068,10,15.125c0-0.312-0.09-0.602-0.237-0.855h4.744c-0.146,0.254-0.237,0.543-0.237,0.855c0,0.943,0.766,1.707,1.708,1.707c0.944,0,1.709-0.764,1.709-1.707c0-0.328-0.097-0.631-0.257-0.891C17.55,14.182,17.639,14.074,17.671,13.945 M15.934,6.583h2.502l-0.38,1.709h-2.312L15.934,6.583zM5.505,6.583h2.832l0.189,1.709H5.963L5.505,6.583z M6.65,10.854L6.192,9.146h2.429l0.19,1.708H6.65z M6.879,11.707h2.027l0.189,1.709H7.338L6.879,11.707z M8.292,15.979c-0.472,0-0.854-0.383-0.854-0.854c0-0.473,0.382-0.855,0.854-0.855s0.854,0.383,0.854,0.855C9.146,15.596,8.763,15.979,8.292,15.979 M11.708,13.416H9.955l-0.189-1.709h1.943V13.416z M11.708,10.854H9.67L9.48,9.146h2.228V10.854z M11.708,8.292H9.386l-0.19-1.709h2.512V8.292z M14.315,13.416h-1.753v-1.709h1.942L14.315,13.416zM14.6,10.854h-2.037V9.146h2.227L14.6,10.854z M14.884,8.292h-2.321V6.583h2.512L14.884,8.292z M15.978,15.979c-0.471,0-0.854-0.383-0.854-0.854c0-0.473,0.383-0.855,0.854-0.855c0.473,0,0.854,0.383,0.854,0.855C16.832,15.596,16.45,15.979,15.978,15.979 M16.917,13.416h-1.743l0.189-1.709h1.934L16.917,13.416z M15.458,10.854l0.19-1.708h2.218l-0.38,1.708H15.458z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="w-full h-11 bg-black">
            <ul class="flex flex-row justify-around pt-2">
                <li><a href="#" class="underline hover:no-underline font-medium text-white text-sm">Binnen 30 minuten ophalen</a></li>
                <li><a href="#" class="underline hover:no-underline font-medium text-white text-sm">MediaMarkt App</a></li>
                <li><a href="#" class="underline hover:no-underline font-medium text-white text-sm">Voor 23:59 besteld, morgen in huis</a></li>
            </ul>
        </div>
    </section>

    <section>
        <div class="flex space-x-4 pt-12 flex-row justify-center pb-7">
            <div class="w-92 max-h-116 border border-gray-300 rounded-2xl pb-20 flex flex-col justify-between shadow-md">
                <img src="https://cms-images.mmst.eu/jq6pdee2ul1f/3nBqYMH0H1s9EEu14umO53/e9aeabe13681d55403df4174a651cbaa/NL-favorieten-teaser-mobile.jpg?q=88&w=495"
                    alt="Favorieten afbeelding"
                    class="w-full h-52 object-fit rounded-t-2xl">
                <p class="pt-6 px-3">
                    <span class="border border-red-600 rounded-xl px-2 py-1 text-xs font-medium">Favorieten</span>
                </p>
                <h3 class="text-3xl font-extrabold mt-4 px-3 italic">Onze favoriete producten</h3>
                <p class="text-black mt-5 px-3">Ontdek onze beste keuzes in elke categorie</p>
                <div class="flex justify-end mt-auto pt-6 pr-4">
                    <button class="bg-white text-black font-semibold px-4 py-2 border border-black rounded-lg flex items-center space-x-2 hover:bg-gray-100 active:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2">
                        <span>Bekijk</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 001.414 0l5-5a1 1 0 000-1.414l-5-5a1 1 0 00-1.414 1.414L14.586 9H3a1 1 0 000 2h11.586l-3.293 3.293a1 1 0 000 1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="w-92 max-h-116 border border-gray-300 rounded-2xl pb-20 flex flex-col justify-between shadow-md">
                <img src="https://cms-images.mmst.eu/jq6pdee2ul1f/2su8B9eUIl0vw6iEjVei4p/0eba06513ba7c70865e329174bb7a4a0/NL-valentijn-teaser-mobile.jpg?q=88&w=495"
                    alt="Favorieten afbeelding"
                    class="w-full h-52 object-fit rounded-t-2xl">
                <p class="pt-6 px-3">
                    <span class="border border-red-600 rounded-xl px-2 py-1 text-xs font-medium">Favorieten</span>
                </p>
                <h3 class="text-3xl font-extrabold mt-4 px-3 italic">Valentijnsdag cadeau ideeën</h3>
                <p class="text-black mt-5 px-3">Laat je inspireren om je geliefde te verwennen</p>
                <div class="flex justify-end mt-auto pt-6 pr-4">
                    <button class="bg-white text-black font-semibold px-4 py-2 border border-black rounded-lg flex items-center space-x-2 hover:bg-gray-100 active:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2">
                        <span>Bekijk</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 001.414 0l5-5a1 1 0 000-1.414l-5-5a1 1 0 00-1.414 1.414L14.586 9H3a1 1 0 000 2h11.586l-3.293 3.293a1 1 0 000 1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="w-92 max-h-116 border border-gray-300 rounded-2xl pb-20 flex flex-col justify-between shadow-md">
                <img src="https://cms-images.mmst.eu/jq6pdee2ul1f/35huUTnDzTqpgLAhVnY1Ht/ce0b743220ba7d817a484e8bf3da35ff/nl-nvidia-rtx-teaser-mobile.png?q=88&fm=jpg&w=495" 
                    alt="Favorieten afbeelding"
                    class="w-full h-52 object-fit rounded-t-2xl">
                <p class="pt-6 px-3">
                    <span class="border border-red-600 rounded-xl px-2 py-1 text-xs font-medium">Favorieten</span>
                </p>
                <h3 class="text-3xl font-extrabold mt-4 px-3 italic">Change the game</h3>
                <p class="text-black mt-5 px-3">Met de nieuwe NVIDIA GeForce RTX 5090/5080</p>
                <div class="flex justify-end mt-auto pt-15 pr-4">
                    <button class="bg-white text-black font-semibold px-4 py-2 border border-black rounded-lg flex items-center space-x-2 hover:bg-gray-100 active:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2">
                        <span>Bekijk</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 001.414 0l5-5a1 1 0 000-1.414l-5-5a1 1 0 00-1.414 1.414L14.586 9H3a1 1 0 000 2h11.586l-3.293 3.293a1 1 0 000 1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16">
        <div class="relative overflow-hidden">
            <div class="carousel-container flex transition-transform duration-500 ease-in-out">
                @foreach ($products->chunk(4) as $chunk)
                    @foreach ($chunk as $product)
                        <div class="product w-full md:w-1/4 p-4">
                            <div class="bg-white p-4 shadow rounded-lg">
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-t-lg">
                                <h2 class="text-xl font-semibold mt-2">{{ $product->name }}</h2>
                                <p class="text-gray-500">{{ $product->description }}</p>
                                <p class="text-lg font-bold mt-2">€{{ number_format($product->price, 2) }}</p>

                                <div class="flex mt-1" id="rating-container-{{ $product->id }}">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <svg
                                            data-rating="{{ $i }}"
                                            class="w-5 h-5 star {{ $i <= $product->rating ? 'text-red-500' : 'text-gray-300' }}"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            onclick="updateRating({{ $product->id }}, {{ $i }})"
                                        >
                                            <path d="M10 15l-3.5 2.5 1-4.3L2 7.8l4.3-.4L10 3l1.7 3.5 4.3.4-3.5 5.4 1 4.3L10 15z"/>
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

            <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black text-white p-2 rounded-full">
                &#60;
            </button>
            <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black text-white p-2 rounded-full">
                &#62;
            </button>
        </div>
    </section>

    <footer class="py-12 bg-zinc-200 text-white">
        <div class="flex-colum pl-22 pb-16">
            <p class="text-black text-xl font-semibold pb-9">
                Certificaten
            </p>
            <img class="h-20 w-20" src="https://images.ctfassets.net/jq6pdee2ul1f/1zDMD7CALoJxeLarkuVrjN/2ee158ed992a2d14fededd5ba52786d7/WOTY_badge-certified2025.svg">
        </div>
        <div class="flex flex-row justify-around">
            <div>
                <p class="text-black text-xl font-semibold pb-9">
                    Contact
                </p>
                <div class="flex flex-row">
                    <img src="https://cms-images.mmst.eu/jq6pdee2ul1f/2T7cU63B3w3DWZmMTWQHn6/0e36d4fcf0cbaecf16edc530539690ba/StyleGuideChat.svg?q=80">
                    <div>
                        <p class="text-black">
                        Veelgestelde vragen
                        </p>
                        <a href="#" class="text-black underline hover:no-underline">Vind je antwoord goed hier</a>
                    </div>
                </div>
                <div class="flex flex-row">
                    <img src="https://cms-images.mmst.eu/jq6pdee2ul1f/3FiqapE5p94Hx7leMsaTOq/46ef67d45de4dec3d2c731e7f145e840/StyleGuideContact.svg?q=80">
                    <div class="flex flex-col">
                        <p class="text-black">
                            Nog meer vragen?
                        </p>
                        <a href="#" class="text-black underline hover:no-underline">Vul het contactformulier in</a>
                    </div>
                </div>
            </div>
            <div>
                <p class="text-black text-xl font-semibold pb-9">
                    Categorieen
                </p>
                    <ul class="space-x-2 text-black text-s">
                        <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Computer</a></li>
                        <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Tv</a></li>
                        <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Audio</a></li>
                        <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Keuken</a></li>
                        <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Huishouden</a></li>
                        <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Telefonie & Wearables</a></li>
                        <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Smart home & Wonen</a></li>
                        <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Foto & Video</a></li>
                        <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Gaming, Film & Muziek</a></li>
                        <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Verzorging & beweging</a></li>
                        <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Black Friday 2025</a></li>
                    </ul>
            </div>
            <div>
                <p class="text-black text-xl font-semibold pb-9">
                    Over Mediamarkt
                </p>
                <ul class="space-x-2 text-black text-s mb-2">
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Winkels</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Duurzaamheid</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">MediaMarkt Business</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Cashbacks</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Over ons</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Juridische informatie</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Vacatures</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Affiliate-programma</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">MediaMarkt-kortingscodes</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Klachtenregeling mensenrechten en milieu</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Pers & PR</a></li>
                </ul>
            </div>
            <div>
                <p class="text-black text-xl font-semibold pb-9">
                    Services
                </p>
                <ul class="space-x-10 text-black text-s mb-2">
                <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Telefoonabonnementen</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Verzekeringen</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Schermreperatie</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Thuis Internet, TV en Bellen</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Cadeaukaart</a></li>
                    <li><a href="#" class="underline decoration-transparent transition-all duration-500 hover:decoration-current">Al onze services</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

<script>

    function updateRating(productId, rating) {
        fetch(`/update-rating/${productId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ rating: rating })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const stars = document.querySelectorAll(`#rating-container-${productId} .star`);
                stars.forEach(star => {
                    if (star.dataset.rating <= rating) {
                        star.classList.add('text-red-500');
                        star.classList.remove('text-gray-300');
                    } else {
                        star.classList.add('text-gray-300');
                        star.classList.remove('text-red-500');
                    }
                });
            } else {
                alert('Er is iets mis gegaan. Probeer het later opnieuw.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Er is iets mis gegaan. Probeer het later opnieuw.');
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        let currentIndex = 0;
        const carouselContainer = document.querySelector('.carousel-container');
        const products = document.querySelectorAll('.product');
        const itemsToShow = 4;
        const totalChunks = Math.ceil(products.length / itemsToShow);

        function updateCarousel() {
            products.forEach(product => {
                product.style.display = 'none';
            });

            const start = currentIndex * itemsToShow;
            const end = start + itemsToShow;
            const currentChunk = Array.from(products).slice(start, end);
            currentChunk.forEach(product => {
                product.style.display = 'block';
            });
        }

        function nextSlide() {
            if (currentIndex + 1 < totalChunks) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateCarousel();
        }

        function prevSlide() {
            if (currentIndex - 1 >= 0) {
                currentIndex--;
            } else {
                currentIndex = totalChunks - 1;
            }
            updateCarousel();
        }

        updateCarousel();

        setInterval(nextSlide, 4000);

        document.getElementById('next').addEventListener('click', nextSlide);
        document.getElementById('prev').addEventListener('click', prevSlide);
    });

    document.addEventListener("DOMContentLoaded", function () {
    const dropdownButton = document.getElementById("dropdownButton");
    const dropdownMenu = document.getElementById("dropdownMenu");

    dropdownButton.addEventListener("click", function () {
        dropdownMenu.classList.toggle("hidden");
    });

    document.addEventListener("click", function (event) {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add("hidden");
        }
        });
    });
</script>
</html>