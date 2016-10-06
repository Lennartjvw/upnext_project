@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add a game</h1>

        {!! Form::open(['url' => '/games']) !!}

        @include('gameslist.form', ['submitButton' => 'Add game'])


        {!! Form::close() !!}


        @include('errors.list')


    </div>
@endsection