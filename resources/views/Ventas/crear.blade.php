@extends('./../plantilla')

@section('back')
    <div class="m-1">
        <a role="button" href="{{ route('index.venta') }}" class="btn-back"><img src="{{ asset('images/back.png') }}"
                class="btn-back" alt="Atrás"></a>
    </div>
@endsection

@section('content')
    <h1 class="text-center">Vender Producto</h1>
    <form method="POST" class="row g-3 mt-1" action="{{ route('guardar.venta') }}">
        @csrf()
        <div class="col-md-6 mt-3">
            <label for="nombre_producto">Selecciona un Producto:</label>
            <select class="form-select form-select-sm" aria-label="Small select example">
                <option selected>Seleccione...</option>
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre_producto }}</option>
                @endforeach
            </select>
            @error('nombre_producto')
                <small class="ms-error">{{ $message }}</small>
            @enderror
        </div>  
        <div class="col-md-6 mt-3">
            <label for="referencia">Cantidad:</label>
            <input type="text" class="form-control input-form" id="cantidad" name="cantidad" required>
            @error('cantidad')
                <small class="ms-error">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn-create">vender</button>
        </div>
    </form>
@endsection


