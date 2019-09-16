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

        .content-element {
            display: grid;
            padding-top: 80px;
            text-align: center;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }

        /*.comment-area {*/
        /*    width: auto;*/
        /*    margin-left: 20%;*/
        /*    margin-right: 20%;*/
        /*}*/

    </style>

    <div class="content-element">

        <div>
            @if($article->images)
                <img src="{{asset("storage/articles/$article->id/$article->images")}}" class="image-page" alt="...">
            @else
                <img src="https://virudhunagar.nic.in/wp-content/themes/district-theme/images/uncategorized.jpg" class="image-page" alt="...">
            @endif
        </div>

        <div class="card-body text-center">
            <h1>{{$article->name}}</h1>
            <p>{{$article->description}}</p>
            <h3>{{$user->name}}</h3>
        </div>

    </div>

{{--    <div>&nbsp</div>--}}
{{--    <div>&nbsp</div>--}}
{{--    <div>&nbsp</div>--}}
{{--    <div>&nbsp</div>--}}
{{--    <div>&nbsp</div>--}}
{{--    <div>&nbsp</div>--}}

{{--    <div class="input-group comment-area">--}}
{{--        <div class="input-group-prepend">--}}
{{--            <span class="input-group-text">Comment</span>--}}
{{--        </div>--}}
{{--        <textarea name="text_comment" class="form-control"></textarea>--}}

{{--        @if(Auth::user() && Auth::user()->id == $article->user_id)--}}
{{--            <a href="{{route('edit-article', [$article->id])}}" class="btn btn-primary">Comment</a>--}}
{{--        @endif--}}
{{--    </div>--}}

@endsection
