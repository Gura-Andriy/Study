@extends('example')
@section('content')

    <style>
        .round {
            border-radius: 2%;
            box-shadow: 0 0 0 0px black, 0 0 6px #333;
            overflow: hidden;
            object-fit: cover;
            width: 225px;
            height: 225px;
            margin: auto ;
            margin-top: 28px;
            margin-bottom: 20px;

        }
        .center {
            position: relative;
            display: flex;
        }

        .center-pages-naviganor {
            position: relative;
            display: flex;
            horiz-align: center;
        }

    </style>

    <main role="main">
        <div class="album py-5 mt-5">
            <div class="container">
                <div class="pull-right">Page <b>{{$articles->currentPage()}} / {{$articles->lastPage()}}</b></div>
                <p>
                    Find {{$articles->total()}}
                </p>
                <div class="row">
                    @foreach($articles as $article)
                        <div class="col-md-4">
                            <div class="mb-4">
                                @if($article->images)
                                    <img src="{{asset("storage/articles/$article->id/$article->images")}}" class="round center" alt="...">
                                @else
                                    <img src="https://virudhunagar.nic.in/wp-content/themes/district-theme/images/uncategorized.jpg" class="round center" alt="...">
                                @endif
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{$article->name}}</h5>
                                    <p class="card-text">{{$article->user}}</p>
                                    @if(Auth::user() && Auth::user()->id == $article->user_id)
                                        <a href="{{route('delete-article', [$article->id])}}" class="btn btn-primary">Delete</a>
                                    @endif
                                    <a href="{{route('view-article', [$article->id])}}" class="btn btn-primary">View</a>
                                    @if(Auth::user() && Auth::user()->id == $article->user_id)
                                        <a href="{{route('edit-article', [$article->id])}}" class="btn btn-primary">Edit</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            <div class="center-pages-naviganor">
                {!! $articles->links(); !!}
            </div>
        </div>
    </main>
