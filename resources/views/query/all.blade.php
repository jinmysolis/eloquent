@extends('layout')

@section('content')

<h1 class="page-header">
    Todos los usuarios de la base de datos
    
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
    
        
        @foreach($users as $user) 
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->biography }}</td>
        </tr>
        @endforeach
        
    
</table>

@stop