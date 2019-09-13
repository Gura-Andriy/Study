@extends('example')
@section('content')

    <style>

        body {
            background: url('http://genchi.info/image/new-york-city-wallpaper-hd-3.jpg');
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .card {
            top: 100px;
            opacity: 0.83;
            padding: 30px;
            background: #50a3a2;
            border: none;
            border-radius: 2px;
        }

    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card">

                    <div class="card-body">
                        <form method="POST" action="{{route('submit-add-article')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Description</span>
                                </div>
                                <textarea name="description" class="form-control" aria-label="description"></textarea>
                            </div>

                            <div>&nbsp</div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add article') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
