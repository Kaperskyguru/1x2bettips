<?php
session_start();
require_once 'Database.php';
$db = Database::getInstance();
    if( !isset($_SESSION['id']) ) {
    	exit( header( 'Location:https://1x2bettips.com.ng' ) );
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta http-equiv="X-UA-compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
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
					<li class="active"><a href="index.php">Dashboard</a></li>
					<li><a href="games.php">Game</a></li>
					<li><a type="button" data-toggle="modal" data-target="#addPost">Add Games</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Welcome, <?php echo explode('@', $_SESSION['email'][0]);?></a></li>
					<li><a href="login.php">Log out</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<h1><span class="fa fa-cog" aria-hidden="true"></span> Dashboard</span></h1>
				</div>
				<div class="col-md-2">
					<div class="dropdown create">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Create Contents<span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							  <li><a type="button" data-toggle="modal" data-target="#addPost">Add Game</a></li>
						  </ul>
					</div>
				</div>
			</div>
		</div>
	</header>
