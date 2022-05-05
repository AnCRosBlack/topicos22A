@extends('layouts.app', ['activePage' => 'proveedor', 'titlePage' => __('Proveedor')])

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
                                <h4 class="card-title">Proveedor</h4>
                                <p class="card-category">Proveedores registrados</p>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-12 text-right">

                                        <a href="{{ route('proveedor.create') }}" class="btn btn-sm btn-primary">Añadir proveedor</a>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>Ciudad</th>
                                            <th>Estado</th>
                                            <th>País</th>
                                            <th class="text-right">Acciones</th>

                                        </thead>
                                        <tbody>
                                            @foreach($Proveedores as $proveedor)
                                            <tr>
                                                <td>{{$proveedor->id}} </td>
                                                <td>{{$proveedor->nombre}} </td>
                                                <td>{{$proveedor->direccion}} </td>
                                                <td>{{$proveedor->telefono}} </td>
                                                <td>{{$proveedor->ciudad}} </td>
                                                <td>{{$proveedor->estado}} </td>
                                                <td>{{$proveedor->pais}} </td>
                                                <td class="td-actions text-right">
                                                    <a href="{{route('proveedor.show', $proveedor->id)}}" class="btn btn-info"><i class="material-icons">person</i></a>
                                                    <a href="{{route('proveedor.edit', $proveedor->id)}}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                    <a onclick="return EliminarRegistro('Eliminar Proveedor')" href="{{ route('proveedor.destroy', $proveedor->id) }}" class="btn btn-danger"><i class="material-icons">close</i></a>

                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>



                                    </table>
                                </div>
                            </div>
                            <div class="card-footer mr-auto">
                            {!! $Proveedores->links() !!}
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