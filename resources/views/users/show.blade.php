@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Producte {{$user->id}} </h1>
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
                              <td style="width:8%; text-align:left;"><h4>Nom:</h4></td>
                              <td style="width:8%; text-align:center;"><h4>{{$user->name}}</h4></td>
                            </tr>

                            <tr style="border-bottom: 4px solid #dee2e6;">
                              <td style="width:8%; text-align:left;"><h4>Cognom:</h4></td>
                              <td style="width:8%; text-align:center;"><h4>{{$user->surname}}</h4></td>
                            </tr>

                            <tr style="border-bottom: 4px solid #dee2e6;">
                              <td style="width:8%; text-align:left;"><h4>País:</h4></td>
                              <td style="width:8%; text-align:center;"><h4>{{$user->country}}</h4></td>
                            </tr>

                            <tr style="border-bottom: 4px solid #dee2e6;">
                              <td style="width:8%; text-align:left;"><h4>Ciutat:</h4></td>
                              <td style="width:8%; text-align:center;"><h4>{{$user->city}}</h4></td>
                            </tr>

                            <tr style="border-bottom: 4px solid #dee2e6;">
                              <td style="width:8%; text-align:left;"><h4>Telèfon:</h4></td>
                              <td style="width:8%; text-align:center;"><h4>{{$user->tel}}</h4></td>
                            </tr>

                            <tr style="border-bottom: 4px solid #dee2e6;">
                              <td style="width:8%; text-align:left;"><h4>Mail:</h4></td>
                              <td style="width:8%; text-align:center;"><h4>{{$user->email}}</h4></td>
                            </tr>

                            <tr style="border-bottom: 4px solid #dee2e6;">
                              <td style="width:8%; text-align:left;"><h4>Verificat:</h4></td>
                              <td style="width:8%; text-align:center;"><h4>{{$user->verified}}</h4></td>
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
