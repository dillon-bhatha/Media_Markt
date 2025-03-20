<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('nav')
<body class="font-sans antialiased">
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
        <div id="carousel" class="carousel-container flex transition-transform duration-500 ease-in-out">
            @foreach ($products->chunk(4) as $chunk)
                @foreach ($chunk as $product)
                    <div class="product w-full md:w-1/4 p-4">
                        <div class="bg-white p-4 shadow rounded-lg flex flex-col min-h-[400px]">
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-t-lg">
                            <h2 class="text-xl font-semibold mt-2">{{ $product->name }}</h2>
                            <p class="text-gray-500 flex-1">{{ Str::limit($product->description, 50, '...') }}</p>
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
    </div>
</section>

    <section>
    <div class="items-center flex justify-evenly pb-10 px-5">
        <div class="flex flex-col items-center">
            <div class="w-32 h-28 relative group perspective-1000">
                <div class="w-full h-full absolute transition-transform duration-1000 transform-style-preserve-3d group-hover:rotate-y-360">
                    <img class="w-full h-full rounded-full absolute backface-hidden"
                        src="https://cms-images.mmst.eu/jq6pdee2ul1f/4y9xUdqvh2vydG6JcoxQIh/81c5638123aa09a770c97cb17ca5d86c/homepage-service-services.png?q=80&w=264">
                    <div class="w-full h-full absolute backface-hidden rotate-y-180 flip-horizontal flex items-center justify-center bg-gray-200 rounded-full">
                        <span class="text-sm font-semibold">Meer info</span>
                    </div>
                </div>
            </div>
            <a href="#" class="mt-2 underline decoration-transparent transition-all duration-500 hover:decoration-current">Services</a>
        </div>
        <div class="flex flex-col items-center">
            <div class="w-32 h-28 relative group perspective-1000">
                <div class="w-full h-full absolute transition-transform duration-1000 transform-style-preserve-3d group-hover:rotate-y-360">
                    <img class="w-full h-full rounded-full absolute backface-hidden"
                        src="https://cms-images.mmst.eu/jq6pdee2ul1f/2hxMKSMbtvjOK5CG9RCUNA/84a3b36fee7759bcd16a996b9613c70b/homepage-service-schermreparatie.png?q=80&w=264">
                    <div class="w-full h-full absolute backface-hidden rotate-y-180 flip-horizontal flex items-center justify-center bg-gray-200 rounded-full">
                        <span class="text-sm font-semibold">Meer info</span>
                    </div>
                </div>
            </div>
            <a href="#" class="mt-2 underline decoration-transparent transition-all duration-500 hover:decoration-current">Schermreparatie</a>
        </div>
        <div class="flex flex-col items-center">
            <div class="w-32 h-28 relative group perspective-1000">
                <div class="w-full h-full absolute transition-transform duration-1000 transform-style-preserve-3d group-hover:rotate-y-360">
                    <img class="w-full h-full rounded-full absolute backface-hidden"
                        src="https://cms-images.mmst.eu/jq6pdee2ul1f/7ikEpsTR87iBr1hSpXaAtY/81dc78aeaa5ba736060f061b1089c3bf/homepage-service-installatiehulp.png?q=80&w=264">
                    <div class="w-full h-full absolute backface-hidden rotate-y-180 flip-horizontal flex items-center justify-center bg-gray-200 rounded-full">
                        <span class="text-sm font-semibold">Meer info</span>
                    </div>
                </div>
            </div>
            <a href="#" class="mt-2 underline decoration-transparent transition-all duration-500 hover:decoration-current">Installatiehulp</a>
        </div>
        <div class="flex flex-col items-center">
            <div class="w-32 h-28 relative group perspective-1000">
                <div class="w-full h-full absolute transition-transform duration-1000 transform-style-preserve-3d group-hover:rotate-y-360">
                    <img class="w-full h-full rounded-full absolute backface-hidden"
                        src="https://cms-images.mmst.eu/jq6pdee2ul1f/qSl6cpu2EirAK9fw6NCab/23720f9a48f72ecdd21877abfa5e1d12/homepage-service-bestelstatus.png?q=80&w=264">
                    <div class="w-full h-full absolute backface-hidden rotate-y-180 flip-horizontal flex items-center justify-center bg-gray-200 rounded-full">
                        <span class="text-sm font-semibold">Meer info</span>
                    </div>
                </div>
            </div>
            <a href="#" class="mt-2 underline decoration-transparent transition-all duration-500 hover:decoration-current">Bestelstatus</a>
        </div>
        <div class="flex flex-col items-center">
            <div class="w-32 h-28 relative group perspective-1000">
                <div class="w-full h-full absolute transition-transform duration-1000 transform-style-preserve-3d group-hover:rotate-y-360">
                    <img class="w-full h-full rounded-full absolute backface-hidden"
                        src="https://cms-images.mmst.eu/jq6pdee2ul1f/2AFZob8ZBxJEFMVm8liwCn/6557adee0ce60698c45453a160dfa07b/mymediamarkt-masthead-small.jpg?q=80&w=264">
                    <div class="w-full h-full absolute backface-hidden rotate-y-180 flip-horizontal flex items-center justify-center bg-gray-200 rounded-full">
                        <span class="text-sm font-semibold">Meer info</span>
                    </div>
                </div>
            </div>
            <a href="#" class="mt-2 underline decoration-transparent transition-all duration-500 hover:decoration-current">myMediaMarkt</a>
        </div>
        <div class="flex flex-col items-center">
            <div class="w-32 h-28 relative group perspective-1000">
                <div class="w-full h-full absolute transition-transform duration-1000 transform-style-preserve-3d group-hover:rotate-y-360">
                    <img class="w-full h-full rounded-full absolute backface-hidden"
                        src="https://cms-images.mmst.eu/jq6pdee2ul1f/6WQUWw9i2opb6Xl0ofxu9J/5edf1ac3d072e99a390582b88a43c165/homepage-service-winkels.png?q=80&w=264">
                    <div class="w-full h-full absolute backface-hidden rotate-y-180 flip-horizontal flex items-center justify-center bg-gray-200 rounded-full">
                        <span class="text-sm font-semibold">Meer info</span>
                    </div>
                </div>
            </div>
            <a href="#" class="mt-2 underline decoration-transparent transition-all duration-500 hover:decoration-current">Zoek een winkel</a>
        </div>
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

    function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("-translate-x-full");
    }

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

        setInterval(nextSlide, 5000);

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