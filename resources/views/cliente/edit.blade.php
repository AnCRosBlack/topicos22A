@extends('layouts.app', ['activePage' => 'usuarios', 'titlePage' => __('Usuarios')])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @foreach ($cliente as $client)
                <form action="{{route('clientes.edit', $client->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method("PUT")
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Actualiza tus datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" value="{!!  $client->name !!}" placeholder="Nombre" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" placeholder="Correo" value="{!!  $client->email !!}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Dirección</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="{!!  $client->direccion !!}">

                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Telefono</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="telefono" placeholder="Telefono" value="{!!  $client->telefono !!}">

                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Sexo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="sexo" placeholder="F ó M" value="{!!  $client->sexo !!}">

                                </div>
                            </div>

                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">País</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="pais" placeholder="País" value="{!!  $client->pais !!}">

                                </div>
                            </div>

                        </div>
                        @endforeach
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
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
