@extends("layouts.app")

@section("content")
    <div class="container">

        @if(Auth::guest())
            <a href="{{ url('/register')}}">Your own list</a>
        @else
            <a href="{{ url('/user/'.Auth::user()->id) }}">Your own list</a>

        @endif

        {!! Form::open(['method'=>'GET','url'=>'gamessearch','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
        <a href="{{ url('offices/create') }}" class="btn btn-primary btn-sm"><span
                    class="glyphicon glyphicon-plus"></span> Add</a>

        <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="search" placeholder="Search...">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"--></i>
        </button>
    </span>
        </div>
        {!! Form::close() !!}

        @foreach($games as $game)

            <div class="gameswrapper">

                <a href="{{ url('/games', $game->id) }}"><h1>{{ $game->name }}</h1></a>

                <h2>{{ $game->release_date }}</h2>
                {{--<p>{{ $game->info }}</p>--}}
                <p>{{ $game->developer }}</p>

                <a href="{{ url('games/follow/'.$game->id) }}">{{ $status }}</a>
                {{--{{ Form::button('Follow', array('class' => 'btn')) }}--}}
                {{--{!! Form::close() !!}--}}

            </div>
        @endforeach
    </div>


@endsection