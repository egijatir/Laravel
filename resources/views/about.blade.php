@extends('layouts.main')
@section('container')
<h3>{{$name}} </h3>
<p>{{ $email }}  </p> 
<img src="{{ $images }}" alt="{{ $name }}" width="300" height="300">
@endsection