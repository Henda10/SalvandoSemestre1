<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>

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
        <div class="border border-transparent border-b-gray-200 shadow-sm">
            <div class="flex justify-start items-center mx-5 my-3">
                {{-- icono --}}
                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                    viewBox="0 0 640 512" id="icon"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        #icon {
                            fill: #445163
                        }
                    </style>
                    <path
                        d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3V245.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5V416c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V389.2C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112h32c24 0 46.2 7.5 64.4 20.3zM448 416V394.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176h32c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2V416c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3V261.7c-10 11.3-16 26.1-16 42.3zm144-42.3v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2V448c0 17.7-14.3 32-32 32H288c-17.7 0-32-14.3-32-32V405.2c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112h32c61.9 0 112 50.1 112 112z" />
                </svg>
                <h2 class="m-1">Listado de clientes</h2>
            </div>
        </div>
        <div class="mx-5 my-3 overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 my-3">
                <thead class="bg-gray-100 text-center border divide-y">
                    <tr>
                        <th class="border px-2 py-2">Nro</th>
                        <th class="border px-2 py-2">Nombre completo</th>
                        <th class="border px-2 py-2">Ci</th>
                        <th class="border px-2 py-2">Celular</th>
                        <th class="border px-2 py-2">Email</th>
                        <th class="border px-2 py-2">Direcciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y min-w-full divide-gray-200">
                    <tr class="text-center">
                        <td class="border px-2 py-2 whitespace-nowrap">1</td>
                        <td class="border px-2 py-2 whitespace-nowrap">{{ auth()->user()->name }}</td>
                        <td class="border px-2 py-2 whitespace-nowrap">123456</td>
                        <td class="border px-2 py-2 whitespace-nowrap">6666-6666</td>
                        <td class="border px-2 py-2 whitespace-nowrap">dummy_user@gmail.com</td>
                        <td class="border px-2 py-2 whitespace-nowrap">De Don Boyo, 1/2 cuadra al hoyo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
