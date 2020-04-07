<?php 
namespace Blaze;
session_start();

	#Set variables
    $page_title = "Blaze";
    
    // Import all class files here
	include 'includes/Database.class.php';
	include 'includes/App.class.php';

	$db = new Database();
	$app = new App();

	if ( isset($_SESSION['login']) ) {
		$upload = true;
		echo '<script>';
			echo 'window.onload = function() {';
                echo "showMessage('Welcome Back, {$_SESSION['username']}', 0)";
            echo '};';
		echo '</script>';

	} else {
		$_SESSION['login'] = false;
	}
?>