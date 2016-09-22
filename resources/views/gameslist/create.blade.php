@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add a game</h1>

        {!! Form::open(['url' => '/games']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('release_date', 'Release date:') !!}
            {!! Form::text('release_date', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('info', 'Info:') !!}
            {!! Form::textarea('info', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('developer', 'Developer:') !!}
            {!! Form::text('developer', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Add game', null, ['class' => 'btn btn-primary form-control']) !!}

        </div>




        {!! Form::close() !!}


    </div>
@endsection