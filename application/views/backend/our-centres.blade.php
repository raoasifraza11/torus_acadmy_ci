@extends('backend.includes.base')
@section('title', 'Torus Academy - Our Centres')
@section('_pageTitle')


<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center ">
        <div class="header-action">
            <h1 class="page-title">Our Centres</h1>
            <ol class="breadcrumb page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Torus Academy</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Centres</li>
            </ol>
        </div>
    </div>
</div>


@endsection

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="world-map-markers" style="height:400px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('_js')



<!-- Start Plugin Js -->
<script src="./assets/bundles/jvectormap1.bundle.js"></script>

<!-- Start project main js  and page js -->

<script src="./assets/js/map/map.js"></script>

@endsection