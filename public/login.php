<?php session_start(); ?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="generator" content="ygohel18">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="assets/img/ic-blaze.png" type="image/x-icon">
		<meta name="description" content="Blaze">
		<title>Blaze - Login</title>
		
		<!-- CSS File -->	
            <link rel="stylesheet" href="assets/blaze.css">
	</head>
	
	<body> 

        <section id="cover" center>
            <a href="index.php"><img src="assets/img/ic-blaze.png" class="auth-icon"></a>
        </section>

        <div class="row cl-1 show" id="wow-auth-1" max-width="320" pos="center">
			<form class="txt-center" name="login" method="post" action="request.php">
                <p heading style="margin-top: 24px!important;" class="auth-p">BLAZE</p>
                <p subheading class="auth-p">sample login page</p>
				<div class="mg-32 row cl-1">
                    <input type="text" onchange="textEmptyValue(this)" placeholder="Username" name="auth_username" value=""/>
                    <input type="password" onchange="textEmptyValue(this)" placeholder="Password" name="auth_password" value=""/>
                    <input type="hidden" value="wow_login" name="request" />
                </div>
                <a btn class="auth-btn" id="login-btn">LOGIN</a>
			</form>
        </div>

        <div center id="auth-link">
            <a href="signup.php" btn="flate" id="auth-signup" class="block">Didn't have an account</a>
        </div>

        <script>

        var login_btn = document.querySelector('#login-btn');

        login_btn.addEventListener('click', (e) => { 

            var username = document.login.auth_username.value;
            var pass = document.login.auth_password.value;

            if ( !(username =="" || pass =="") ) {
                 document.forms['login'].submit();
            } else {
                showMessage('Fill all the details',1);
            }
        })
        </script>
	</body>
</html>