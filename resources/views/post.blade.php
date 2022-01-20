@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <article class="mb-5">
    <h2 class="mb-3">{{ $post->title }}
    </h2>
    <p class="mb-3">By  <a href="/author/{{$post->user->username}}">{{ $post->user->name}}</a> in <a href="/categ}ories/{{$post->category->slug}}">{{ $post->category->name}}</p></a>
    <img src="https://source.unsplash.com/1200x500?{{$post->slug}}" class="img-fluid mb-3">
    <p>{!! $post->body !!}</p>
    </article>
   <a href="/posts" class="btn btn-primary">back to post</a>
            </div>
        </div>
    </div>
   
@endsection
