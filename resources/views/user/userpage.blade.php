@extends('layouts.app')

@section('content')
    <div class="container">

            @foreach ($mygames as $mygame)

                <div class="gameswrapper">
                    <h1>{{ $mygame->name }}</h1>
                </div>
            @endforeach

            <a href="{{ url('/games') }}"><p>Go back</p></a>

        </div>

@endsection