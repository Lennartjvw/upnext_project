@extends("layouts.app")

@section("content")
    <div class="container">

        @if(Auth::guest())
            <div class="own_list">
                <a href="{{ url('/register')}}">Your own list</a>
            </div>
        @else
            <div class="own_list">
                <a href="{{ url('/user/'.Auth::user()->id) }}">Your own list</a>
            </div>

        @endif


        @foreach($games as $game)

            <div class="gameswrapper">

                <a href="{{ url('/games', $game->id) }}"><h1>{{ $game->name }}</h1></a>

                <h2>{{ $game->release_date }}</h2>
                {{--<p>{{ $game->info }}</p>--}}
                <p>{{ $game->developer }}</p>

                <div class="checkingFollow"><a href="{{ url('games/follow/'.$game->id) }}"
                                               style="color:white">Follow</a></div>
                <div class="checkingUnfollow"><a href="{{ url('games/unfollow/'.$game->id) }}"
                                                 style="color:white">Unfollow</a>
                </div>

            </div>

        @endforeach

            <div class="search_wrapper">

                {!! Form::open(['method'=>'GET','url'=>'gamessearch','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
                <a href="{{ url('/games/create') }}" class="btn btn-primary btn-sm"><span
                            class="glyphicon glyphicon-plus" ></span> Add</a>

                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" name="search" placeholder="Search...">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"--></i>
        </button>
    </span>
                </div>
                {!! Form::close() !!}


            </div>
    </div>


@endsection