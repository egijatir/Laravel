@extends('layouts.main')
@section('container')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-3">

<img src="{{ $images }}" alt="{{ $name }}" width="300" class="img-thumbnail rounded-circle"> 
<h3>{{$name}} </h3>
<p class="text-center">{{ $email }}  </p>  
</div>
</div>
</div>  
@endsection