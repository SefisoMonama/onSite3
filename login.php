 <!DOCTYPE html>
<html lang="en">

<head>
     <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,0, shrink-to-fit=no">
 

    <!-- Title Page-->
    <title>LOG-IN!</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href='http://fonts.googleapis.com/css?family=montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
	<link href="http://fonts.googleapis.com/css?family=montserrat:Open+sans" rel="stylesheet">

    <!-- styles CSS-->
    <link href="login.css" rel="stylesheet" media="all">
	 
	</style>
</head>

<body>
	<div class="container">
			<div class="Title">Log-In
			</div>
		<form action="connect.php" method="POST">
		<div class="user-details">
		<div class="input-box">
			<span class="details">User Name</span>
			<input type="text" placeholder="Enter your name" required>
		</div>
		
		<div class="input-box">
			<span class="details">Password</span>
			<input type="text" placeholder="Enter your password" required>
		</div>
		</div>
		<div class="button">
			<input type="Submit" value="Login">
		</div>
	</div>




</body>