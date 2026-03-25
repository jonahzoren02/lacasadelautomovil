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
                            class="inline-flex items-center text-sm font-medium text-white hover:text-fg-brand">Tienda</a>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <div class="flex">
        <!-- Filtros productos-->
        <div class="hidden bg-white sm:block basis-2/8 mx-6 my-8">
            <!-- Categorias -->
            <div class="my-4 pb-3">
                <div class="border-b py-4 -mt-3 border-gray-700">
                    <h2 class="text-base font-semibold">CATEGORíAS</h2>
                </div>
                <div class="mt-4">
                    <ul class="flex flex-col gap-3 text-gray-600">
                        <li class="hover:text-black hover:text-shadow-lg"><a href="#">Categoria 1</a>
                        </li>
                        <li class="hover:text-black hover:text-shadow-lg"><a href="#">Categoria 2</a>
                        </li>
                        <li class="hover:text-black hover:text-shadow-lg"><a href="#">Categoria 3</a>
                        </li>
                        <li class="hover:text-black hover:text-shadow-lg"><a href="#">Categoria 4</a>
                        </li>
                        <li class="hover:text-black hover:text-shadow-lg"><a href="#">Categoria 5</a>
                        </li>
                        <li class="hover:text-black hover:text-shadow-lg"><a href="#">Categoria 6</a>
                        </li>
                        <li class="hover:text-black hover:text-shadow-lg"><a href="#">Categoria 7</a>
                        </li>
                        <li class="hover:text-black hover:text-shadow-lg"><a href="#">Categoria 8</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Filtro por precio -->
            <div class="my-4 pb-3">
                <div class="border-b py-4 border-gray-700">
                    <h2 class="text-base font-semibold">FILTRO POR PRECIOS</h2>
                </div>
                <div class="mt-4">
                    <div class="relative mb-6">
                        <label for="labels-range-input" class="sr-only">Labels range</label>
                        <input id="labels-range-input" type="range" value="1500" min="100" max="3000"
                            class="w-full h-1 bg-gray-800 rounded-full appearance-none cursor-pointer">
                        <span class="text-sm text-body absolute inset-s-0 -bottom-6">S/ 100</span>
                        <span class="text-sm text-body absolute inset-e-0 -bottom-6">S/ 3500</span>
                    </div>
                </div>
            </div>

            <!--Filtro por Marca-->
            <div class="my-4 pb-3">
                <div class="border-b py-4 border-gray-700">
                    <h2 class="text-base font-semibold">MARCA</h2>
                </div>
                <div class="mt-4">
                    <ul class="flex flex-col gap-3">
                        <li class="flex items-center gap-2">
                            <input type="checkbox" id="checkbox-1" name="checkbox-1" value="1"
                                class="size-4 border border-black rounded-sm cursor-pointer accent-red-600">
                            <label for="checkbox-1" class="text-base text-gray-600">Marca 1</label>
                        </li>
                        <li class="flex items-center gap-2">
                            <input type="checkbox" id="checkbox-2" name="checkbox-2" value="2"
                                class="size-4 border border-black rounded-sm cursor-pointer accent-red-600">
                            <label for="checkbox-2" class="text-base text-gray-600">Marca 2</label>
                        </li>
                        <li class="flex items-center gap-2">
                            <input type="checkbox" id="checkbox-3" name="checkbox-3" value="3"
                                class="size-4 border border-black rounded-sm cursor-pointer accent-red-600">
                            <label for="checkbox-3" class="text-base text-gray-600">Marca 3</label>
                        </li>
                        <li class="flex items-center gap-2">
                            <input type="checkbox" id="checkbox-4" name="checkbox-4" value="4"
                                class="size-4 border border-black rounded-sm cursor-pointer accent-red-600">
                            <label for="checkbox-4" class="text-base text-gray-600">Marca 4</label>
                        </li>
                        <li class="flex items-center gap-2">
                            <input type="checkbox" id="checkbox-5" name="checkbox-5" value="5"
                                class="size-4 border border-black rounded-sm cursor-pointer accent-red-600">
                            <label for="checkbox-5" class="text-base text-gray-600">Marca 5</label>
                        </li>
                        <li class="flex items-center gap-2">
                            <input type="checkbox" id="checkbox-6" name="checkbox-6" value="6"
                                class="size-4 border border-black rounded-sm cursor-pointer accent-red-600">
                            <label for="checkbox-6" class="text-base text-gray-600">Marca 6</label>
                        </li>
                        <li class="flex items-center gap-2">
                            <input type="checkbox" id="checkbox-7" name="checkbox-7" value="7"
                                class="size-4 border border-black rounded-sm cursor-pointer accent-red-600">
                            <label for="checkbox-7" class="text-base text-gray-600">Marca 7</label>
                        </li>
                        <li class="flex items-center gap-2">
                            <input type="checkbox" id="checkbox-8" name="checkbox-8" value="8"
                                class="size-4 border border-black rounded-sm cursor-pointer accent-red-600">
                            <label for="checkbox-8" class="text-base text-gray-600">Marca 8</label>
                        </li>

                    </ul>
                </div>
            </div>

            <!--Filtro por Status-->
            <div class="my-4 pb-3">
                <div class="border-b py-4 border-gray-700">
                    <h2 class="text-base font-semibold">STATUS</h2>
                </div>
                <div class="mt-4">
                    <ul class="flex flex-col gap-3">
                        <li class="flex items-center gap-2">
                            <input type="checkbox" id="checkbox-1" name="checkbox-1" value="1"
                                class="size-4 border border-black rounded-sm cursor-pointer accent-red-600">
                            <label for="checkbox-1" class="text-base text-gray-600">En stock</label>
                        </li>
                        <li class="flex items-center gap-2">
                            <input type="checkbox" id="checkbox-2" name="checkbox-2" value="2"
                                class="size-4 border border-black rounded-sm cursor-pointer accent-red-600">
                            <label for="checkbox-2" class="text-base text-gray-600">Agotado</label>
                        </li>
                        <li class="flex items-center gap-2">
                            <input type="checkbox" id="checkbox-3" name="checkbox-3" value="3"
                                class="size-4 border border-black rounded-sm cursor-pointer accent-red-600">
                            <label for="checkbox-3" class="text-base text-gray-600">En venta</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--Cuadricula de productos -->
        <div class="w-full sm:basis-6/8">
            <!-- Publicidad Servicio -->
            <div class="relative bg-gray-800 m-2 h-64 rounded-md -z-20 overflow-hidden">
                <img src="img/img_service.png"
                    class="absolute w-96 -bottom-52 -inset-e-48 -z-10 animate-wiggle sm:-bottom-20 sm:-inset-e-48 sm:w-6xl transition-all duration-500" />
                <div class="flex flex-col gap-4 pt-11 px-6">
                    <div class="flex flex-col gap-4 z-0">
                        <p2 class="text-white text-2xl font-bold font-arial">Los mejores accesorios para tu
                            vehiculo
                        </p2>
                        <p class=" text-white leading-5">Con la mejor calidad y a precios insuperables</p>
                        <span class="text-yellow-400 font-bold mt-3">TE ASESORAMOS<i
                                class="fa-brands fa-whatsapp fa-bounce ml-3"></i></span>
                    </div>
                </div>
            </div>

            <!--Lista de productos-->
            <div class="mx-2">
                <!-- Ordena y cantidad -->
                <div>
                    <div class="flex flex-row gap-2 justify-between">
                        <select class="basis-1/2 border border-gray-600 rounded-md px-4">
                            <option value="option1">Ordenar por popularidad</option>
                            <option value="option2">Ordenar por ultimos ingresos</option>
                            <option value="option3" selected>Ordenar por </option>
                            <option value="option4">Ordenar por precio: bajo a alto</option>
                            <option value="option5">Ordenar por precio: alto a bajo</option>
                        </select>
                        <select class="basis-1/8 min-w-24 border border-gray-600 rounded-md px-4">
                            <option value="option1" selected>12</option>
                            <option value="option2">24</option>
                            <option value="option3">36</option>
                            <option value="option4">100</option>
                        </select>
                    </div>
                </div>

                <!-- Cuadricula de productos -->
                <div class="grid grid-cols-2 my-4 lg:grid-cols-3 lg:gap-4">
                    <!--Producto 1-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 2-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 3-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 4-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 5-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 6-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 7-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 8-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 9-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 10-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 11-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 12-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 13-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 14-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 15-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Producto 16-->
                    <div class="border border-black w-full">
                        <div
                            class="flex items-center justify-center my-3 mx-1 h-2/5 sm:h-1/2 transition-all duration-500">
                            <img src="{{ asset('img/repuesto_1.jpg') }}" class="my-3 h-full object-cover" />
                        </div>
                        <div class="mx-2 sm:text-base sm:pl-3 sm:mt-2">
                            <p class="text-base leading-5">REPUESTO LUCES DELANTERAS</p>
                            <p class="text-gray-400 text-sm">TOYOTA 2022 Camry</p>
                            <p class="font-bold text-base my-3">S/ 85.00</p>
                            <div class="flex justify-between gap-2 mt-3 mx-3">
                                <form class="">
                                    <div class="relative flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="quantity-input"
                                            class="flex justify-center items-center box-border border font-medium leading-5 text-sm px-3 focus:outline-none focus:ring-0 h-10 w-5">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="border-x-0 h-10 w-10 text-center py-2.5" placeholder="1" required
                                            value="1" />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="quantity-input"
                                            class="flex justify-center items-center box-border border focus:ring-0 font-medium leading-5 text-sm px-3 focus:outline-none h-10 w-5">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="flex justify-center items-center bg-red-500 rounded-xl size-10">
                                    <button class="text-white"><i class="fa-solid fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Paginación-->
                <div class="flex justify-center items-center mb-5">
                    <nav class="flex items-center gap-1">
                        <a class="text-gray-500 hover:text-gray-900 p-2 inline-flex items-center md:mr-8 mr-1"
                            href="javascript:;">
                            <span
                                class="w-10 h-10 rounded-full transition-all duration-150 flex justify-center items-center hover:border hover:border-gray-200">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.5 1L1.91421 4.58578C1.24755 5.25245 0.914213 5.58579 0.914213 6C0.914213 6.41421 1.24755 6.74755 1.91421 7.41421L5.5 11"
                                        stroke="#4F46E5" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                        <a class="w-10 h-10  bg-transparent text-gray-500 p-2 justify-center inline-flex items-center rounded-full transition-all duration-150 hover:text-red-600"
                            href="javascript:;" aria-current="page">1</a>
                        <a class="w-10 h-10 bg-red-600 text-white p-2 justify-center inline-flex items-center rounded-full transition-all duration-150 hover:bg-red-600 hover:text-white"
                            href="javascript:;">2</a>
                        <a class="w-10 h-10 bg-transparent text-gray-500 p-2 justify-center inline-flex items-center rounded-full transition-all duration-150 hover:text-red-600"
                            href="javascript:;">3</a>
                        <a class="w-10 h-10 bg-transparent text-gray-500 p-2 justify-center inline-flex items-center rounded-full transition-all duration-150 hover:text-red-600"
                            href="javascript:;">4</a>
                        <a class="w-10 h-10 bg-transparent text-gray-500 p-2 justify-center inline-flex items-center rounded-full transition-all duration-150 hover:text-red-600"
                            href="javascript:;">...</a>
                        <a class="w-10 h-10 bg-transparent text-gray-500 p-2 justify-center inline-flex items-center rounded-full transition-all duration-150 hover:text-red-600"
                            href="javascript:;">10</a>
                        <a class="text-gray-500 hover:text-gray-900 p-2 inline-flex items-center md:ml-8 ml-1"
                            href="javascript:;">
                            <span
                                class="w-10 h-10 rounded-full transition-all duration-150 flex justify-center items-center hover:border hover:border-gray-200">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.5 11L5.08578 7.41421C5.75245 6.74755 6.08579 6.41421 6.08579 6C6.08579 5.58579 5.75245 5.25245 5.08579 4.58579L1.5 1"
                                        stroke="#4F46E5" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
