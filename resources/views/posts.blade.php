
@extends('layouts.main')
@section('container')
@if($posts->count())
<div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">{{  $posts[0]->title  }}</h5>
    <small class="text-muted"><p>By  <a href="/author/{{$posts[0]->user->username}}" class="text-decoration-none">{{ $posts[0]->user->name}}</a> in <a href="/categories/{{$posts[0]->category->slug}}" class="text-decoration-none">{{ $posts[0]->category->name}}<small class="text-muted"> {{$posts[0]->created_at->diffforhumans()}}</small></p></a>
   
    </small> <p class="card-text">{{ $posts[0]->excerpt }}</p>
    
    <a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none btn btn-primary">Read More</a>
  </div>
</div>
@else
@endif

<div class="container">
  <div class="row">
  @foreach($posts->skip(1) as $post)
    <div class="col-md-4 mb-3">
    <div class="card">
      <div class="position-absolute  px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7);"> <a href="categories/{{$post->category->slug}}" class="text-white text-decoration-none">{{$post->category->name}}</a></div>
  <img src="https://source.unsplash.com/400x300?{{$post->slug}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <h5>By  <a href="/author/{{$post->user->username}}" class="text-decoration-none">{{ $post->user->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{ $post->category->name}}</h5></a>
    <p class="card-text">{{ $post->excerpt }}</p>
    <a href="/posts/{{$post->slug}}" class="btn btn-primary">Read More</a>
  </div>
</div>
    </div> @endforeach
  </div>
</div>

@endsection
