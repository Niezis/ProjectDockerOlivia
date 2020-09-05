@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">{{ $categories->category }}</h1>
                    <p class="lead">{{ $categories->description }}</p>
                    <div class="list-group">
                        @foreach ($categories->posts as $post)
                            <a href="/posts/show/{{$post->id}}" class="list-group-item list-group-item-action list-group-item-secondary">{{ $post->name_video }}</a>
                        @endforeach
                    </div>
                </div>
              </div>


        </div>
    </div>
</div>
@endsection
