@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row" >
    @foreach ($products as $product)

    <div class="card">

      <div class="card-header">
        <h4 class="card-title">{{ $product->name }}</h4>
      </div>
      <img class="card-img-top" src="{{ $product->url }}" alt="Card image" style="width:100%">
      <div class="card-body">
        <p class="card-text">{{ $product->url }}</p>
        <p class="card-text">{{ $product->description }}</p>
      </div>

      <div class="card-footer">
        <p> {{ $product->price }}€</p>
      </div>
    </div>

    @endforeach
  </div>
</div>
@endsection
