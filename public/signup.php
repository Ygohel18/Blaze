<?php 
    namespace Blaze;
    session_start();
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="generator" content="ygohel18">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="assets/img/ic-blaze.png" type="image/x-icon">
		<meta name="description" content="Blaze">
		<title>Blaze - Signup</title>
		
		<!-- CSS File -->	
			<link rel="stylesheet" href="assets/blaze.css">
	
	</head>
	
	<body> 

        <section id="cover" center>
            <a href="index.php"><img src="assets/img/ic-blaze.png" class="auth-icon"></a>
        </section>
      
        <div class="row cl-1 show" id="wow-auth-1" max-width="320" pos="center">
			<form class="txt-center" name="auth_card" method="post" action="request.php">
                <p heading style="margin-top: 24px!important;" class="auth-p">BLAZE</p>
                <p subheading class="auth-p">sample signup page</p>
				<div class="mg-32 row cl-1">
                    <input type="text" onchange="textEmptyValue(this)" placeholder="Full Name" name="auth_name" value=""/>
                    <input type="text" onchange="textEmptyValue(this)" placeholder="Email" name="auth_email" value=""/>
                    <input type="text" onchange="textEmptyValue(this)" placeholder="Set Username" name="auth_username" value=""/>
                    <input type="password" onchange="textEmptyValue(this)" placeholder="Set Password" name="auth_password" value=""/>
                    <input type="hidden" value="wow_signup" name="request" />
                </div>
                <div btn class="auth-btn" id="auth-1-btn">CONTINUE</div>
			</form>
        </div>

        <div center id="auth-link">
            <a href="login.php" btn="flate" id="auth-login" class="block">Already have an account</a>
        </div>

        <script src="assets/blaze.js"></script>

        <script>
            var btn_1 = document.querySelector('#auth-1-btn');

            btn_1.addEventListener('click', (e) => { 
                var name = document.auth_card.auth_name.value;
                var email = document.auth_card.auth_email.value;
                var username = document.auth_card.auth_username.value;
                var password = document.auth_card.auth_password.value;

                if ( !(name =="" || email =="" || username =="" || password =="") ) {
                    document.forms['auth_card'].submit();
                } else {
                    showMessage('Fill all the details',1);
                }
            })
        </script>
	</body>
</html>