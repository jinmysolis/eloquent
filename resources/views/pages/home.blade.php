@extends('layout')

@section('content')
<div class="jumbotron">
            <div class="container">
                Curso  Eloquen
                <p>texto</p>
            </div>
</div>
<h1 class="page-header">
   Ultimos Usuarios
    
</h1>
<table class="table table-hover table-striped">
    <thead>
        
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Genero</th>
            <th>Biografia</th>
        </tr>
        
    </thead>
    @include ('partials.list-users')
        
        
        
    
</table>
@stop