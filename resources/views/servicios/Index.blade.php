@extends('layout.master')
@section('content')
<section class="border-2 border-t-sky-600 max-w-full m-5 rounded-lg bg-white">

    <div class="border border-transparent border-b-gray-200 shadow-sm">
        <div class="flex justify-start items-center mx-5 my-3">
            {{-- icono --}}
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"
                id="icon"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <style>
                    #icon {
                        fill: #445163
                    }
                </style>
                <path
                    d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3V245.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5V416c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V389.2C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112h32c24 0 46.2 7.5 64.4 20.3zM448 416V394.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176h32c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2V416c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3V261.7c-10 11.3-16 26.1-16 42.3zm144-42.3v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2V448c0 17.7-14.3 32-32 32H288c-17.7 0-32-14.3-32-32V405.2c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112h32c61.9 0 112 50.1 112 112z" />
            </svg>
            <h2 class="m-1">Listado de Servicios</h2>

        </div>
    </div>
    <div class="mx-5 my-3 overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 my-3">
            <thead class="bg-gray-100 text-center border divide-y">
                <tr>
                    <th class="border px-2 py-2">Id</th>
                    <th class="border px-2 py-2">Servicio</th>
                    <th class="border px-2 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y min-w-full divide-gray-200">
                @foreach ($servicio as $servi )
                <tr class="text-center">
                    <td class="border px-2 py-2 whitespace-nowrap">{{$servi->id}}</td>
                    <td class="border px-2 py-2 whitespace-nowrap">{{$servi->Servicio}}</td>
                    <td class="border px-2 py-2 whitespace-nowrap">

                        <a href="{{route('servicios.edit',$servi->id)}}">
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
                        </a>
                        <form action="{{route('servicios.destroy',$servi)}}"method="POST">
                            @csrf
                            @method('delete')
                            <button
                                class="border rounded-lg text-sm px-2 py-2 text-center font-semibold hover:bg-red-800 bg-red-600 text-white flex justify-center items-center">
                                <svg xmlns="{{ asset('vendor/fontawesome-free/svgs/regular/trash-can') }}" height="0.8rem"
                                    viewBox="0 0 448 512"
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
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>
@endsection
