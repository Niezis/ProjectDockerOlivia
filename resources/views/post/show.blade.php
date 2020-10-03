@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card mb-3 " style="width: 320px;">
                <div class="card-header">
                    {{ $category->category }}

                </div>


                {{-- <video width="320" height="240" class='p-2' controls>
                    <source src="{{ asset("storage/".$post->video) }}" type="video/mp4">
                </video> --}}

                <iframe id="existing-iframe-example"
                width="320" height="240"

                @if ($post->start)
                    src="https://www.youtube.com/embed/{{ $link }}?start={{$post->start}}&end={{$post->end}}"
                @else
                    src="https://www.youtube.com/embed/{{ $link }}?"
                @endif

                frameborder="0"
                style="border: solid 4px #37474F"
                ></iframe>

                <div class="card-body">
                    <div class="p-3 mb-2 bg-secondary text-white">{{$post->description}}
                    </div>
                </div>

                <div class="card-footer">
                    @foreach ($category->posts as $post)
                    <a href="/posts/{{$post->slug}}/show" class="list-group-item list-group-item-action list-group-item-secondary">{{ $post->name_video }}</a>
                    @endforeach
                </div>
                @hasrole('admin')
                    <form class="m-2" action="{{ route('post.delete', ['post' => $post->slug]) }}"
                        method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="{{route('post.edit',['post'=> $post->slug])}}" class="btn btn-info btn-md active" role="button" aria-pressed="true">Edit</a>
                        <button type="submit" class="btn btn-danger ml-3">Delete</button>
                    </form>
                @endhasrole
            </div>
        </div>
    </div>
</div>
@endsection
