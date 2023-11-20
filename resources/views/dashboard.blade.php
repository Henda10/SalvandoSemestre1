@extends('layout.master')

@section('content')
<section class="border-2 border-t-sky-600 max-w-full m-5 rounded-lg bg-white">
    <div class="border border-transparent border-b-gray-200 shadow-sm">
        <div class="flex justify-start items-center mx-5 my-3">
            {{-- icono --}}
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                class="m-1"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <style>
                    svg {
                        fill: #445163
                    }
                </style>
                <path
                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
            </svg>
            <h2 class="m-1">Usuario Disponible</h2>
        </div>
    </div>
    <div class="mx-5 my-3 overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 my-3">
            <thead class="bg-gray-100 text-center border divide-y">
                <tr>
                    <th class="border px-2 py-2">Cedula</th>
                    <th class="border px-2 py-2">Nombre</th>
                    <th class="border px-2 py-2">Cargo</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y min-w-full divide-gray-200">
                <tr class="text-center">
                    <td class="border px-2 py-2 whitespace-nowrap">4419879565478L</td>
                    <td class="border px-2 py-2 whitespace-nowrap">{{ auth()->user()->name }}</td>
                    <td class="border px-2 py-2 whitespace-nowrap">Administrador</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection