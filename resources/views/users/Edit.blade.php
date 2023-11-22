@extends('layout.master')
@section('content')
<link rel="stylesheet" href={{asset('css/Clientes.css')}}>
    <div class="clientes-container">
        <form action="{{route('usuarios.update',$employees)}}" class="clientes-form" method="POST">
            @csrf
            @method('put')
            <label for="Primernombre" class="clientes-label label">Primer nombre</label>
            <input type="text" class="input input-clientes" name="Primernombre" placeholder="Primer nombre" value="{{$employees->Primernombre}}">

            <label for="Segundonombre" class="clientes-label label">Segundo nombre</label>
            <input type="text" class="input input-clientes" name="Segundonombre" placeholder="Segundo nombre" value="{{$employees->Segundonombre}}">

            <label for="PrimerApellido" class="clientes-label label">Primer Apellido</label>
            <input type="text" class="input input-clientes" name="PrimerApellido" placeholder="Primer Apellido" value="{{$employees->PrimerApellido}}">

            <label for="SegundoApellido" class="clientes-label label">Segundo Apellido</label>
            <input type="text" class="input input-clientes" name="SegundoApellido" placeholder="Segundo Apellido" value="{{$employees->SegundoApellido}}">

            <label for="Cedula" class="clientes-label label">Cedula</label>
            <input type="text" class="input input-clientes" name="Cedula" placeholder="Cedula" value="{{$employees->Cedula}}">

            <label for="Numero" class="clientes-label label">Celular</label>
            <input type="Number" class="input input-clientes" name="Numero" placeholder="Numero" value="{{$employees->Numero}}">

            <button class="btn send-btn">
                <span class="span spn-btn">Actualizar</span>
            </button>
        </form>
    </div>
@endsection
