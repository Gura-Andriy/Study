@extends('example')
@section('content')

    <style>

        .link {
            color: #1d643b;
            text-decoration-line: none;
            transition: all 0.4s ease;
        }

        .link:hover {
            text-decoration-line: none;
            color: #e83e8c;
            transition: all 0.4s ease;
        }

    </style>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">What is a Firstproject?</h1>
        <p class="lead">This is the place for selling and buying realty. You can visit <a class="link" href="{{route('apartment')}}">advert</a> page for buying realty,
            or you can <a class="link" href="{{route('add-offer')}}">sell</a> you realty. On <a class="link" href="{{route('articles')}}">articles</a> page everyone can <a class="link" href="{{route('add-article')}}">write</a> article about different style in
            architecture, description of some region of your city or interesting suggestion for buying realty.
            Don't hesitate and use our site!</p>
        <p>All animation maked only on css.</p>
    </div>
</main>
@stop
