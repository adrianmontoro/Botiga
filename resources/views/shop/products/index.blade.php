@extends('layouts.index')

@section('content')

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/assets/css/main.css"
</head>
<div class="container">
  <div class="row" >
    @foreach ($products as $product)

    <div class="card pr-3 mx-auto mb-4">

      <div class="card-header">
        <h4 class="card-title">{{ $product->name }}</h4>
      </div>
      <img class="card-img-top" src="{{ $product->picture }}" alt="Card image" style="width:300px;height:240px;">
      <div class="card-body">
        <p class="card-text">{{ $product->description }}</p>
        <p class="card-text">{{ $product->properties }}</p>
        <p style=font-color:"black";> {{ $product->price }}€</p>
      </div>

      <div class="card-footer">
          <a class="btn btn-danger"href="{{route('cart_add', ['id' => $product->id])}}"> Comprar </a>
      </div>
    </div>

    @endforeach
  </div>
</div>
@endsection

<style>
  #p {
    font-color:"black";
  }
</style>
