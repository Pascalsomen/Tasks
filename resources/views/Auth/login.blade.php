<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<style type="text/css">
	
	.demo-card-square.mdl-card {
  width: 320px;
  height: 400px;
  background-color:white;
}
.demo-card-square > .mdl-card__title {
  color:#031229  ;
  background-color:white;
  
}
body{
  margin-top: 130px;
  background-color:#EFEFEF;
}
</style>
</head>
<body><center>

	<div class="demo-card-square mdl-card mdl-shadow--2dp">
    <h3> Login</h3>

  <div class="mdl-card__title mdl-card--expand">
  
   <!-- Textfield with Floating Label -->
<form method="POST" action="{{route('login')}}">
   	{{csrf_field()}}
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input type="email" name="email" class="mdl-textfield__input" placeholder="E-mail" require>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    	<input type="password" name="password" class="mdl-textfield__input" placeholder="Password" required>
  </div>
  
  </div>
  <div class="mdl-card__actions mdl-card--border">

<button class="btn btn-primary btn-block">Login
</button>

   </form>
  </div>
   
</div>
</center>
  
   <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>