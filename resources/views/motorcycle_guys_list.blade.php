<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motociclistas</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<div>
    @include('components.navigation_links')
</div>

<body class="bg-gray-200">
    <section class="border-2 border-t-sky-600 max-w-full m-5 rounded-lg bg-white">
        <div class="flex items-center justify-between border border-transparent border-b-gray-200 shadow-sm">
            <div class="flex items-center ml-5 my-3">
                {{-- icono --}}
                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                    viewBox="0 0 640 512" id="icon"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        #icon {
                            fill: #445163
                        }
                    </style>
                    <path
                        d="M280 32c-13.3 0-24 10.7-24 24s10.7 24 24 24h57.7l16.4 30.3L256 192l-45.3-45.3c-12-12-28.3-18.7-45.3-18.7H64c-17.7 0-32 14.3-32 32v32h96c88.4 0 160 71.6 160 160c0 11-1.1 21.7-3.2 32h70.4c-2.1-10.3-3.2-21-3.2-32c0-52.2 25-98.6 63.7-127.8l15.4 28.6C402.4 276.3 384 312 384 352c0 70.7 57.3 128 128 128s128-57.3 128-128s-57.3-128-128-128c-13.5 0-26.5 2.1-38.7 6L418.2 128H480c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32H459.6c-7.5 0-14.7 2.6-20.5 7.4L391.7 78.9l-14-26c-7-12.9-20.5-21-35.2-21H280zM462.7 311.2l28.2 52.2c6.3 11.7 20.9 16 32.5 9.7s16-20.9 9.7-32.5l-28.2-52.2c2.3-.3 4.7-.4 7.1-.4c35.3 0 64 28.7 64 64s-28.7 64-64 64s-64-28.7-64-64c0-15.5 5.5-29.7 14.7-40.8zM187.3 376c-9.5 23.5-32.5 40-59.3 40c-35.3 0-64-28.7-64-64s28.7-64 64-64c26.9 0 49.9 16.5 59.3 40h66.4C242.5 268.8 190.5 224 128 224C57.3 224 0 281.3 0 352s57.3 128 128 128c62.5 0 114.5-44.8 125.8-104H187.3zM128 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                </svg>
                <h2 class="m-1">Listado de motociclistas</h2>
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
                            <span class="m-1">Nuevo motociclista</span>
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
                        <th class="border px-2 py-2">Nombre Completo</th>
                        <th class="border px-2 py-2">Ci</th>
                        <th class="border px-2 py-2">Cargo</th>
                        <th class="border px-2 py-2">Fecha de Nacimiento</th>
                        <th class="border px-2 py-2">Placa</th>
                        <th class="border px-2 py-2">Genero</th>
                        <th class="border px-2 py-2">Celular</th>
                        <th class="border px-2 py-2">Email</th>
                        <th class="border px-2 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y min-w-full divide-gray-200">
                    <tr class="text-center">
                        <td class="border px-2 py-2 whitespace-nowrap">1</td>
                        <td class="border px-2 py-2 whitespace-nowrap">{{ auth()->user()->name }}</td>
                        <td class="border px-2 py-2 whitespace-nowrap">123456</td>
                        <td class="border px-2 py-2 whitespace-nowrap">Administrador</td>
                        <td class="border px-2 py-2 whitespace-nowrap">{{ Carbon\Carbon::today() }}</td>
                        <td class="border px-2 py-2 whitespace-nowrap">MT-37519</td>
                        <td class="border px-2 py-2 whitespace-nowrap">No Binario</td>
                        <td class="border px-2 py-2 whitespace-nowrap">6666-6666</td>
                        <td class="border px-2 py-2 whitespace-nowrap">dummy_user@gmail.com</td>
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
</body>
