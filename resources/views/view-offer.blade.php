@extends('example')
@section('content')

    <style>

        .image-page {
            border-radius: 20px;
        }

        img {
            max-width: 90%;
            display: inline-block;
        }

        @media (min-width: 420px) {
            img {
                max-width: 90%;
            }
        }

        @media (min-width: 760px) {
            img {
                max-width: 90%;
            }
        }

        .content-element{
            display: grid;
            padding-top: 80px;
            text-align: center;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }

    </style>

    <div class="content-element">

        <div>
            @if($offer->images)
                <img src="{{asset("storage/offers/$offer->id/$offer->images")}}" class="image-page" alt="...">
            @else
                <img src="https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg" class="image-page" alt="...">
            @endif
        </div>

        <div class="card-body text-center">
            <h1>{{$offer->title}}</h1>
            <p>{{$offer->description}}</p>
            <h3>{{$user->name}}&nbsp&nbsp{{number_format($offer->price)}}&nbsp{{$offer->currency}}</h3>
        </div>

    </div>

@endsection
