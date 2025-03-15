<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link rel="stylesheet" href="FPstyle.css" />
	</head>
	<body>
		<header class="header">
			<div class="container">
			 <div class="row align-items-center">
			  <div class="col-md-9">
			   <nav class="nav justify-content-end">
				<a class="nav-link" onclick="window.location.href='index.php'">
				 Welcome
				</a>
				<a class="nav-link" onclick="window.location.href='Homepage.php'">
				 Homepage
				</a>
                <a>
                    <img src="images/afa7b3b7-eb5a-4364-b909-1b48021c9f27.png" height="80px" width="80px" ></img>
                </a>
				<a class="nav-link" onclick="window.location.href='index.php'">
				 Product
				</a>
                <?php 
                $username = isset($_COOKIE['username']);
                $error = [];
                if (empty($username)) {
                    $error["username"] = "Login/Sign in"; 
                    $error["link"] = "Login.php";
                  } else {
                    $error["username"] = "Account";
                    $error["link"] = "Dashboard.php";
                  }
                ?>        
				<a class="nav-link" onclick="window.location.href='<?php $error["link"] ?>'">
                <?php echo $error["username"] ?? ""; ?>
				</a>
			  </div>
			 </div>
			</div>
		   </header>