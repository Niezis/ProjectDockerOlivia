@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Learnig') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('post.post') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name_video" class="col-md-4 col-form-label text-md-right">{{ __('Name Video') }}</label>

                            <div class="col-md-6">
                                <input id="name_video" type="text" class="form-control @error('name_video') is-invalid @enderror" name="name_video" value="{{ old('name_video') }}" required autocomplete="name_video" autofocus>

                                @error('name_video')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <select id="category" class="form-control  @error('category') is-invalid @enderror" name="category">
                                    <option disabled selected>Choose One!</option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach

                                </select>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="order" class="col-md-4 col-form-label text-md-right">{{ __('Order') }}</label>

                            <div class="col-md-6">
                                <input id="order" min="0" type="number" class="form-control @error('order') is-invalid @enderror" name="order" value="{{ old('order') }}" required autocomplete="order" autofocus>

                                @error('order')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="exampleFormControlTextarea1">{{ __('Description Video') }}</label>

                            <div class="col-md-6">
                                <textarea name="description" placeholder="Description Video" class="form-control @error('description') is-invalid @enderror" name="description"  autocomplete="description" id="exampleFormControlTextarea1" rows="3" autofocus>{{ old('description') }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="exampleFormControlFile1">{{ __('Video') }}</label>

                            <div class="col-md-6">

                                <input name="video" type="file" class="form-control-file @error('video') is-invalid @enderror" name="video"  required autocomplete="video" id="exampleFormControlFile1" autofocus>

                                @error('video')
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection