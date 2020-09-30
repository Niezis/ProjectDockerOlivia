@extends('layouts.app')


@section('cdn')
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Material form login -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Material form login -->
        <div class="card">

        <h5 class="card-header light-blue accent-1 text-dark text-center py-4">
        <strong>Create Category</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-2">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

        <!-- Form -->
        <form class="text-center" style="color: #757575;" method="POST" action="{{ route('category.post') }}" enctype="multipart/form-data">

            @csrf

            <!-- Category -->
            <div class="md-form">
                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}"  autocomplete="category" autofocus>
                <label for="category" >{{ __('Name') }}</label>
                @error('category')
                    <span class="text-right invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Description -->
            <div class="md-form">
                <textarea id="description" class="md-textarea form-control @error('description') is-invalid @enderror" name="description" autocomplete="description" rows="5" autofocus>{{ old('description') }}</textarea>
                <label for="description">{{ __('Description') }}</label>
                @error('description')
                    <span class="text-right invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

            <div class="input-group">
                <div class="custom-file  py-5">
                    <label class="custom-file-label text-left" for="image">{{ __('Image') }}</label>
                    <input id="image" aria-describedby="image" type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" autocomplete="image" autofocus>
                    @error('image')
                    <span class="text-right invalid-feedback mt-5" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-outline-primary btn-rounded btn-block my-4 waves-effect " type="submit">Create</button>

        </form>
        <!-- Form -->

        </div>

    </div>
    <!-- Material form login -->
            </div>
        </div>
    </div>
@endsection

@push('cdnjs')
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
@endpush


{{-- @section('content')
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

                    <form method="POST" action="{{ route('category.post') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Name Category') }}</label>

                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}"  autocomplete="category" autofocus>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="description">{{ __('Description Category') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" placeholder="Description Video" class="form-control @error('description') is-invalid @enderror" name="description"  autocomplete="description" rows="3" autofocus>{{ old('description') }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="image">{{ __('Image') }}</label>

                            <div class="col-md-6">

                                <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"  autocomplete="image" autofocus>

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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
