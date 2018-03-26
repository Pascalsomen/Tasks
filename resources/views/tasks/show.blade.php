@extends('layouts.master')

@section('content')

    

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
 <div class="panel-heading " style="">
 <div class="alert alert-danger">Are you sure you want to delete this Task? 
             <div class="pull-right"> 
            {!! Form::open([
                'method' => 'DELETE',
                'route' => ['tasks.destroy', $task->id]
            ]) !!}
            {!! Form::submit('Yes', ['class' => 'btn btn-link pull-right']) !!}
            {!! Form::close() !!}

        </div>
        </div>
        <a class="" href="{{ route('tasks.index') }}">No</a>

 </div>
  <div class="panel-body">
    <h3><u> Task Title:</h3></u><br>
    <h3>{{ $task->title }}</h3>
     <h3><u> Task Desc:</h3></u><br>
   <h3>{{ $task->description }}</h3>
    <hr>

 </div>
 <div class="panel-footer">
            
        </div>
       
</div>
            
        </div>
    </div>

@stop