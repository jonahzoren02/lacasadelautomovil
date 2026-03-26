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

    <div class="mx-4 lg:mx-30">
        <div>
            <h2 class="text-center text-3xl font-semibold mx-10 my-6">ENVIOS A TODO HUAMANGA</h2>
            <p class="text-base text-justify my-2">
                Como norma general, los paquetes se envían dentro de los 3 días siguientes de la recepción del pago. Los
                gastos de envío incluyen los gastos de manipulación y empaquetado. Los gastos de manipulación tienen un
                precio fijo, mientras que los gastos de transporte pueden variar según el peso total del paquete.
            </p>
            <p class="text-base text-justify my-2">
                Si eliges comprar mediante nuestra web sírvase a contactar a nuestro personal de ventas enviando la
                siguiente información y aceptando los siguientes términos:
            </p>
            <ol class="text-justify mb-10">
                <li class="leading-4.5 my-4">1. Enviar imagen del documento de identidad del comprador.</li>
                <li class="leading-4.5 my-4">2. La dirección de entrega de los productos debe de coincidir con la
                    dirección
                    del DNI.</li>
                <li class="leading-4.5 my-4">3. Las compras realizadas serán entregadas después de 3 días desde su fecha
                    de
                    pago.</li>
            </ol>
        </div>

        <div class="flex justify-center my-6">
            <div class="">
                <img src="{{ asset('img/delivery_huamanga.png') }}" alt="Foto de clientes 01" class="max-w-xl">
            </div>
        </div>

        <div>
            <h2 class="text-center text-3xl font-semibold mx-15 my-10">ENVÍOS A TODO EL PERÚ</h2>
            <p class="text-lg font-semibold">
                PAGO PREVIO DEPOSITO:
            </p>
            <p class="text-justify">Una vez realizado el deposito y confirmado el monto en nuestro cuenta, se procederá
                a realizar el envió previa coordinación de la empresa de transportes que haya elegido en un rango de 24
                horas.
            </p>
            <div class="my-4">
                <h3>Envío Agencia:</h3>
                <p class="font-semibold">Shalon</p>
            </div>

            <p class="text-justify">«Estimado cliente, los costos de envío a provincia varían según la agencia y la
                ciudad de destino.
                Actualmente, los precios que manejamos son únicamente para envíos a través de Shalom. Si desea cotizar
                con otra agencia, con gusto podemos coordinarlo, pero el costo podría variar según las tarifas de cada
                empresa.»
            </p>
            </p>
        </div>

        <div class="flex justify-center my-6">
            <div>
                <img src="{{ asset('img/delivery_mapa.png') }}" alt="Foto de clientes 01" class="max-w-xl">
            </div>
        </div>

        <div class="flex flex-col items-center">
            <h2 class="text-center text-3xl font-semibold mx-15 my-8 ">ENTREGA EN TIENDA</h2>
            <img src="{{ asset('img/delivery_googlemaps.png') }}" alt="Mapa de Google Maps" class="max-w-3xl">
        </div>
        <div class="flex flex-col items-center my-6">
            <p class="text-2xl">Jr Maracaibo - Jesus Nazareno</p>
            <p class="text-base mt-3">Lunes a Domingos de 7:00 a 18:00</p>
        </div>
    </div>
</x-app-layout>
