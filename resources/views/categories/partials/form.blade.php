@if($category == null)
    <form action="/categories" method="post">
@else
    <form action="/categories/{{$category->id}}" method="post">
    @method('PUT')
@endif
    @csrf
    <div class="form-group">
        <label for="name">Nom:</label>
        <input class="form-control" type="text" name="name" value="{{$category->name or ''}}" id="name">
    </div>
    <div class="form-group">
        <label for="description">Descripció:</label>
        <input class="form-control" type="text" name="description" value="{{$category->name or ''}}" id="name">
    </div>

    <button class="btn btn-success" type="submit">
        @if($category == null)
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
