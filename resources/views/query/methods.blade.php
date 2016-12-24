@extends('layout')

@section('content')

<h1 class="page-header">
   {{$title}}
    
</h1>
<table class="table table-hover table-striped">
    <thead>
        
       @include ('partials.head-user')
        
    </thead>
   
    @include ('partials.list-users')
        
    
        
    
</table>

@stop