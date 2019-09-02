@extends('example')
@section('content')

    <style>

        .content-page {
            height: 50px;
            margin-top: 50px;
            text-align: center;
        }

        .image-page {
            height: 400px;
            border-radius: 20px;
        }

        .text-view {
            text-align: center;
            padding-top: 50px;
        }

    </style>

<div class="content-page">

    <img src="https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg" class="image-page " alt="...">

    <h1 class="text-view">{{$user->name}}</h1>

</div>

@endsection
