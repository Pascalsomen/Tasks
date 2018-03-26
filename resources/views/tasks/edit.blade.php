@extends('layouts.master')

@section('content')

   

    {!! Form::model($task, [
    'method' => 'PATCH',
    'route' => ['tasks.update', $task->id]
]) !!}

<div class="panel panel-default">
 <div class="panel-heading " style="">
<font color="#00002B"><h4>Update Task</h4></font>
 </div>
  <div class="panel-body">
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
 <div class="panel-footer">  {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

     <a class="pull-right btn btn-primary" href="{{ route('tasks.index') }}">Back</a> </div>
</div>
    

  <br>
  <br><br><br><br><br><br>

@stop