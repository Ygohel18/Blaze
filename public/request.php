<?php 

namespace Blaze;
session_start();

    include 'includes/User.class.php';
    include 'includes/App.class.php';

    if ( isset( $_POST['request'] ) ) {
        $request = $_POST['request'];

        $app = new App();
        $user = new User();

        if ( isset($_SESSION['login']) && $_SESSION['login'] == true) {
            $user->setUserName( $_SESSION['username'] );
            $user->setUserId( $app->getUserId( $user->getUserName() ) );
        }


        // change your default site address here
        $site = "localhost/blaze/";

        if ( $request == "blaze_signup" ) {

            $name = explode(" ", $_POST['auth_name'] );

            $user->setFirstName( $name[0] );
            $user->setLastName( $name[1] );
            $user->setEmail( $_POST['auth_email'] );
            $user->setUserName( $_POST['auth_username'] );
            $user->setUserPassword( $_POST['auth_password'] );

            $app->addUser($user);
            // Redirect to url
            header('Location: login.php');
            
        }

        if ( $request == "wow_login" ) {
            $user->setUserName( $_POST['auth_username'] );
            $user->setUserPassword( $_POST['auth_password'] );

            $result = $app->userLogin($user);

            if ( $result ) {
                $_SESSION['login'] = true;
                $_SESSION['username'] = $user->getUserName();
                setcookie("username", $user->getUserName(), 0, "/");
                 // On Success Redirect to url
                header('Location: index.php');
            } else {
                $_SESSION['login'] = false;
                header('Location: login.php');
            }
        }

        // Add your extra functions here call member functions from App.class.php here
        
    } else {
        // Default Redirect url
        header('Location: index.php');
    }

?>