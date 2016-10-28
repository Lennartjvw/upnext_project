@extends("layouts.app")

@section("content")
    <div class="container">


        @if(Auth::guest())
            <a href="{{ url('/register')}}">Your own list</a>
        @else
            <a href="{{ url('/user/'.Auth::user()->id) }}">Your own list</a>

        @endif

        @foreach($games as $game)

            <div class="gameswrapper">

                <a href="{{ url('/games', $game->id) }}"><h1>{{ $game->name }}</h1></a>

                <h2>{{ $game->release_date }}</h2>
                {{--<p>{{ $game->info }}</p>--}}
                <p>{{ $game->developer }}</p>

                <a href="{{ url('games/follow/'.$game->id) }}">Follow</a>
                {{--{{ Form::button('Follow', array('class' => 'btn')) }}--}}
                {{--{!! Form::close() !!}--}}

            </div>
        @endforeach
    </div>


@endsection