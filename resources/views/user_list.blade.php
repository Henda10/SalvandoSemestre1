<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>

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
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" class="m-1"
                    id="userIcon"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        #userIcon {
                            fill: #445163
                        }
                    </style>
                    <path
                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                </svg>
                <h2 class="m-1">Listado de usuarios</h2>
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
                            <span class="m-1">Nuevo usuario</span>
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
