@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Producte {{$product->id}} </h1>
@stop

@section('content')
  <div class="container">

        <div class="row">
          <div class="col">
            <table class="table w-75 mx-auto" style="align:center;">
            <thead>

            </thead>
              <tbody>
                            <tr style="border-bottom: 4px solid #dee2e6;">
                              <td style="width:8%; text-align:left;"><h4>Nom del producte:</h4></td>
                              <td style="width:8%; text-align:center;"><h4>{{$product->name}}</h4></td>
                            </tr>

                            <tr style="border-bottom: 4px solid #dee2e6;">
                              <td style="width:8%; text-align:left;"><h4>Descripció del producte:</h4></td>
                              <td style="width:8%; text-align:center;"><h4>{{$product->description}}</h4></td>
                            </tr>

                            <tr style="border-bottom: 4px solid #dee2e6;">
                              <td style="width:8%; text-align:left;"><h4>Propietats del producte:</h4></td>
                              <td style="width:8%; text-align:center;"><h4>{{$product->properties}}</h4></td>
                            </tr>

              </tbody>
            </table>
          <hr style="color:black;">
        </div>
        </div>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
