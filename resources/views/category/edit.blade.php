@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Categories') }}</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @elseif (session('danger'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form method="POST" action="{{route('category.update', ['category' => $category->slug])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="category">{{ __('Name') }}</label>
                            <input id="category" type="text" class="form-control @error('category') is-invalid @enderror"
                            name="category" value="{{ old('category') ?? $category->category }}" required autocomplete="category" autofocus>

                            @error('category')
                                <span class="text-right invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea id="description" placeholder="Description Video" class="form-control @error('description') is-invalid @enderror"
                            name="description" autocomplete="description" rows="3" autofocus>{{ $category->description }}</textarea>
                            @error('description')
                                <span class="text-right invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Image</span>
                            </div>
                            <div class="custom-file">
                                <input id="image" aria-describedby="image" type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" autocomplete="image" autofocus>
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>

                        <div class="offset-md-10 col-md-2">
                            <button type="submit" class="btn btn-dark">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
