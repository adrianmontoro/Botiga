@extends('adminlte::page')

<head><title>Editar Productes</title></head>

@section('content_header')
<h1>Editar productes</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12 col-sm-10 col-md-6 mx-auto">
            <div class="box box-success box-shadow1 bg-light py-3 px-3">
                @include('products.partials.form')
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
