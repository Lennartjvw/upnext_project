@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Edit: {!! $user->name !!}</h1>

        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@updateUser', $user->id ]]) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit(null, ['class' => 'btn btn-primary form-control']) !!}

        </div>

    </div>

    {!! Form::close() !!}

    <a href="{{ url('useredit/'.$user->id. '/delete') }}">Delete Account</a>

@endsection
