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
    
    
    @include ('partials.head-user')
    
    
    
    
    @include ('partials.list-users')
        
       
        
    
</table>
@stop