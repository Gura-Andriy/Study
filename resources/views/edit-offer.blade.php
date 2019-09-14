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
                        <form method="POST" action="{{route('submit-edit-offer', [$offer->id])}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Title</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $offer->title }}">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $offer->price }}">

                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                    <label class="col-md-4 col-form-label text-md-right" for="currency">Currency</label>
                                <div class="col-md-6">
                                <select class="custom-select" id="currency" name="currency">
                                    <option value="{{\App\models\Offer::USD}}" {{\App\models\Offer::USD == $offer->currency ? 'selected' : ''}}>USD</option>
                                    <option value="{{\App\models\Offer::UA}}" {{\App\models\Offer::UA == $offer->currency ? 'selected' : ''}}>UAH</option>
                                </select>
                                </div>
                            </div>

                            @if($offer->images)
                                <img src="{{asset("storage/offers/$offer->id/$offer->images")}}" class="round" alt="...">
                            @else
                                <img src="https://responsive3.estateplus.net/images/no-image.png" class="round" alt="...">
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

                            <div class="input-group mb-3">
                                <label class="col-md-4 col-form-label text-md-right" for="user-id">Categories</label>
                                <div class="col-md-6">
                                    <select class="custom-select" id="categories-id" name="categories-id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{$category->id == $offer->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Description</span>
                                </div>
                                <textarea name="description" class="form-control" aria-label="description">{{$offer->description}}</textarea>
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
