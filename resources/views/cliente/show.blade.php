@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Clientes')])


@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Clientes</h4>
                                <p class="card-category">Detalles del cliente {{$cliente->name}}</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <div class="author">
                                                        <img src="{{asset('material') }}/img/laravel.svg" alt="image" class="avatar">
                                                        <h5 class="title mt-3">{{$cliente->name}}</h5>
                                                        <p class="description">
                                                            {{$cliente->email}}<br>
                                                            {{$cliente->created_at}}<br>
                                                        </p>
                                                    </div>
                                                </p>
                                                <div class="card-description">
                                                    Yo lo pregunto – Nezahualcóyotl <br> <br>Yo Nezahualcóyotl lo pregunto: ¿Acaso de veras se vive con raíz en la tierra? No para siempre en la tierra: sólo un poco aquí. Aunque sea de jade se quiebra, aunque sea de oro se rompe, aunque sea plumaje de quetzal se desgarra. No para siempre en la tierra:
                                                    sólo un
                                                    poco aquí.
                                                </div>
                                            </div>
                                            <div class="card-footer">

                                                <div class="button-container">
                                                    <a href="{{route('clientes.index')}}">
                                                        <button class="btn btn-sm">Regresar</button> </a>
                                                </div>
                                                <div class="button-container">
                                                    <a href="{{route('clientes.edit',$cliente->id)}}">
                                                        <button class="btn btn-sm btn-primary">Editar </button> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
