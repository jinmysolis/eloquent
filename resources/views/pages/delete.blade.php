@extends('layout')

@section('content')
<div class="container">
    <p class="alert alert-danger">
        "El Usuario se Elimino Correctamente"
        <a href="{{route('home')}}" class="btn bg-primary">Ir al Inicio</a>
    </p>
    
</div>
@stop