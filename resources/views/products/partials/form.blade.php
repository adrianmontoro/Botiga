@if($product == null)
    <form action="/products" method="post" enctype="multipart/form-data">
@else
    <form action="/products/{{$product->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
@endif
    @csrf

    <div class="form-group">
        <label for="name">Nom:</label>
        <input class="form-control" type="text" name="name" value="{{$product->name or ''}}" id="name">
    </div>
    <div class="form-group">
        <label for="description">Descripció:</label>
        <input class="form-control" type="text" name="description" value="{{$product->description or ''}}" id="description">
    </div>
    <div class="form-group">
        <label for="properties">Propietats:</label>
        <input class="form-control" type="text" name="properties" value="{{$product->properties or ''}}" id="properties">
    </div>
    <div class="form-group">
        <label for="price">Preu:</label>
        <input class="form-control" type="text" name="price" value="{{$product->price or ''}}" id="price">
    </div>

    @foreach ($categories as $cat)
      <tr>
        <td>{{Form::checkbox('categoria[]',$cat->id)}}</td>
        <td>{{$cat->name}}</td>
      </tr>
    @endforeach

    <div class="form-group">
    {{Form::file('imatge',['class' =>'form-controller'])}}</div>
    <div class="">
    <a href="{{url('/productes')}}">Tornar</a>

    <button class="btn btn-success" type="submit">
        @if($product == null)
            Crear
        @else
            Editar
        @endif
    </button>
</form>

<style>
    .switch {
    position: relative;
    display: inline-block;
    width: 43px;
    height: 26px;
    }

    .switch input {display:none;}

    .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #dc3545;
    -webkit-transition: .4s;
    transition: .4s;
    }

    .slider:before {
    position: absolute;
    content: "";
    height: 18px;
    width: 18px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    }

    input:checked + .slider {
    background-color: #00d071;
    }

    input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
    -webkit-transform: translateX(18px);
    -ms-transform: translateX(18px);
    transform: translateX(18px);
    }
    /* Rounded sliders */
    .slider.round {
    border-radius: 18px;
    }

    .slider.round:before {
    border-radius: 50%;
    }
</style>
