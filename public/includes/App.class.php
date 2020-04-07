<?php

namespace Blaze;

require_once 'Database.class.php';

class App {

    public function __construct() {
        $this->db = new Database();
        $this->con = $this->db->connect();
    }

    // Sample function to add user or user Signup
    public function addUser($data) {
        try {
            $query = 'INSERT INTO `blaze_user`(
                `user_name`, 
                `user_fname`, 
                `user_lname`, 
                `user_email`,
                `user_password`) VALUES (?, ?, ?, ?, ?)';
    
            $sql = $this->con->prepare($query);
    
            $sql->execute([
                $data->getUserName(), 
                $data->getFirstName(), 
                $data->getLastName(), 
                $data->getEmail(),
                self::incryptPassword($data->getUserPassword())
            ]);

            $this->db->close();
        }
        catch (PDOException $e) {
            self::$msg = 'User Register Failed: ' . $e->getMessage();
            die();
        }
    }


    // Sample function for user Login
    public function userLogin($data) {
        try {

            $query = 'SELECT `user_password` FROM `blaze_user` WHERE `user_name` LIKE ?';

            $sql = $this->con->prepare($query);
            $sql->execute([ $data->getUserName() ]);
            $result = $sql->fetch();

            if ( count($result) < 1 ) {
                return false;
            } else if ( $result['user_password'] == self::incryptPassword( $data->getUserPassword() ) ) {    
                return true;
            } else { 
                return false;
            }

        }
        catch (PDOException $e) {
            $_SESSION['login'] = false;
            self::$msg = 'User Login Failed: ' . $e->getMessage();
            die();
        }
    }

    // Dont store password directly
    // Code your logic here
    public function incryptPassword($password) {
        return SHA1($password, 256);
    }

   // Your all database and function here

   
}

?>