@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Usuaris</span>
              <span class="info-box-number">---</span>
            </div>
            <!-- /.info-box-content -->
          </div>

          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Beneficis</span>
              <span class="info-box-number">---</span>
            </div>
            <!-- /.info-box-content -->
          </div>

          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Productes</span>
              <span class="info-box-number">---</span>
            </div>
            <!-- /.info-box-content -->
          </div>

          <div class="info-box">
            <span class="info-box-icon bg-orange"><i class="ion ion-ios-gear"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Categories</span>
              <span class="info-box-number">---</span>
            </div>
            <!-- /.info-box-content -->
          </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
