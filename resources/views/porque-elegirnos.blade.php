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
                            class="inline-flex items-center text-sm font-medium text-white hover:text-red-600">Por que elegirnos</a>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Hero -->
    <div class="relative w-full h-96 overflow-hidden my-2 lg:h-110">
        <!-- Fondo -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('img/fondo-inventario.png') }}');">
        </div>
        <!-- Opacidad -->
        <div class="absolute inset-0 bg-black/70 backdrop-blur-[1px]"></div>
        <!-- Contenido -->
        <div class="relative h-full flex flex-col items-center justify-center text-center px-4">
            <h1 class="text-white text-3xl font-black uppercase italic lg:text-5xl">
                ¿Por qué elegirnos?
            </h1>
            <p class="text-gray-200 mt-4 text-base max-w-md lg:text-lg">
                Porque somos una empresa especializada en la venta de accesorios de autos. Nosotros contamos con
                presencia en el mercado nacional y trabajamos diariamente para que nuestros clientes nos tengan presente
                siempre.
            </p>
            <p class="text-gray-200 mt-4 text-base max-w-md">
                Contamos con servicios y accesorios especializados para cada modelo de auto, llevando calidad y garantía
                por todos nuestros productos.
            </p>
        </div>
    </div>

    <!-- Lista de services -->
    <div class="flex flex-col gap-4 items-center w-6/8 mx-auto lg:flex-row lg:w-7/8 lg:mt-8">
        <!-- Title -->
        <div class="mt-4 lg:my-6 lg:basis-1/4">
            <h2 class="text-lg my-2 lg:text-xl"><span class="font-semibold mr-1.5">Los servicios </span>a nuestros
                clientes</h2>
            <p class="text-gray-500 text-sm lg:text-base">Tenemos todos los necesario para que pongas a tu automóvil en óptimas condiciones y todo al mejor precio y con una insuperable atención.
            </p>
        </div>
        <!--List -->
        <div class="flex flex-col gap-6 w-full lg:flex-row lg:gap-3 lg:basis-3/4">
            <div class="flex justify-center h-60 bg-gray-800 lg:h-70">
                <div class="flex flex-col items-center justify-between w-5/7 py-10 text-white">
                    <i class="fa-solid fa-truck-fast text-3xl"></i>
                    <h2 class="font-bold text-lg text-center">ENVIO RÁPIDO</h2>
                    <p class="text-sm text-center">Envios seguros y confiables hasta la ubicación que nos des</p>
                </div>
            </div>
            <div class="flex justify-center h-60 bg-gray-800 lg:h-70">
                <div class="flex flex-col items-center justify-between w-5/7 py-10 text-white">
                    <i class="fa-solid fa-handshake-angle text-3xl"></i>
                    <h2 class="font-bold text-lg text-center">ASESORIA ESPECIALIZADA</h2>
                    <p class="text-sm text-center">Personal con experiencia en el mercado de automóviles.</p>
                </div>
            </div>
            <div class="flex justify-center h-60 bg-gray-800 lg:h-70">
                <div class="flex flex-col items-center justify-between w-5/7 py-10 text-white">
                    <i class="fa-regular fa-circle-check text-3xl"></i>
                    <h2 class="font-bold text-lg text-center">100% CALIDAD</h2>
                    <p class="text-sm text-center">Nuestros productos provienen de marcas garantizadas.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Lista de marcas -->
    <div class="flex flex-col gap-4 mx-auto w-6/8 my-8">
        <div>
            <h2 class="text-2xl font-semibold">REPUESTOS DE LAS MEJORES MARCAS</h2>
            <p class="text-base text-gray-600">Con la mejor calidad y a precios insuperables</p>
        </div>
        <div class="relative w-full carousel-brands">
            <div class="swiper swiper-brands">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="size-25 mx-4 max-w-4xl lg:mx-auto">
                            <img src="{{ asset('img/marca_ford.png') }}" class="h-full object-contain" />
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="size-25 mx-4 max-w-4xl lg:mx-auto">
                            <img src="{{ asset('img/marca_hyundai.png') }}" class="h-full object-contain" />
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="size-25 mx-4 max-w-4xl lg:mx-auto">
                            <img src="{{ asset('img/marca_mitsubishi.png') }}" class="h-full object-contain" />
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="size-25 mx-4 max-w-4xl lg:mx-auto">
                            <img src="{{ asset('img/marca_toyota.png') }}" class="h-full object-contain" />
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="size-25 mx-4 max-w-4xl lg:mx-auto">
                            <img src="{{ asset('img/marca_isuzu.png') }}" class="h-full object-contain" />
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="size-25 mx-4 max-w-4xl lg:mx-auto">
                            <img src="{{ asset('img/marca_kia.png') }}" class="h-full object-contain" />
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="size-25 mx-4 max-w-4xl lg:mx-auto">
                            <img src="{{ asset('img/marca_lexus.png') }}" class="h-full object-contain" />
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="size-25 mx-4 max-w-4xl lg:mx-auto">
                            <img src="{{ asset('img/marca_subaru.png') }}" class="w-full object-contain" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
