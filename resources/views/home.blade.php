@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welkom op Up Next!</h1>
        <p>Check out all games<a href="{{ url('/games') }}"> Click here!</a></p>
    </div>
@endsection
