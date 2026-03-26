<x-app-layout>
    <!-- Breadcrumbs -->
    <div class="sticky top-14 z-40 flex items-center bg-gray-800 h-12 text-white">
        <nav class="flex ml-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-white hover:text-red-600">
                        <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                        </svg>
                        Inicio
                    </a>
                </li>
                <li>
                    <div class="flex items-center space-x-1.5">
                        <svg class="w-3.5 h-3.5 rtl:rotate-180 text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7" />
                        </svg>
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-white hover:text-red-600">Nosotros</a>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Hero -->
    <div class="flex flex-col w-full h-45 justify-center my-2 bg-gray-800 px-10">
        <div class="flex flex-col gap-2">
            <h2 class="text-white text-3xl font-semibold">NUESTRA EMPRESA</h2>
            <p class="text-gray-400 leading-4.5"> Dedicada a la venta de respuestos de alta calidad y servicios con
                garantia para nuestros clientes.</p>
        </div>
    </div>

    <!-- Title -->
    <div class="mx-4 flex flex-col gap-3 mb-6 items-center">
        <div class="max-w-4xl">
            <img src="{{ asset('img/nosotros_trabajadores.jpg') }}" alt="Trabajadores de La casa del automovil"
                class="rounded-xl">
        </div>
        <div class="my-4">
            <div class="flex justify-center mb-4">
                <h2 class="w-60 text-red-600 text-lg text-center font-semibold border-b-2 border-red-600">LA CASA DEL
                    AUTOMÓVIL</h2>
            </div>
            <p class="text-sm leading-4.5 text-justify text-gray-500">La casa del automovil es una empresa dedicada a la
                venta de respuestos de alta calidad y servicios con garantia para nuestros clientes.</p>
        </div>
        <div class="flex flex-col w-9/10 gap-3 mx-auto max-w-4xl">
            <div class="shadow-sm shadow-red-600 shadow-bshad p-4 rounded-md bg-gray-800">
                <h2 class="text-white text-lg font-semibold">MISIÓN</h2>
                <p class="text-sm text-gray-400 leading-4.5 text-justify">Nuestros clientes son personas que buscan un
                    respuesto de alta calidad y servicios con garantia para nuestros clientes.</p>
            </div>
            <div class="shadow-sm shadow-red-600 shadow-bshad p-4 rounded-md bg-gray-800">
                <h2 class="text-white text-lg font-semibold">VISIÓN</h2>
                <p class="text-sm text-gray-400 leading-4.5 text-justify">Nuestros clientes son personas que buscan un
                    respuesto de alta calidad y servicios con garantia para nuestros clientes.</p>
            </div>
        </div>

    </div>

    <!-- Nuestro equipo -->
    <!-- Title -->
    <div class="flex justify-center">
        <h2 class="w-44 text-red-600 text-lg text-center font-semibold border-b-2   -red-600">NUESTRO EQUIPO
        </h2>
    </div>
    <!-- Lista equipo -->
    <div class="mt-4 w-7/10 mx-auto lg:w-9/10">
        <div class="grid grid-cols-1 items-center gap-5 md:grid-cols-2 lg:grid-cols-4">
            <div class="py-2 px-4 shadow-2xl rounded-md col-span-1">
                <div class="flex justify-center">
                    <img src="{{ asset('img/nosotros_trabajador.png') }}" alt="Foto de trabajador" class="rounded-md">
                </div>
                <div class="flex flex-col items-center my-3">
                    <h2 class="text-red-600 text-lg font-semibold">JOSE TAIPA</h2>
                    <h3 class="text-gray-500 -mt-2 mb-3">Administrador</h3>
                    <div class="mx-6 max-w-sm">
                        <p class="text-justify text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed non risus. Suspendisse lectus tortor</p>
                    </div>
                </div>
            </div>
            <div class="py-2 px-4 shadow-2xl rounded-md">
                <div class="flex justify-center">
                    <img src="{{ asset('img/nosotros_trabajador.png') }}" alt="Foto de trabajador" class="rounded-md">
                </div>
                <div class="flex flex-col items-center my-3">
                    <h2 class="text-red-600 text-lg font-semibold">RONALDO</h2>
                    <h3 class="text-gray-500 -mt-2 mb-3">Administrador</h3>
                    <div class="mx-6 max-w-sm">
                        <p class="text-justify text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed non risus. Suspendisse lectus tortor</p>
                    </div>
                </div>
            </div>
            <div class="py-2 px-4 shadow-2xl rounded-md">
                <div class="flex justify-center">
                    <img src="{{ asset('img/nosotros_trabajador.png') }}" alt="Foto de trabajador" class="rounded-md">
                </div>
                <div class="flex flex-col items-center my-3">
                    <h2 class="text-red-600 text-lg font-semibold">SEBASTIAN</h2>
                    <h3 class="text-gray-500 -mt-2 mb-3">Administrador</h3>
                    <div class="mx-6 max-w-sm">
                        <p class="text-justify text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed non risus. Suspendisse lectus tortor</p>
                    </div>
                </div>
            </div>
            <div class="py-2 px-4 shadow-2xl rounded-md">
                <div class="flex justify-center">
                    <img src="{{ asset('img/nosotros_trabajador.png') }}" alt="Foto de trabajador" class="rounded-md">
                </div>
                <div class="flex flex-col items-center my-3">
                    <h2 class="text-red-600 text-lg font-semibold">RUBY</h2>
                    <h3 class="text-gray-500 -mt-2 mb-3">Administrador</h3>
                    <div class="mx-6 max-w-sm">
                        <p class="text-justify text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed non risus. Suspendisse lectus tortor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nuestro clientes -->
    <!-- Tilte -->
    <div class="flex justify-center mt-10">
        <h2 class="w-55 text-red-600 text-lg text-center font-semibold border-b-2 border-red-600">NUESTROS CLIENTES
        </h2>
    </div>
    <!-- Carousel clientes -->
    <div class="mt-8 mb-6 flex justify-center lg:hidden">
        <div class="w-9/11 carousel-clients">
            <div class="swiper swiper-clients">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex flex-col gap-2">
                            <div class="size-40">
                                <img src="{{ asset('img/repuesto_1.jpg') }}" alt="Foto de clientes 01"
                                    class="h-full aspect-video object-cover">
                            </div>
                            <div class="size-40">
                                <img src="{{ asset('img/repuesto_5.jpg') }}" alt="Foto de clientes 01"
                                    class="h-full aspect-video object-cover">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col gap-2">
                            <div class="size-40">
                                <img src="{{ asset('img/repuesto_2.jpg') }}" alt="Foto de clientes 01"
                                    class="h-full aspect-video object-cover">
                            </div>
                            <div class="size-40">
                                <img src="{{ asset('img/repuesto_4.jpg') }}" alt="Foto de clientes 01"
                                    class="h-full aspect-video object-cover">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-80">
                        <div class="flex flex-col gap-2">
                            <div class="size-40">
                                <img src="{{ asset('img/repuesto_3.jpg') }}" alt="Foto de clientes 01"
                                    class="h-full aspect-video object-cover">
                            </div>
                            <div class="size-40">
                                <img src="{{ asset('img/logo_lca.jpg') }}" alt="Foto de clientes 01"
                                    class="h-full aspect-video object-cover">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="mt-8 mb-6 lg:flex justify-center hidden ">
        <div class="w-9/11 carousel-clients ">
            <div class="swiper swiper-clients">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex flex-col gap-2">
                            <div class="size-40">
                                <img src="{{ asset('img/repuesto_1.jpg') }}" alt="Foto de clientes 01"
                                    class="h-full aspect-video object-cover">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col gap-2">
                            <div class="size-40">
                                <img src="{{ asset('img/repuesto_2.jpg') }}" alt="Foto de clientes 01"
                                    class="h-full aspect-video object-cover">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-80">
                        <div class="flex flex-col gap-2">
                            <div class="size-40">
                                <img src="{{ asset('img/repuesto_3.jpg') }}" alt="Foto de clientes 01"
                                    class="h-full aspect-video object-cover">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col gap-2">
                            <div class="size-40">
                                <img src="{{ asset('img/repuesto_4.jpg') }}" alt="Foto de clientes 01"
                                    class="h-full aspect-video object-cover">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col gap-2">
                            <div class="size-40">
                                <img src="{{ asset('img/repuesto_5.jpg') }}" alt="Foto de clientes 01"
                                    class="h-full aspect-video object-cover">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-80">
                        <div class="flex flex-col gap-2">
                            <div class="size-40">
                                <img src="{{ asset('img/logo_lca.jpg') }}" alt="Foto de clientes 01"
                                    class="h-full aspect-video object-cover">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</x-app-layout>
