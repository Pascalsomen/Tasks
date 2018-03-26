 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 	        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="row">
 		<div class="col-md-4">
 	</div>

 	<div class="col-md-4" style="margin-top: 180px">
 		<H3>Add New User</H3>
 		<br>
 		
 	{!! Form::open() !!}

 	{!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'mdl-textfield__input']) !!}

  {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
        {!! Form::email('email', null, ['class' => 'mdl-textfield__input']) !!}

         {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'mdl-textfield__input']) !!}

         {!! Form::label('password_confrimation', 'Password confirm:', ['class' => 'control-label']) !!}
        {!! Form::password('password_confrimation', ['class' => 'mdl-textfield__input']) !!}
        
        {!! Form::submit('Register', ['class' => ' btn btn-link pull-right']) !!}

 	{!! Form::close() !!}
 	
 	</div>
 	<div class="col-md-4">
 	</div>
 	</div>
 	
 </body>
 </html>