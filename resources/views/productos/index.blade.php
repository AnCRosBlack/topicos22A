@extends('layouts.app', ['activePage' => 'productos', 'titlePage' => __('Productos')])

@section('content')

<script>
    $(document).ready(function() {
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function() {
            if (this.checked) {
                checkbox.each(function() {
                    this.checked = true;
                });
            } else {
                checkbox.each(function() {
                    this.checked = false;
                });
            }
        });
        checkbox.click(function() {
            if (!this.checked) {
                $("#selectAll").prop("checked", false);
            }
        });
    });


    function EliminarRegistro(value) {
        action = confirm(value) ? true : event.preventDefault()
    }


</script>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Productos</h4>
                                <p class="card-category">Productos registrados</p>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-12 text-right">

                                        <a href="{{ route('producto.create') }}" class="btn btn-sm btn-primary">Añadir producto</a>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Proveedor</th>
                                            <th>Descripción</th>
                                            <th>Precio</th>
                                            <th>Existencia</th>
                                            <th class="text-right">Acciones</th>

                                        </thead>
                                        <tbody>
                                            @foreach($Productos as $producto)
                                            <tr>
                                                <td>{{$producto->id}} </td>
                                                <td>{{$producto->nombre}} </td>
                                                <td>{{$producto->proveedor}} </td>
                                                <td>{{$producto->descripcion}} </td>
                                                <td>{{$producto->precio}} </td>
                                                <td>{{$producto->existencia}} </td>
                                            
                                                <td class="td-actions text-right">
                                                    <a href="{{route('producto.show', $producto->id)}}" class="btn btn-info"><i class="material-icons">person</i></a>
                                                    <a href="{{route('producto.edit', $producto->id)}}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                    <a onclick="return EliminarRegistro('Eliminar producto con el id: {{$producto->id}}')" href="{{ route('producto.destroy', $producto->id) }}" class="btn btn-danger"><i class="material-icons">close</i></a>


                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>



                                    </table>
                                </div>
                            </div>
                            <div class="card-footer mr-auto">
                            {!! $Productos->links() !!}
                                {{-- {{$Usuarios->links()}} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
    });

</script>
@endpush