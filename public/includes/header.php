<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="generator" content="ygohel18">
		<link rel="shortcut icon" href="./assets/img/ic-blaze.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Blaze">
		<title>
			<?php if(isset($page_title)) echo $page_title; else echo "Blaze"; ?>
		</title>
		
		<!-- CSS File -->
		<link href="./assets/blaze.css" rel="stylesheet">
        <!-- Material Icon Font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		
		<!-- JS Files -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Fontawesome -->
		<script src="https://kit.fontawesome.com/15cc6c2068.js" crossorigin="anonymous"></script>
		<script src="./assets/blaze.js"></script>

	</head>
	
	<body>

	<body>
	<div header>
		<a href="index.php" > 
			<img src="./assets/img/icon.png" height="64px" width="64px" alt="Icon ET" class="header-icon animated bounceInLeft"/>
		</a>

		<div class="header-link">
        <?php 
			if( isset( $_SESSION['login'] ) && $_SESSION['login'] == false) {
				echo '<a href="#" btn="flate">LOGIN</a>'; 
            } 
            else {
				echo '<a href="#" btn="flate">LOGOUT</a>';
			}
		?>
        </div>
	</div>