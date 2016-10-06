<div class="form-group">

    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('release_date', 'Release date:') !!}
    {!! Form::input('date', 'release_date', null, ['class' => 'form-control']) !!}

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

    {!! Form::submit($submitButton, null, ['class' => 'btn btn-primary form-control']) !!}

</div>