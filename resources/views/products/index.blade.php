@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<br>
<h1>Productes</h1>
@stop

@section('content')
  <div class="container">
    <div class="row" style="margin-top:5%"> </div>
      <div class="row">

        <table class="box-shadow1 table table-striped table-hover bg-white">
            <thead class="thead-dark">
                <tr>
                    <th style="width:20%;">ID</th>
                    <th style="width:20%;">Nom</th>
                    <th style="width:20%;">Descripció</th>
                    <th class="text-center">Accions</th>
                </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
                <tr>
                  <td>{{$product->id}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->description}}</td>

                  <td class="text-center">
                  <form method="post" action="{{route('products.destroy', ['id' => $product->id])}}">
                    <a class="btn btn-primary" href="{{route('products.show', ['id' => $product->id])}}"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-warning text-light" href="{{route('products.edit', ['id' => $product->id])}}"><i class="fa fa-pencil"></i></a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                  </form>
                </td>

                </tr>

              @endforeach
              <a href="{{route('products.create') }}" class="btn btn-success">Afegir producte</a>

            </tbody>
        </table>

      </div>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
