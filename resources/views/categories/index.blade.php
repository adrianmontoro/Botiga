@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Categories</h1>
@stop

@section('content')
  <div class="container">
    <div class="row" style="margin-top:8%"> </div>
      <div class="row">

        <table class="box-shadow1 table table-striped table-hover bg-white">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th style="width:20%;">Nom</th>
                    <th class="text-center">@lang('Actions')</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td class="lang-name">{{$category->name}}</td>
                            <td class="text-center">

                                <form method="post" action="{{route('categories.destroy', ['id' => $category->id])}}">
                                    <a class="btn btn-primary" href="{{route('categories.show', ['id' => $category->id])}}"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-warning text-light" href="{{route('categories.edit', ['id' => $category->id])}}"><i class="fa fa-pencil"></i></a>
                                    @method("delete")
                                    @csrf
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

            </tbody>
        </table>

              @foreach($categories as $category)
              <div class="col-12 col-sm-4 col-md-2 mt-3">

                      </div>
              </div>
              @endforeach
      </div>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
