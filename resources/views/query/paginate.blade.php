@extends('layout')

@section('content')

<h1 class="page-header">
  Paginacion
    
</h1>
<p>
    Registros totales: {{ $users->total() }}  / Pagina {{ $users->currentPage()}} de {{ $users->lastPage() }}<br> <br>
    
    
    
    Pagina actual: {{ $users->currentPage() }}<br>
    ¿Tiene más páginas?: {{ $users->hasMorePages() }}<br>
    Última página: {{ $users->hasMorePages() }}<br>
    URL de la página siguiente: {{ $users->nextPageUrl() }}<br>
    Registros por página: {{ $users->perPage() }}<br>
    
   
    
    

 
</p>
<table class="table table-hover table-striped">
    <thead>
        
       @include ('partials.head-user')
        
    </thead>
   
    @include ('partials.list-users')
        
   
</table>
<center> {!!$users->render()!!}</center>

@stop