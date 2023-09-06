@extends('./../plantilla')

@section('back')
    <div class="m-1 p-3">
        <a role="button" href="{{ route('index.producto') }}" class="btn-back"><img src="{{ asset('images/back.png') }}"
                class="btn-back" alt="Atrás"></a>
    </div>
@endsection

@section('content')
    <h1 class="text-center">Crear Producto</h1>
    <form method="POST" class="row g-3 mt-1" action="{{ route('guardar.producto') }}">
        @csrf()
        
        <div class="col-md-6 mt-3">
            <label for="nombre_producto">Nombre del Producto:</label>
            <input type="text" class="form-control input-form" id="nombre_producto" name="nombre_producto" required>
            @error('nombre_producto')
                <small class="ms-error">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6 mt-3">
            <label for="referencia">Referencia:</label>
            <input type="text" class="form-control input-form" id="referencia" name="referencia" required>
            @error('referencia')
                <small class="ms-error">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6 mt-3">
            <label for="precio">Precio:</label>
            <input type="number" class="form-control input-form" id="precio" name="precio" step="1" required>
            @error('precio')
                <small class="ms-error">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6 mt-3">
            <label for="peso">Peso:</label>
            <input type="number" class="form-control input-form" id="peso" name="peso" step="1" required>
            @error('peso')
                <small class="ms-error">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6 mt-3">
            <label for="categoria">Categoría:</label>
            <input type="text" class="form-control input-form" id="categoria" name="categoria" required>
            @error('categoria')
                <small class="ms-error">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6 mt-3">
            <label for="stock">Stock:</label>
            <input type="number" class="form-control input-form" id="stock" name="stock" required>
            @error('stock')
                <small class="ms-error">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn-create">Crear</button>
        </div>
    </form>
@endsection


