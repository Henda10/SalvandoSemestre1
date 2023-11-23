@extends('layout.master')
@section('content')
<link rel="stylesheet" href={{asset('css/Clientes.css')}}>
    <div class="clientes-container">
        <form action="{{route('clientes.update',$cliente)}}" class="clientes-form" method="POST">
            @csrf
            @method('PUT')
            <label for="Primernombre" class="clientes-label label">Primer nombre</label>
            <input type="text" class="input input-clientes" name="Primernombre" placeholder="Primer nombre" value="{{$cliente->Primernombre}}">
            <label for="Segundonombre" class="clientes-label label">Segundo nombre</label>
            <input type="text" class="input input-clientes" name="Segundonombre" placeholder="Segundo nombre" value="{{$cliente->Segundonombre}}">
            <label for="PrimerApellido" class="clientes-label label">Primer Apellido</label>
            <input type="text" class="input input-clientes" name="PrimerApellido" placeholder="Primer Apellido" value="{{$cliente->PrimerApellido}}">
            <label for="SegundoApellido" class="clientes-label label">Segundo Apellido</label>
            <input type="text" class="input input-clientes" name="SegundoApellido" placeholder="Segundo Apellido" value="{{$cliente->SegundoApellido}}">
            <label for="Direccion" class="clientes-label label">Direccion</label>
            <input type="text" class="input input-clientes" name="Direccion" placeholder="Direccion" value="{{$cliente->Direccion}}">
            <label for="Celular" class="clientes-label label">Celular</label>
            <input type="text" class="input input-clientes" name="Celular" placeholder="Celular" value="{{$cliente->Celular}}">
            <button class="btn send-btn">
                <span class="span spn-btn">Actualizar</span>
            </button>
        </form>
    </div>
@endsection
