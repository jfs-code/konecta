@extends('./../plantilla')

@section('back')
    <div class="m-1">
        <a role="button" href="{{ route('index.menu') }}" class="btn-back"><img src="{{ asset('images/back.png') }}"
                class="btn-back" alt="Atrás"></a>
    </div>
@endsection

@section('content')
    <h1 class="text-center">Ventas</h1>
    <div class="d-flex flex-row-reverse m-2">
        <a href=" {{ route('crear.venta') }} " class="btn btn-action-create btn-sm"><i class="fas fa-plus"></i>&nbsp;Nueva Venta</a>
    </div>
    <div class="card rounded-0 mt-4">
        <div class="card-body">
            <div class="scrolllable">
                <table class="table table-striped m-1" style="white-space: nowrap; overflow-x: auto;">
                    <thead>
                        <th>Nombre Producto</th>
                        <th>Cantidad</th>
                        <th>Fecha de Venta</th>
                    </thead>
                    <tbody>
                        @foreach ($ventas as $row)
                            <tr>
                                <td> {{ $row->id_producto }} </td>
                                <td> {{ $row->cantidad }} </td>
                                <td> {{ $row->fecha_creacion }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @if (session('guardar') == 'ok')
        <script>
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Guardado correctamente',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif

    @if (session('error') == 'no')
        <script>
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'No se guardo correctamente',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif    

    <script type="text/javascript">
        $('#form-delete').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                title: '¿Está seguro?',
                text: "¡No podrá revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#21211d',
                cancelButtonColor: '#9b9b9b',
                confirmButtonText: '¡Sí, bórralo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        })
    </script>
@endsection