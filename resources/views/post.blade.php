@extends('layouts.main')
@section('container')
    
    <article class="mb-5">
    <h2>{{ $post->title }}
    </h2>

    <p>{!! $post->body !!}</p>
    </article>
   <a href="/posts">back to post</a>
@endsection
