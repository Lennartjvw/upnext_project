@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Edit: {!! $games->name !!}</h1>

        {!! Form::model($games, ['method' => 'PATCH', 'action' => ['GamesListController@update', $games->id ]]) !!}
        @include('gameslist.form', ['submitButton' => 'Edit game'])

        {!! Form::close() !!}

        @include('errors.list')

    </div>

@endsection
