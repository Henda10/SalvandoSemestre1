@extends('layout.master')

@section('content')
    <section class="border-2 border-t-sky-600 max-w-full m-5 rounded-lg bg-white">
        <div class="flex items-center justify-between border border-transparent border-b-gray-200 shadow-sm">
            <div class="flex items-center ml-5 my-3">
                {{-- icono --}}
                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                    viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        svg {
                            fill: #445163
                        }
                    </style>
                    <path
                        d="M547.6 103.8L490.3 13.1C485.2 5 476.1 0 466.4 0H109.6C99.9 0 90.8 5 85.7 13.1L28.3 103.8c-29.6 46.8-3.4 111.9 51.9 119.4c4 .5 8.1 .8 12.1 .8c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.2 0 49.3-11.4 65.2-29c16 17.6 39.1 29 65.2 29c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4zM499.7 254.9l-.1 0c-5.3 .7-10.7 1.1-16.2 1.1c-12.4 0-24.3-1.9-35.4-5.3V384H128V250.6c-11.2 3.5-23.2 5.4-35.6 5.4c-5.5 0-11-.4-16.3-1.1l-.1 0c-4.1-.6-8.1-1.3-12-2.3V384v64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V384 252.6c-4 1-8 1.8-12.3 2.3z" />
                </svg>
                <h2 class="m-1">Listado de pedidos</h2>
            </div>
            <div class="flex items-center mr-5 my-3">
                {{-- agregar nuevo usuario --}}
                <div class="text-center">
                    <button
                        class="border rounded-lg text-sm px-3 py-2 text-center font-semibold hover:bg-sky-800 bg-sky-600 text-white flex justify-center items-center"
                        type="submit">
                        <div class="m-1">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                id="addUser"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    #addUser {
                                        fill: #ffffff
                                    }
                                </style>
                                <path
                                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                            </svg>
                        </div>
                        <div>
                            <span class="m-1">Nuevo pedido</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="mx-5 my-3 overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 my-3">
                <thead class="bg-gray-100 text-center border divide-y">
                    <tr>
                        <th class="border px-2 py-2">Nro</th>
                        <th class="border px-2 py-2">Cliente</th>
                        <th class="border px-2 py-2">CI/NIT</th>
                        <th class="border px-2 py-2">Celular</th>
                        <th class="border px-2 py-2">Dirección</th>
                        <th class="border px-2 py-2">Pedido completo</th>
                        <th class="border px-2 py-2">Asignación del motociclista</th>
                        <th class="border px-2 py-2">Estado del pedido</th>
                        <th class="border px-2 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y min-w-full divide-gray-200">
                    <tr class="text-center">
                        <td class="border px-2 py-2 whitespace-nowrap">1</td>
                        <td class="border px-2 py-2 whitespace-nowrap">{{ auth()->user()->name }}</td>
                        <td class="border px-2 py-2 whitespace-nowrap">123456</td>
                        <td class="border px-2 py-2 whitespace-nowrap">6666-6666</td>
                        <td class="border px-2 py-2 whitespace-nowrap">En el infinito y más allá</td>
                        <td class="border px-2 py-2 whitespace-nowrap">2 cajitas feliz de tip top</td>
                        <td class="border px-2 py-2 whitespace-nowrap">Henry</td>
                        <td class="border px-2 py-2 whitespace-nowrap">Entregando</td>
                        {{-- Acciones --}}
                        <td class="border px-2 py-2 flex justify-around items-center">
                            {{-- editar --}}
                            <button
                                class="border rounded-lg text-sm px-2 py-2 text-center font-semibold hover:bg-green-800 bg-green-600 text-white flex justify-center items-center">
                                <svg xmlns="{{ asset('vendor/fontawesome-free/svgs/solid/user-pen') }}" height="0.8rem"
                                    viewBox="0 0 640 512"
                                    id="editUser"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        #editUser {
                                            fill: white
                                        }
                                    </style>
                                    <path
                                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H322.8c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7l40.3-40.3c-32.1-31-75.7-50.1-123.9-50.1H178.3zm435.5-68.3c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM375.9 417c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L576.1 358.7l-71-71L375.9 417z" />
                                </svg>
                                <div>
                                    <span class="m-1">Editar</span>
                                </div>
                            </button>
                            {{-- eliminar --}}
                            <button
                                class="border rounded-lg text-sm px-2 py-2 text-center font-semibold hover:bg-red-800 bg-red-600 text-white flex justify-center items-center">
                                <svg xmlns="{{ asset('vendor/fontawesome-free/svgs/regular/trash-can') }}"
                                    height="0.8rem" viewBox="0 0 448 512"
                                    id="deleteUser"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        #deleteUser {
                                            fill: white
                                        }
                                    </style>
                                    <path
                                        d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
                                </svg>
                                <div>
                                    <span class="m-1">Eliminar</span>
                                </div>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="border-2 border-t-sky-600 max-w-full m-5 rounded-lg bg-white">
        <div class="flex items-center justify-between border border-transparent border-b-gray-200 shadow-sm">
            <div class="flex items-center ml-5 my-3">
                {{-- icono --}}
                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                    viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        svg {
                            fill: #445163
                        }
                    </style>
                    <path
                        d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                </svg>
                <h2 class="m-1">Delivery de pedidos</h2>
            </div>
        </div>
        <div class="mx-5 my-3 overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 my-3">
                <thead class="bg-gray-100 text-center border divide-y">
                    <tr>
                        <th class="border px-2 py-2">Nro</th>
                        <th class="border px-2 py-2">Motociclistas</th>
                        <th class="border px-2 py-2">Celular</th>
                        <th class="border px-2 py-2">Correo</th>
                        <th class="border px-2 py-2">Pedidos asignados</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y min-w-full divide-gray-200">
                    <tr class="text-center">
                        <td class="border px-2 py-2 whitespace-nowrap">1</td>
                        <td class="border px-2 py-2 whitespace-nowrap">{{ auth()->user()->name }}</td>
                        <td class="border px-2 py-2 whitespace-nowrap">6666-6666</td>
                        <td class="border px-2 py-2 whitespace-nowrap">dummy_user@gmail.com</td>
                        <td class="border px-2 py-2 whitespace-nowrap"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection