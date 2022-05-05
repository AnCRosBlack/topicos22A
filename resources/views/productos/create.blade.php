@extends('layouts.app', ['activePage' => 'productos', 'titlePage' => __('Productos')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('producto.store')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Producto</h4>
                            <p class="card-category">Ingresa los datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Proveedor</label>
                                <div class="col-sm-7">
                                    <select id="id_role" name="id_proveedor" class="form-control">
                                        <option>------Seleccionar un Proveedor------</option>
                                    @foreach( $Proveedor as $P )
                                    <option value="{{ $P['id'] }}">{{ $P['nombre'] }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Descripción</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" name="descripcion" autofocus>Descripción</textarea>

                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Precio</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="precio" placeholder="Precio" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Cantidad</label>
                                <div class="col-sm-7">
                                    <input type=number" class="form-control" name="existencia" placeholder="Existencia" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
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


