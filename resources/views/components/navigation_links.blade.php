<div class="mb-3 bg-white border-2 border-b-2 border-b-gray-200 rounded-xl shadow-sm
text-lg">
    <nav class="p-2">
        <ul class="flex justify-evenly items-center">
            <li>
                <strong class="text-slate-900">Mandados Rapidos</strong>
            </li>
            <li>
                <p class="text-slate-700">Usuario en linea: <strong
                        class="text-slate-900">{{ auth()->user()->name }}</strong></p>
            </li>
            <li class="text-slate-700">
                <a href="{{ route('dashboard') }}" class="hover:text-slate-900">Inicio</a>
            </li>
            <li class="text-slate-700">
                <a href="{{ route('user_list') }}" class="hover:text-slate-900">Listado de usuarios</a>
            </li>
            <li class="text-slate-700">
                <a href="{{ route('motorcycle_guys_list') }}" class="hover:text-slate-900">Listado de motociclistas</a>
            </li>
            <li class="text-slate-700">
                <a href="{{ route('clients_list') }}" class="hover:text-slate-900">Listado de clientes</a>
            </li>
            <li class="text-slate-700">
                <a href="{{ route('orders') }}" class="hover:text-slate-900">Pedidos</a>
            </li>
            <li class="text-slate-700">
                <a href="/logout" class="hover:text-slate-900">Cerrar Sesion</a>
            </li>
        </ul>
    </nav>
</div>
