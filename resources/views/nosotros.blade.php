<x-app-layout>
    <!-- Breadcrumbs -->
    <div class="sticky top-14 z-50 flex items-center bg-gray-800 h-12 text-white">
        <nav class="flex ml-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-white hover:text-fg-brand">
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
                            class="inline-flex items-center text-sm font-medium text-white hover:text-fg-brand">Nosotros</a>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Hero -->
    <div class="relative w-full h-96 overflow-hidden my-3">
        <!-- Fondo -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('img/fondo-inventario.png') }}');">
        </div>
        <!-- Opacidad -->
        <div class="absolute inset-0 bg-black/70 backdrop-blur-[1px]"></div>
        <!-- Contenido -->
        <div class="relative h-full flex flex-col items-center justify-center text-center px-4">
            <h1 class="text-white text-3xl font-black uppercase italic">
                ¿Por qué elegirnos?
            </h1>
            <p class="text-gray-200 mt-4 text-base max-w-md">
                Porque somos una empresa especializada en la venta de accesorios de autos. Nosotros contamos con presencia en el mercado nacional y trabajamos diariamente para que nuestros clientes nos tengan presente siempre.
            </p>
            <p class="text-gray-200 mt-4 text-base max-w-md">
                Contamos con servicios y accesorios especializados para cada modelo de auto, llevando calidad y garantía por todos nuestros productos.
            </p>
        </div>
    </div>

    <!-- Lista de services -->
    <div class="my-4 mx-6">
        <h2 class="text-lg my-2"><span class="font-semibold mr-1.5">Los servicios </span>a nuestros clientes</h2>
        <p class="text-gray-300 text-sm">Tenemos todos los necesario para que pongas a tu automóvil en óptimas condiciones y todo al mejor precio y con una insuperable atención.
        </p>
    </div>
</x-app-layout>
