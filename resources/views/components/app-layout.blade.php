<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/096d7f6991.js" crossorigin="anonymous"></script>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="relative max-w-7xl mx-auto">
        <header class="sticky top-0 z-50">
            <!-- Main menu -->
            <nav>
                <div class="flex flex-row justify-between items-center p-3 h-14 bg-red-600 text-white sm:h-16">
                    <div class="ml-5 block lg:hidden">
                        <button id="dropdownMenuButton" data-collapse-toggle="navbar-main" type="button">
                            <i class="fa-solid fa-bars text-lg sm:text-2xl"></i>
                        </button>
                    </div>
                    <div class="h-14 sm:h-16 lg:ml-6">
                        <img src="{{ asset('img/logo_lca.jpg') }}" class="aspect-auto h-full" alt="Web LCA Logo" />
                    </div>
                    <div class="max-w-xl hidden lg:flex">
                        <form class="mx-4">
                            <div class="flex shadow-xs rounded-base">
                                <select
                                    class="w-48 h-9 bg-white px-4 text-black rounded-tl-full rounded-bl-full border-none focus:ring-0 focus:outline-none">
                                    <option selected>Categoría</option>
                                    <option value="option1">Categoria 1</option>
                                    <option value="option2">Categoria 2</option>
                                    <option value="option3">Categoria 3</option>
                                    <option value="option4">Categoria 4</option>
                                    <option value="option5">Categoria 5</option>
                                    <option value="option6">Categoria 6</option>
                                    <option value="option7">Categoria 7</option>
                                </select>
                                <div class="h-9 w-0.5 border-r-2 border-red-600"></div>
                                <input type="text"
                                    class="w-96 h-9 pl-10 bg-white px-4 rounded-tr-full border-none rounded-br-full text-black pr-6 focus:ring-0 focus:outline-hidden"
                                    placeholder="Buscar...">
                            </div>
                        </form>
                    </div>
                    <!-- Registro -->
                    <div class="flex flex-row gap-4 mr-6">
                        <div class="hidden xl:block ">
                            <button class="flex justify-center items-center gap-2">
                                <i class="fa-solid fa-user text-lg sm:text-2xl"></i>
                                <p class="text-base">Ingresar/Registrar</p>
                            </button>
                        </div>
                        <div class="hidden sm:block">
                            <button>
                                <i class="fa-solid fa-heart-circle-plus text-lg sm:text-2xl"></i>
                            </button>
                        </div>
                        <div>
                            <button class="relative">
                                <i class="fa-solid fa-cart-plus text-lg sm:text-2xl"></i>
                                <div class="absolute -top-2 -inset-e-2 w-4 h-4 bg-blue-500 rounded-full sm:-top-1">
                                    <p class="text-xs font-bold">7</p>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <!--Secondary menu-->
                <div id="navbar-main"
                    class="hidden fixed inset-s-0 top-14 sm:top-16 bg-white shadow-md h-screen w-96 -z-50">
                    <div class="relative w-full flex justify-center my-3">
                        <form action="">
                            <input type="text" class="block w-80" placeholder="Buscar...">
                            <button class="absolute right-12 top-1"><i
                                    class="fa-solid fa-magnifying-glass fa-flip-horizontal text-gray-500 text-2xl"></i></button>
                        </form>
                    </div>
                    <ul class="mx-6 my-3 flex flex-col gap-2">
                        <li class="border-b border-gray-500 py-1">
                            <a href="{{ route('inicio') }}" class="text-black">Inicio</a>
                        </li>
                        <li class="border-b border-gray-500 py-1">
                            <a href="{{ route('porque-elegirnos') }}" class="text-black">Por que elegirnos</a>
                        </li>
                        <li class="border-b border-gray-500 py-1">
                            <a href="{{ route('nosotros') }}" class="text-black">Nosotros</a>
                        </li>
                        <li class="border-b border-gray-500 py-1">
                            <a href="{{ route('tienda') }}" class="text-black">Tienda</a>
                        </li>
                        <li class="border-b border-gray-500 py-1">
                            <a href="{{ route('delivery') }}" class="text-black">Envíos rápidos</a>
                        </li>
                        <li class="border-b border-gray-500 py-1">
                            <a href="{{ route('contacto') }}" class="text-black">Contacto</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Submenu -->
        <div class="bg-gray-800 mb-2 mx-auto max-w-5xl rounded-b-xl hidden lg:block">
            <ul class="mx-6 flex justify-around gap-6">
                <li class="py-1 px-4 hover:bg-gray-200/80 group rounded-md">
                    <a href="{{ route('inicio') }}" class="text-white group-hover:text-red-600">Inicio</a>
                </li>
                <li class="py-1 px-4 hover:bg-gray-200/80 group rounded-md">
                    <a href="{{ route('porque-elegirnos') }}" class="text-white group-hover:text-red-600">Por que elegirnos</a>
                </li>
                <li class="py-1 px-4 hover:bg-gray-200/80 group rounded-md">
                    <a href="{{ route('nosotros') }}" class="text-white group-hover:text-red-600">Nosotros</a>
                </li>
                <li class="py-1 px-4 hover:bg-gray-200/80 group rounded-md">
                    <a href="{{ route('tienda') }}" class="text-white group-hover:text-red-600">Tienda</a>
                </li>
                <li class="py-1 px-4 hover:bg-gray-200/80 group rounded-md">
                    <a href="{{ route('delivery') }}" class="text-white group-hover:text-red-600">Envios rápidos</a>
                </li>
                <li class="py-1 px-4 hover:bg-gray-200/80 group rounded-md">
                    <a href="{{ route('contacto') }}" class="text-white group-hover:text-red-600">Contacto</a>
                </li>
            </ul>
        </div>

        <main>
            {{ $slot }}
        </main>

        <footer>
            <div class="bg-red-600 px-7 pt-4 flex flex-col justify-start">
                <!-- Footer - Hero -->
                <div class="flex flex-col lg:flex-row lg:gap-10 lg:items-center">
                    <div class="w-1/3 my-2 lg:w-3/4">
                        <img src="{{ asset('img/logo_lca.jpg') }}" class="aspect-auto" alt="Web LCA Logo" />
                    </div>
                    <div class="mt-3">
                        <p class="text-sm leading-tight text-justify text-white lg:leading-normal lg:text-base">En
                            La casa del Automóvil nos dedicamos a brindar soluciones
                            exclusivas
                            para potenciar tu vehículo. Somos especialistas en la comercialización de accesorios
                            diseñados
                            para
                            las principales marcas del mercado, garantizando innovación, calidad superior y las últimas
                            tendencias en tecnología automotriz. Nuestra propuesta está enfocada en ofrecer productos
                            confiables
                            que elevan tu experiencia al conducir y reflejan tu estilo.</p>
                    </div>
                </div>
                <!-- Social media -->
                <div class="my-4 flex justify-center">
                    <ul class="flex text-xl gap-3 lg:gap-10 lg:mt-4 lg:text-2xl">
                        <li
                            class="flex justify-center items-center bg-gray-600 size-9 rounded-full group hover:bg-white lg:size-12">
                            <a href="#"><i
                                    class="fa-brands fa-facebook-f text-white group-hover:text-red-600"></i></a>
                        </li>
                        <li
                            class="flex justify-center items-center bg-gray-600 size-9 rounded-full group hover:bg-white lg:size-12">
                            <a href="#"><i
                                    class="fa-brands fa-instagram text-white group-hover:text-red-600"></i></a>
                        </li>
                        <li
                            class="flex justify-center items-center bg-gray-600 size-9 rounded-full group hover:bg-white lg:size-12">
                            <a href="#"><i
                                    class="fa-brands fa-tiktok text-white group-hover:text-red-600"></i></a>
                        </li>
                        <li
                            class="flex justify-center items-center bg-gray-600 size-9 rounded-full group hover:bg-white lg:size-12">
                            <a href="#"><i
                                    class="fa-brands fa-youtube text-white group-hover:text-red-600"></i></a>
                        </li>
                        <li
                            class="flex justify-center items-center bg-gray-600 size-9 rounded-full group hover:bg-white lg:size-12">
                            <a href="#"><i
                                    class="fa-brands fa-whatsapp text-white group-hover:text-red-600"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- Contacto -->
                <div class="pb-8">
                    <h2 class="my-2 font-semibold text-white lg:text-xl">Contacto</h2>
                    <div class="flex flex-col gap-1 text-white">
                        <p class="text-sm lg:text-base"><i clabase="fa-solid fa-house-user mx-3"></i>Jr. Maturín y Jr. Maracaibo,
                            Ayacucho</p>
                        <p class="text-sm lg:text-base"><i class="fa-regular fa-calendar-days mx-3"></i>Lunes a Domingos de 7:00
                            a
                            18:00</p>
                        <p class="text-sm lg:text-base"><i class="fa-solid fa-handshake mx-3"></i>Ventas 01: 994366171</p>
                        <p class="text-sm lg:text-base"><i class="fa-solid fa-handshake mx-3"></i>Ventas 02: </p>
                        <p class="text-sm lg:text-base"><i
                                class="fa-solid fa-envelope-circle-check mx-3"></i>ventas@lacasadelautomovil.com</p>
                    </div>
                </div>
                <!-- Derechos reservados -->
                <div class="border-t border-white pt-4 mb-3">
                    Derechos reservados © 2026 Grupo Kayros
                </div>
            </div>
        </footer>
    </div>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>
