@extends('layouts.app', ['activePage' => 'proveedor', 'titlePage' => __('Proveedor')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('proveedor.store')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Proveedor</h4>
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
                                <label for="name" class="col-sm-2 col-form-label">Dirección</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="direccion" placeholder="Dirección">
                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Telefono</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="telefono" placeholder="Telefono" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Ciudad</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="estado" placeholder="Estado" autofocus>
                                </div>
                            </div>

                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">País</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="pais" placeholder="País" autofocus>
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


