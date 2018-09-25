@extends('layouts.test')

@section ('content')
    <h1>posts</h1>
     @if(count($posts)>1)
        @foreach($posts as $post)
            <div class"well">
                <h3>{{$post->title}}</h3>
                <small>Written on{{$post->created_at}}</small>
            </div>
     @else
        <p>No posts</p>
     @endif
@endsection 