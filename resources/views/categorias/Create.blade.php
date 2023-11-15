@extends('layout.master')
@section('content')
<link rel="stylesheet" href={{asset('css/Clientes.css')}}>
    <div class="clientes-container">
        <form action="{{url('categorias')}}" class="clientes-form" method="POST">
            @csrf
            <label for="Categoria" class="clientes-label label">Nombre de Categorias</label>
            <input type="text" class="input input-clientes" name="Categoria" placeholder="Categoria" value="{{old('Categoria')}}">

            <button class="btn send-btn">
                <span class="span spn-btn">Agregar</span>
            </button>
        </form>
    </div>
@endsection
