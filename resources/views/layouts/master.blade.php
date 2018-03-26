<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasks</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <link rel="stylesheet" href="mdl/material.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .navbar{background-color:#045F68}
        .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.mdl-layout-title{
    color: white

}
    </style>


</head>
<body style="background-color: #EEEEEE">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
  <div class="mdl-layout__drawer" style="background-color:#0E0E0E">
    <br>
    <span class="mdl-layout-title">DashBoad</span>
    <nav class="mdl-navigation">
     <a class="mdl-navigation__link" href="{{ route('tasks.index') }}"><font color="white">Home</font></a>
      <a class="mdl-navigation__link" href="{{ route('tasks.create') }}"><font color="white">New Tasks</font></a>
      <a class="mdl-navigation__link" href=""><font color="white">Manage Users</font></a>
      <a class="mdl-navigation__link" href=""> <font color="white">Logout</font></a>
    </nav> 
  </div>
  <main class="mdl-layout__content">

    <div class="page-content">
       
        <div class="row" style="margin-left: 5px; margin-right: 10px;">
             <nav class="navbar navbar-default " role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"
data-target="#example-navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<font color="white"></font>
</button>
<a class="navbar-brand" href="#" style="color:white">Tasks Managment</a>
</div>
<div class="collapse navbar-collapse pull-right" id="example-navbar-collapse">
<ul class="nav navbar-nav">

<li><a href="" style="color:white" >USERS</a></li>
<li><a href="" style="color:white">LOGOUT</a></li>


</ul>
</div>
</nav>
        @yield('content')
    </div>


    </div>
  </main>
</div>


<main>
    
</main>

</body>
</html>