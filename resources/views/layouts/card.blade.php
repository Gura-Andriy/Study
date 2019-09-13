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
        margin-left: 200px;
    }

</style>
<main role="main">
    <div class="album py-5 mt-5">
        <div class="container">
            <div class="pull-right">Page <b>{{$apartment->currentPage()}} / {{$apartment->lastPage()}}</b></div>
            <p>
                Find {{$apartment->total()}}
            </p>
            <div class="row">
                @foreach($apartment as $offers)
                <div class="col-md-4">
                    <div class="mb-4">
                        @if($offers->images)
                            <img src="{{asset("storage/offers/$offers->id/$offers->images")}}" class="round center" alt="...">
                        @else
                            <img src="https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/1024x768/56587_11491_001.jpg" class="round center" alt="...">
                        @endif
                            <div class="card-body text-center">
                            <h5 class="card-title">{{$offers->title}}</h5>
                            <p class="card-text">{{number_format($offers->price)}}&nbsp{{$offers->currency}}</p>
                                @if(Auth::user() && Auth::user()->id == $offers->user_id)
                            <a href="{{route('delete-offer', [$offers->id])}}" class="btn btn-primary">Delete</a>
                                @endif
                            <a href="{{route('view-offer', [$offers->id])}}" class="btn btn-primary">View</a>
                                @if(Auth::user() && Auth::user()->id == $offers->user_id)
                            <a href="{{route('edit-offer', [$offers->id])}}" class="btn btn-primary">Edit</a>
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
        {!! $apartment->links(); !!}
    </div>
    </div>

</main>
