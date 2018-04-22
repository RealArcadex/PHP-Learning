<?php
	include_once 'top-nav.php'
?>

<html>
	<head>
		<title>RESTRICTED!</title>
		<link rel="stylesheet" type="text/css" href="css/restrictions.css">
	</head>
	<body>
		This page is restricted!
		</br>
		<hr>
		</br>
		<p><button class="enter">Enter!</button></p>
		<input type="text" name="uid" class="disabled" placeholder="Username"></br></br>
		<input type="password" name="pwd" class="disabled" placeholder="Password"></br></br>
		<button class="submit">Submit</button>
	</body>
</html>