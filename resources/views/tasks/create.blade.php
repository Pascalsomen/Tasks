@extends('layouts.master')

@section('content')

    
    
    <hr>
    <div class="panel panel-default">
 <div class="panel-heading " style="">
<font color="#00002B"><h4>New task</h4></font>
 </div>
  <div class="panel-body">
 {!! Form::open([
        'route' => 'tasks.store'
    ]) !!}

    <div class="form-group @if ($errors->get('title')): has-error @endif">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        @if ($errors->has('title'))
            <p class="help-block">{{ $errors->first('title') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('description')): has-error @endif">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        @if ($errors->has('description'))
            <p class="help-block">{{ $errors->first('description') }}</p>
        @endif
    </div>

    
 </div>
 <div class="panel-footer"><center>
 {!! Form::submit('Save task', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
@stop </div>
</div>

   