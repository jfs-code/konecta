@extends('./../plantilla')

@section('content')
    <h1 class="text-center">Menú de Opciones</h1>
    <div class="row pt-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Productos</h5>
              <p class="card-text">En este apartado podremos administrar los productos.</p>
              <a href="{{ route('index.producto') }}" class="btn btn-primary">Productos</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ventas</h5>
              <p class="card-text">En este apartado podremos gestionar las ventas.</p>
              <a href="{{ route('index.venta') }}" class="btn btn-primary">Ventas</a>
            </div>
          </div>
        </div>
    </div>
    <div>
        <footer class="fixed-bottom text-center">
            <p>Copyright © JFS-2023</p>
        </footer>
    </div>
@endsection

