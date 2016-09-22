@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ $games->name }}</h1>

    <h2>{{ $games->release_date }}</h2>

    <p>{{ $games->info }}</p>

    <a href="{{ url('/games') }}"><p>Go back</p></a>

</div>

@endsection