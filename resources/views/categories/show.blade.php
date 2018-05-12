@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>@lang('Categories')</h1>
@stop

@section('content')
  <div class="container">
    <div class="row" style="margin-top:8%"><h3 style="margin-top:2%"> Categoria  {{$category->id}}</h3></div>

        <div class="row">
          <div class="col">
            <table class="table w-75 mx-auto" style="align:center;">
            <thead>
              <tr> <th style="padding-left:40px;"> </th> </tr>
            </thead>
            <tbody>
                          <tr style="border-bottom: 4px solid #dee2e6;">
                            <td style="width:8%; text-align:left;"><h4>Nom de la categoria:</h4></td>
                            <td style="width:8%; text-align:center;"><h4>{{$category->name}}</h4></td>
                          </tr>

                          <tr style="border-bottom: 4px solid #dee2e6;">
                            <td style="width:8%; text-align:left;"><h4>Descripció de la categoria:</h4></td>
                            <td style="width:8%; text-align:center;"><h4>{{$category->description}}</h4></td>
                          </tr>

            </tbody>
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
