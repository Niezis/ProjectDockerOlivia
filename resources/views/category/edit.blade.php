@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Categories') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('category.update', ['category'=>$category->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Name Category') }}</label>

                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" 
                                name="category" value="{{ old('category') ?? $category->category }}" required autocomplete="category" autofocus>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="exampleFormControlTextarea1">{{ __('Description Category') }}</label>

                            <div class="col-md-6">
                                <textarea name="description" placeholder="Description Video" class="form-control @error('description') is-invalid @enderror" 
                                name="description" autocomplete="description" id="exampleFormControlTextarea1" rows="3" autofocus>{{ $category->description }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="exampleFormControlFile1">{{ __('image') }}</label>

                            <div class="col-md-6">

                                <input name="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"  required autocomplete="image" id="exampleFormControlFile1" autofocus>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-dark">
                                {{ __('Submit') }}
                            </button>
                        </div>

                    </form>

                    <form action="{{ route('category.delete', ['category' => $category->id]) }}"
                        method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
