@extends('layout.master')
@section('content')
<link rel="stylesheet" href={{asset('css/Clientes.css')}}>
    <div class="clientes-container">
        <form action="{{route('pedidos.update', $pedidos)}}" class="clientes-form" method="POST">
            @csrf
            @method('PUT')
            <label for="Descripcion" class="clientes-label label">Descripcion</label>
            <input type="text" class="input input-clientes" name="Descripcion" placeholder="Descripcion" value="{{$pedidos->Descripcion}}">

            <label for="PrecioDelivery" class="clientes-label label">Precio Delivery</label>
            <input type="Number" class="input input-clientes" name="PrecioDelivery" placeholder="Precio" value="{{$pedidos->PrecioDelivery}}">

            <label for="Estado" class="clientes-label label">Estado</label>
            <select name="Estado" value="{{old('Estado')}}">
                <option value="Entregado">Entregado</option>
                <option value="Pendiente">Pendiente</option>
            </select>

            <label for="Cliente" class="clientes-label label">Cliente</label>
            <select name="Cliente" value="{{old('Cliente')}}">
                @foreach($clientes as $cliente)
                    <option value="{{$cliente->id}}">{{$cliente->Primernombre}}</option>
                @endforeach
            </select>

            <label for="Servicio" class="clientes-label label">Servicio</label>
            <select name="Servicio" value="{{old('Servicio')}}">
                @foreach($servicios as $servicio)
                    <option value="{{$servicio->id}}">{{$servicio->Servicio}}</option>
                @endforeach
            </select>

            <button class="btn send-btn">
                <span class="span spn-btn">Agregar</span>
            </button>
        </form>
    </div>
@endsection