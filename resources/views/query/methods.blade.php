@extends('layout')

@section('content')

<h1 class="page-header">
   {{$title}}
    
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
    @include ('query.partials.list-users')
        
        
        
    
</table>

@stop