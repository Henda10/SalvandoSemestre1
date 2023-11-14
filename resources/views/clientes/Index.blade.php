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
            <h2 class="m-1">Listado de clientes</h2>
        </div>
    </div>
    <div class="mx-5 my-3 overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 my-3">
            <thead class="bg-gray-100 text-center border divide-y">
                <tr>
                    <th class="border px-2 py-2">Id</th>
                    <th class="border px-2 py-2">Primer nombre</th>
                    <th class="border px-2 py-2">Segundo nombre</th>
                    <th class="border px-2 py-2">Primer apellido</th>
                    <th class="border px-2 py-2">Segundo apellido</th>
                    <th class="border px-2 py-2">Direccion</th>
                    <th class="border px-2 py-2">Cedula</th>
                    <th class="border px-2 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y min-w-full divide-gray-200">
                @foreach ($cliente as $clientes )
                <tr class="text-center">
                    <td class="border px-2 py-2 whitespace-nowrap">{{$clientes->id}}</td>
                    <td class="border px-2 py-2 whitespace-nowrap">{{$clientes->Primernombre}}</td>
                    <td class="border px-2 py-2 whitespace-nowrap">{{$clientes->Segundonombre}}</td>
                    <td class="border px-2 py-2 whitespace-nowrap">{{$clientes->PrimerApellido}}</td>
                    <td class="border px-2 py-2 whitespace-nowrap">{{$clientes->SegundoApellido}}</td>
                    <td class="border px-2 py-2 whitespace-nowrap">{{$clientes->Direccion}}</td>
                    <td class="border px-2 py-2 whitespace-nowrap">{{$clientes->Celular}}</td>
                    <td class="border px-2 py-2 whitespace-nowrap">

                        <a href="{{route('clientes.edit',$clientes->id)}}">
                            <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z"/></svg>
                        </a>
                        <form action="{{route('clientes.destroy',$clientes)}}"method="POST">
                            @csrf
                            @method('delete')
                            <button>
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>
{{$cliente->links()}}
@endsection
