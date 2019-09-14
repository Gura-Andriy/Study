@extends('example')
@section('content')

    <style>
        .round {
            border-radius: 2%;
            box-shadow: 0 0 0 0px black, 0 0 6px #333;
            overflow: hidden;
            object-fit: cover;
            height: 225px;
            margin: auto;
            margin-bottom: 28px;
            margin-top: 28px;
            position: relative;
            display: flex;
        }

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
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{route('submit-edit-article', [$article->id])}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Title</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $article->name }}">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            @if($article->images)
                                <img src="{{asset("storage/articles/$article->id/$article->images")}}" class="round" alt="...">
                            @else
                                <img src="https://virudhunagar.nic.in/wp-content/themes/district-theme/images/uncategorized.jpg" class="round" alt=" ">
{{--                                <img src="https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg" class="round" alt="...">--}}
                            @endif

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('image') }}</label>

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
                                <textarea name="description" class="form-control" aria-label="description">{{$article->description}}</textarea>
                            </div>

                            <div>&nbsp</div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
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
