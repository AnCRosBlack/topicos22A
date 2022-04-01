@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Clientes')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">


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
        md.initDashboardPageCharts();
    });

</script>
@endpush
