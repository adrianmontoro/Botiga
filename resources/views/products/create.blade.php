@extends('adminlte::page')

<head><title>Productes</title></head>

@section('content_header')
<h1>Nou producte</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12 col-sm-10 col-md-6 mx-auto">
            <div class="box box-success box-shadow1 bg-light py-3 px-3">
                @include('products.partials.form')
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
