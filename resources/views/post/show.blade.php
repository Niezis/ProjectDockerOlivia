@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card mb-3 " style="width: 320px;">
                <div class="card-header">
                    {{ $category->category }}

                </div>
                <video width="320" height="240" class='p-2' controls>
                    <source src="{{ asset("storage/".$post->video) }}" type="video/mp4">
                </video>
                <div class="card-body">
                    <div class="p-3 mb-2 bg-secondary text-white">{{$post->description}}
                    </div>
                </div>

                <div class="card-footer">
                    @foreach ($category->posts as $post)
                    <a href="/posts/show/{{$post->id}}" class="list-group-item list-group-item-action list-group-item-secondary">{{ $post->name_video }}</a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
