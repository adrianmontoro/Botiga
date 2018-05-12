@extends('adminlte::page')

<head><title>Usuaris</title></head>

@section('content_header')
<h1>Usuaris</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12 col-sm-10 mx-auto">
            <div class="table-responsive">

              <a href="{{route('users.create') }}" class="btn btn-success">Afegir Usuari</a>

                <table class="box-shadow1 table table-striped table-hover bg-white">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th style="width:20%;">Nom</th>
                            <th style="width:20%;">@lang('Email')</th>
                            <th class="text-center">Accions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(sizeof($users) > 0)
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td style="width:20%;">{{$user->name}}</td>

                                    <td style="width:20%;">{{$user->email}}</td>
                                    <td class="text-center">
                                        <form method="post" action="{{route('users.destroy', ['id' => $user->id])}}">
                                            <a class="btn btn-primary" href="{{route('users.show', ['id' => $user->id])}}"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-warning text-light" href="{{route('users.edit', ['id' => $user->id])}}"><i class="fa fa-pencil"></i></a>
                                            @method("delete")
                                            @csrf
                                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">
                                    No hi han usuaris. <a href="{{route('users.create')}}">Creem un nou usuari!</a>.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
