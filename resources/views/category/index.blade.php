@extends('layouts.app')

@section('search')
<form class="form-inline" action="{{route('category.search')}}">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
</form>
@hasrole('admin')
<a href="{{ route('category.create') }}" class="btn btn-primary btn-md">Create</a>
@endhasrole
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @foreach ($categories as $category)
                <div class="card mb-3 " style="width: 300px;">
                    <div class="card-header">
                        {{ $category->category }}

                    </div>
                    <img style="height: 300px; object-fit: cover; object-position: center" src="{{ asset("storage/".$category->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p>{{Str::limit($category->description, 200, '...')}}</p>
                        <a href="{{ route('category.show',['category' => $category->slug]) }}" class="btn btn-primary">Go Learn</a>
                    </div>

                    <div class="card-footer">
                        Published on {{$category->created_at->format("d M, y")}}
                    </div>
                </div>

            @endforeach
            {{$categories->links()}}

        </div>
    </div>
</div>
@endsection
