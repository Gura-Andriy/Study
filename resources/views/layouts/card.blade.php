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
{{--                <div class="col-md-4">--}}
{{--                    <div class="mb-4">--}}
{{--                        <img src="http://pandadom.com/content/thumbs/1000x/nocrop/j7bd3j/1f/tb/1ftb1fn7phj1g8nbs8ve11gn88h1mc0v.jpg" class="round center" alt="...">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h5 class="card-title">Card title</h5>--}}
{{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="mb-4">--}}
{{--                        <img src="https://i.pinimg.com/736x/7a/c6/5f/7ac65f5ca753d578b4082c2729b6244f.jpg" class="round center" alt="...">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h5 class="card-title">Card title</h5>--}}
{{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="mb-4">--}}
{{--                        <img src="https://www.avr-comfort.com.ua/images/stories/design-hitek/hitek02.jpg" class="round center" alt="...">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h5 class="card-title">Card title</h5>--}}
{{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="mb-4">--}}
{{--                        <img src="https://www.pinwin.ru/imgs/users/rabots/13892/biggest/file3873187400.jpg" class="round center" alt="...">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h5 class="card-title">Card title</h5>--}}
{{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="mb-4">--}}
{{--                        <img src="https://remontt.net/uploads/posts/2016-05/146304769611377580972.jpeg" class="round center" alt="...">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h5 class="card-title">Card title</h5>--}}
{{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="mb-4">--}}
{{--                        <img src="http://xn-----6kcbinjngciffk6bglrhmitt.xn--p1ai/wp-content/uploads/2018/03/gost2019-28.jpg" class="round center" alt="...">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h5 class="card-title">Card title</h5>--}}
{{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="mb-4">--}}
{{--                        <img src="http://foto-remonta.ru/i/631/b5ae8.jpg" class="round center" alt="...">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h5 class="card-title">Card title</h5>--}}
{{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="mb-4">--}}
{{--                        <img src="http://planirovkainfo.ru/wp-content/uploads/2017/12/kvartira-hay-tek-23.jpg" class="round center" alt="...">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h5 class="card-title">Card title</h5>--}}
{{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="mb-4">--}}
{{--                        <img src="https://konkurent.in.ua/media/uploads/prev/2018/10/11/16/52/55/7e08bc73cd3cb4c3ff1f859259789c94.png" class="round center" alt="...">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h5 class="card-title">Card title</h5>--}}
{{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <div class="container">
    <div class="center-pages-naviganor">
        {!! $apartment->links(); !!}
    </div>
    </div>

</main>
