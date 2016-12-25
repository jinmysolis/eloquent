@extends('layout')


@section('content')

<div class="container">
    
    <h1>Listar ususrios Select(Lists)</h1>
    
</div>
{!!Form::open()!!}
<div class="form-group ">
{!!Form::select('users',$users,null,['class'=>'form-control'])!!}
</div>
{!!Form::close()!!}
@stop
