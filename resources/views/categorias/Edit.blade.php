@extends('layout.master')
@section('content')
<link rel="stylesheet" href={{asset('css/Clientes.css')}}>
    <div class="clientes-container">
        <form action="{{route('categorias.update',$categoria)}}" class="clientes-form" method="POST">
            @csrf
            @method('put')
            <label for="Categoria" class="clientes-label label">Nombre de Categorias</label>
            <input type="text" class="input input-clientes" name="Categoria" placeholder="Categoria" value="{{$categoria->Categoria}}">

            <button class="btn send-btn">
                <span class="span spn-btn">Actualizar</span>
            </button>
        </form>
    </div>
@endsection
