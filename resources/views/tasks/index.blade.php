@extends('layouts.master')

@section('content')

    
    
  
<div class="panel panel-default">
 <div class="panel-heading " style="">
<font color="#00002B"><h4> Task List </h4> </font>
 </div>
  <div class="panel-body">
  @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif
<table class="table mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
        <tr><th class="mdl-data-table__cell--non-numeric">Title</th><th class="mdl-data-table__cell--non-numeric">Description</th><th class="mdl-data-table__cell--non-numeric">Action</th></tr>
    @foreach($tasks as $task)
    
        <tr><td class="mdl-data-table__cell--non-numeric">{{ $task->title }}</td><td class="mdl-data-table__cell--non-numeric">{{ $task->description}} </td><td class="mdl-data-table__cell--non-numeric">
<div class="dropdown">
  <button class="dropbtn btn-link">Option</button>
  <div class="dropdown-content">
   
    <a href="{{ route('tasks.edit', $task->id) }}">Update</a>
    <a href="{{ route('tasks.destroy', $task->id) }}">Delete</a>
  </div>
</div> </td></tr>

    @endforeach
    </table>
 </div>
 <div class="panel-footer"> 


 </div>
</div>
<br><br><br><br><br><br>  

@stop