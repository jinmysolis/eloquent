@extends('layout')


@section('content')

<div class="container">
    
    <h1 class="page-header">Listar Primer y Ultimo Ususario</h1>
    
    <h3>Primer Registro</h3>
    <p>id ususario {{ $first->id }}</p>
    <p>{{ $first->name }}</p>
    
    
     <h3>Ultimo Registro</h3>
    <p>{{ $last->id }}</p>
    <p>{{ $last->name }}</p>
    
    
    
</div>


@stop
