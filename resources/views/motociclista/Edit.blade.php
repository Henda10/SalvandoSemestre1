@extends('layout.master')
@section('content')
<link rel="stylesheet" href={{asset('css/Clientes.css')}}>
    <div class="clientes-container">
        <form action="{{route('motociclistas.update', $motocicleGuy)}}" class="clientes-form" method="POST">
            @csrf
            @method('PUT')
            <label for="Primernombre" class="clientes-label label">Primer nombre</label>
            <input type="text" class="input input-clientes" name="Primernombre" placeholder="Primer nombre" value="{{$motocicleGuy->Primernombre}}">

            <label for="Segundonombre" class="clientes-label label">Segundo nombre</label>
            <input type="text" class="input input-clientes" name="Segundonombre" placeholder="Segundo nombre" value="{{$motocicleGuy->Segundonombre}}">

            <label for="PrimerApellido" class="clientes-label label">Primer Apellido</label>
            <input type="text" class="input input-clientes" name="PrimerApellido" placeholder="Primer Apellido" value="{{$motocicleGuy->PrimerApellido}}">

            <label for="SegundoApellido" class="clientes-label label">Segundo Apellido</label>
            <input type="text" class="input input-clientes" name="SegundoApellido" placeholder="Segundo Apellido" value="{{$motocicleGuy->SegundoApellido}}">

            <label for="Celular" class="clientes-label label">Celular</label>
            <input type="Number" class="input input-clientes" name="Celular" placeholder="Celular" value="{{$motocicleGuy->Numero}}">

            <label for="Matricula" class="clientes-label label">Matricula</label>
            <select name="Matricula" value="{{$motocicleGuy->Matricula}}">
                @foreach($motos as $moto)
                    <option value="{{$moto->id}}">{{$moto->Matricula}}</option>
                @endforeach
            </select>

            <button class="btn send-btn">
                <span class="span spn-btn">Agregar</span>
            </button>
        </form>
    </div>
@endsection