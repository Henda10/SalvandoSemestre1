@extends('layout.master')
@section('content')
<link rel="stylesheet" href={{asset('css/Clientes.css')}}>
    <div class="clientes-container">
        <form action="{{route('Motos.store')}}" class="clientes-form" method="POST">
            @csrf
            <label for="Marca" class="clientes-label label">Marca</label>
            <input type="text" class="input input-clientes" name="Marca" placeholder="Marca" value="{{old('Marca')}}">
            <label for="Modelo" class="clientes-label label">Modelo</label>
            <input type="text" class="input input-clientes" name="Modelo" placeholder="Modelo" value="{{old('Modelo')}}">
            <label for="NumeroChasis" class="clientes-label label">Numero de Chasis</label>
            <input type="text" class="input input-clientes" name="NumeroChasis" placeholder="Numero de Chasis" value="{{old('NumeroChasis')}}">
            <label for="Matricula" class="clientes-label label">Matricula</label>
            <input type="text" class="input input-clientes" name="Matricula" placeholder="Matricula" value="{{old('Matricula')}}">
            <button class="btn send-btn">
                <span class="span spn-btn">Agregar</span>
            </button>
        </form>
    </div>
@endsection
