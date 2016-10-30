@extends('layouts.app')

@section('content')
    <div class="container">

            @foreach ($mygames as $mygame)

                <div class="gameswrapper">
                    <h1>{{ $mygame->name }}</h1>
                    <a href="{{ url('games/follow/'.$mygame->id) }}">Follow</a>
                    <a href="{{ url('games/unfollow/'.$mygame->id) }}">Unfollow</a>
                </div>
            @endforeach

            <a href="{{ url('/games') }}"><p>Go back</p></a>

        </div>

@endsection