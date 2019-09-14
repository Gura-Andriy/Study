<style>

    .search-block {
        top: 5px;
        position: fixed;
        right: 5px;
        z-index: 2;
    }

    .user-botton {
        color: #0c5460;
        border-color: #0c5460;
    }

    .opacit {
        opacity: 0.8;
    }

</style>

<header class="main">


<div class="search-block opacit">
    <form class="form-inline" method="get" action="{{route('search-offer')}}">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0 user-botton" type="submit">Search</button>
    </form>
</div>


    <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
            <span></span>
        </label>
        <ul class="menu__box" id="menu">

            <li><a class="menu__item-1" class="navbar-brand" href="/">Home</a></li>
            <li><a class="menu__item" href="{{route('apartment')}}">adverts</a></li>
            <li><a class="menu__item" href="{{route('articles')}}">articles</a></li>
{{--            <li><a class="menu__item" href="{{route('registration')}}">registration</a></li>--}}
            @if(Auth::user())
            <li><a class="menu__item" href="{{route('add-offer')}}">add advert</a></li>
            <li><a class="menu__item" href="{{route('add-article')}}">add article</a></li>
            @endif
            <li><a class="menu__item" href="{{route('index')}}">about us</a></li>


                @guest
                    <li class="nav-item">
                        <a class="nav-link menu__item" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link menu__item" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle menu__item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
        </ul>
    </div>



</header>
