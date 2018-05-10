@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>@lang('Categories')</h1>
@stop

@section('content')
  <div class="container">
    <div class="row" style="margin-top:8%"><h4 style="margin-top:2%"> Categories </h4></div>

        <div class="row">
          <div class="col">
            <table class="table w-75 mx-auto" style="align:center;">
            <thead>
              <tr> <th style="padding-left:40px;">Categories </th> </tr>
            </thead>
              <tbody>
                  @foreach($categories as $catergory)

                            <tr style="border-bottom: 2px solid #dee2e6;">
                              <td style="width:8%; text-align:center;">{{$category->name}}</td>
                            </tr>

                  @endforeach
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
