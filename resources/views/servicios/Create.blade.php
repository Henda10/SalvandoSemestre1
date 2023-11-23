@extends('layout.master')
@section('content')
<link rel="stylesheet" href={{asset('css/Clientes.css')}}>
    <div class="clientes-container">
        <form action="{{url('servicios')}}" class="clientes-form" method="POST">
            @csrf
            <label for="Servicio" class="clientes-label label">Servicio</label>
            <input type="text" class="input input-clientes" name="Servicio" placeholder="Servicio" value="{{old('Servicio')}}">
            </select>
            <button class="btn send-btn">
                <span class="span spn-btn">Agregar</span>
            </button>
        </form>
    </div>
@endsection
