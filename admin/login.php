<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Portal | Account login</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle N</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Admin Portal</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.html">Dashboard</a></li>
					<li class="active"><a href="pages.html">Pages</a></li>
					<li><a href="posts.html">Posts</a></li>
					<li>
					<li><a href="users.html">Users</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Register</a></li>
					<li><a href="login.html">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><span class="fa fa-cog" aria-hidden="true"></span> Admin Portal</span><small> Account Login</small></h1>
				</div>
			</div>
		</div>
	</header>

	<section id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
          <form class="well" id="login" action="index.html" method="post">
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="" placeholder="Enter Email Address">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="" placeholder="Enter your Password">
              </div>
              <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-default btn-block">
              </div>
          </form>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<p>Copyright | 1X2BetTips (c) 2018 Copyright Holder All Rights Reserved.</p>
	</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
