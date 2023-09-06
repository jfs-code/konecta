@extends('./../plantilla')

@section('content')
    <h1 class="text-center">Menú de Opciones</h1>
    <nav>
        <ul>
            <li><a href="{{ route('index.producto') }}">Productos</a></li>
            <li><a href="{{ route('index.venta') }}">Ventas</a></li>
        </ul>
    </nav>
    <footer>
        <p>Copyright © JFS-2023</p>
    </footer>
@endsection

