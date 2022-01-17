@extends('layouts.main')
@section('container')
    
    <article class="mb-5">
    <h2>{{ $post->title }}
    </h2>
    <h5>By Egi Jati Ramadhan  in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name}}</h5></a>
    <p>{!! $post->body !!}</p>
    </article>
   <a href="/posts">back to post</a>
@endsection
