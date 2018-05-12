@extends('adminlte::page')

<head><title>@lang('Users') | @lang('Create')</title></head>

@section('content_header')
<h1>Nou usuari</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 mx-auto">
            <div class="box box-success box-shadow1 bg-light py-3 px-3">
                @include('users.partials.form')
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
