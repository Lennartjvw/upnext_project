@extends("layouts.app")

@section("content")
    <div class="container">

        @foreach($games as $game)

            <div class="gameswrapper">

                <a href="{{ url('/games', $game->id) }}"><h1>{{ $game->name }}</h1></a>

                <h2>{{ $game->release_date }}</h2>
                {{--<p>{{ $game->info }}</p>--}}
                <p>{{ $game->developer }}</p>

                {{ Form::button('Follow', array('class' => 'btn')) }}
                {!! Form::close() !!}

            </div>
w
        @endforeach
    </div>


@endsection