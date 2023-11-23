<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/SideBar.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="layout-container">
        <div class="sidebarmenu-container left-content">
            <aside class="sidebarmenu">
                <div class="sidebarmenu__page-title">
                    <h1 class="page-title">
                        Delivery Mandados Rapidos
                    </h1>
                </div>
                <div class="sidebarmenu__user-info">
                    <span class="user-info__label">Usuario:</span>
                    <span class="user-info__user">{{ auth()->user()->name }}</span>
                </div>
                <div class="sidebarmenu__menu-list">
                    <ul class="menu-list">
                        <li class="menu-list__dropdown-item">
                            <a href="#" class="dropdown-item__link">
                                <img src="{{ asset('/img/Users.png')}}" alt="" class="dropdown-item__icon">
                                <span class="dropdown-item__span">Usuarios</span>
                                <img src="{{ asset('/img/arrow.png')}}" alt="" class="dropdown-item__arrow">

                                <input type="checkbox" class="dropdown-item__check">
                            </a>

                            <div class="dropdown-item__content">
                                <ul class="dropdown-item__sub">
                                    <li class="sub-item">
                                        <img src="{{ asset('/img/user.png')}}" alt="" class="sub-item__icon">
                                        <a href="{{ route('usuarios.index')}}" class="sub-item__anchor">Lista de Usuarios</a>
                                    </li>
                                    <li class="sub-item">
                                        <img src="{{ asset('/img/user.png')}}" alt="" class="sub-item__icon">
                                        <a href="{{ route('usuarios.create')}}" class="sub-item__anchor">Creacion de Usuarios</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-list__dropdown-item">
                            <a href="#" class="dropdown-item__link">
                                <img src="{{ asset('/img/Motociclistas.png')}}" alt="" class="dropdown-item__icon">
                                <span class="dropdown-item__span">Motociclistas</span>
                                <img src="{{ asset('/img/arrow.png')}}" alt="" class="dropdown-item__arrow">

                                <input type="checkbox" class="dropdown-item__check">
                            </a>

                            <div class="dropdown-item__content">
                                <ul class="dropdown-item__sub">
                                    <li class="sub-item">
                                        <img src="{{ asset('/img/Motociclistas.png')}}" alt="" class="sub-item__icon">
                                        <a href="{{ route('motociclistas.index')}}" class="sub-item__anchor">Lista de Motociclistas</a>
                                    </li>
                                    <li class="sub-item">
                                        <img src="{{ asset('/img/Motociclistas.png')}}" alt="" class="sub-item__icon">
                                        <a href="{{route('motociclistas.create')}}" class="sub-item__anchor">Creacion de Motociclistas</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-list__dropdown-item">
                            <a href="#" class="dropdown-item__link">
                                <img src="{{ asset('/img/Customers.png')}}" alt="" class="dropdown-item__icon">
                                <span class="dropdown-item__span">Clientes</span>
                                <img src="{{ asset('/img/arrow.png')}}" alt="" class="dropdown-item__arrow">

                                <input type="checkbox" class="dropdown-item__check">
                            </a>

                            <div class="dropdown-item__content">
                                <ul class="dropdown-item__sub">
                                    <li class="sub-item">
                                        <img src="{{ asset('/img/user.png')}}" alt="" class="sub-item__icon">
                                        <a href="{{ route('clientes.index')}}" class="sub-item__anchor">Lista de Clientes</a>
                                    </li>
                                    <li class="sub-item">
                                        <img src="{{ asset('/img/user.png')}}" alt="" class="sub-item__icon">
                                        <a href="{{route('clientes.create')}}" class="sub-item__anchor">Creacion de Clientes</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-list__dropdown-item">
                            <a href="#" class="dropdown-item__link">
                                <img src="{{ asset('/img/Motociclistas.png')}}" alt="" class="dropdown-item__icon">
                                <span class="dropdown-item__span">Motos</span>
                                <img src="{{ asset('/img/arrow.png')}}" alt="" class="dropdown-item__arrow">

                                <input type="checkbox" class="dropdown-item__check">
                            </a>

                            <div class="dropdown-item__content">
                                <ul class="dropdown-item__sub">
                                    <li class="sub-item">
                                        <img src="{{ asset('/img/Motociclistas.png')}}" alt="" class="sub-item__icon">
                                        <a href="{{ route('Motos.index')}}" class="sub-item__anchor">Lista de Motos</a>
                                    </li>
                                    <li class="sub-item">
                                        <img src="{{ asset('/img/Motociclistas.png')}}" alt="" class="sub-item__icon">
                                        <a href="{{route('Motos.create')}}" class="sub-item__anchor">Creacion de Motos</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-list__dropdown-item">
                            <a href="#" class="dropdown-item__link">
                                <img src="{{ asset('/img/Servicios.png')}}" alt="" class="dropdown-item__icon">
                                <span class="dropdown-item__span">Servicios</span>
                                <img src="{{ asset('/img/arrow.png')}}" alt="" class="dropdown-item__arrow">

                                <input type="checkbox" class="dropdown-item__check">
                            </a>

                            <div class="dropdown-item__content">
                                <ul class="dropdown-item__sub">
                                    <li class="sub-item">
                                        <img src="{{ asset('/img/Servicios.png')}}" alt="" class="sub-item__icon">
                                        <a href="{{ route('servicios.index')}}" class="sub-item__anchor">Lista de Servicios</a>
                                    </li>
                                    <li class="sub-item">
                                        <img src="{{ asset('/img/Servicios.png')}}" alt="" class="sub-item__icon">
                                        <a href="{{ route('servicios.create')}}" class="sub-item__anchor">Creacion de Servicios</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-list__dropdown-item">
                            <a href="#" class="dropdown-item__link">
                                <img src="{{ asset('/img/pedidos.png')}}" alt="" class="dropdown-item__icon">
                                <span class="dropdown-item__span">Pedidos</span>
                                <img src="{{ asset('/img/arrow.png')}}" alt="" class="dropdown-item__arrow">

                                <input type="checkbox" class="dropdown-item__check">
                            </a>

                            <div class="dropdown-item__content">
                                <ul class="dropdown-item__sub">
                                    <li class="sub-item">
                                        <img src="{{ asset('/img/Servicios.png')}}" alt="" class="sub-item__icon">
                                        <a href="{{ route('pedidos.index')}}" class="sub-item__anchor">Lista de Pedidos</a>
                                    </li>
                                    <li class="sub-item">
                                        <img src="{{ asset('/img/Servicios.png')}}" alt="" class="sub-item__icon">
                                        <a href="{{ route('pedidos.create')}}" class="sub-item__anchor">Creacion de Pedidos</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="sidebarmenu__logout-container">
                    <span class="logout-label">Sesion</span>
                    <a href="/logout" class="logout-link">
                        <img src="" alt="" class="logout-icon">
                        <span class="logout-span">Cerrar Sesion</span>
                    </a>
                </div>
            </aside>
        </div>
        <div class="client-area right-content">
            <header class="client-area__header">
                <h1 class="header-title">Gestion de Envios "Mandados Rapi"</h1>
            </header>
            @yield('content')
        </div>
    </div>
</body>

</html>
