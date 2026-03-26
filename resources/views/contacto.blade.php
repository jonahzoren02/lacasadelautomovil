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
                            class="inline-flex items-center text-sm font-medium text-white hover:text-red-600">Envíos
                            rápidos</a>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Contacto -->
    <div class="bg-gray-800 py-4 m-2 rounded-xl max-w-xl sm:mx-25 sm:py-10">
        <div class="mx-4 text-white">
            <h2 class="text-center text-3xl font-semibold my-5 text-red-600">CONTACTO</h2>
            <p class="text-justify mb-3">Si tienes alguna pregunta o comentario, no dudes en contactarnos con nosotros.
            </p>
            <h3 class="font-bold mb-3">Deja un mensaje</h3>
            <form action="" class="border border-red-600 rounded-xl px-3 py-6">
                <div class="flex flex-col items-start mt-3 gap-1">
                    <label for="name">Nombre:</label>
                    <input type="text" class="w-full" id="name" name="name" placeholder="Nombre" required>
                </div>
                <div class="flex flex-col items-start mt-3 gap-1">
                    <label for="email">Email:</label>
                    <input type="email" class="w-full" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="flex flex-col items-start mt-3 gap-1">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" class="w-full" name="message" placeholder="Mensaje" required></textarea>
                </div>
                <div class="my-5 py-2 bg-red-600 flex justify-center rounded-xl">
                    <button type="submit"><span class="text-extrabold text-lg">Enviar</span></button>
                </div>
            </form>
        </div>
    </div>

    <!-- Telefono -->
    <div class="w-full px-4 ">
        <div class="flex justify-center">
            <img src="{{ asset('img/contacto-call.png') }}" class="">
        </div>
        <div class="">
            <h2 class="text-2xl text-center font-semibold mt-8 mb-3 border-b border-gray-400">Teléfonos</h2>
        </div>
        <div class="">
            <ul class="flex justify-evenly">
                <li>
                    <p><i class="fa-solid fa-mobile-screen-button"></i>987654321</p>
                </li>
                <li>
                    <p><i class="fa-solid fa-mobile-screen-button"></i>987654321</p>
                </li>
                <li>
                    <p><i class="fa-solid fa-mobile-screen-button"></i>987654321</p>
                </li>
            </ul>
        </div>
    </div>

    <!-- Telefono -->
    <div class="w-full px-4 ">
        <div class="">
            <h2 class="text-2xl text-center font-semibold mt-8 mb-3 border-b border-gray-400">Mantente en contacto</h2>
        </div>
        <div class="">
            <ul class="flex justify-evenly">
                <li>
                    <div class="flex gap-2">
                        <i class="fa-regular fa-envelope"></i>
                        <div class="flex flex-col">
                            <h3 class="text-2xl text-gray-500">CORREO VENTAS</h3>
                            <p class="text-gray-800">ventas@lacasadelautomovil.com</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</x-app-layout>
