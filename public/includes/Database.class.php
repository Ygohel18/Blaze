<?php 
/*
    File Name 		: Database.class.php
	Project Name    : Blaze
	Version 		: 1.0.0
	Date Created	: APR 7 2020
	Date Modified	: APR 7 2020
	Author			: Yash Gohel
	Username 		: ygohel18
	Email			: yashgohel16@gmail.com
	Licence			: GNU General Public License v3.0
	Github			: https://github.com/Ygohel18/Blaze
 */

// Set your namespace
namespace Blaze;
use \PDO as PDO;

class Database extends PDO {
    // Change Host and Database details here
    private static $dns = "mysql:host=localhost;dbname=blaze;";
	private static $user = "root";
	private static $pass = "";
	private static $con = null;
	
	public function __construct() {
		//die('Not Allow');
    }
    
    // Connect to database
    public static function connect() {
		if (self::$con == null) {
			try {
				self::$con = new PDO(self::$dns, self::$user, self::$pass);
			}
			catch (PDOException $e) {
				echo "Connection to Database impossible: " . $e->getMessage();
				die();
			}
			return self::$con;
		}
    }
    

    // Close database connection
    public static function close() {
		self::$con = null;
    }
    
    public function queryExec($query) {
        try {
            self::$con->exec($query);
        } 
        catch (PDOException $e) {
            echo "Query didn't executed: " . $e->getMessage();
            die();
        }
    }

    // Fetch multiple rows
    public function queryFetchAll($query) {
        try {
            self::connect();
            return self::$con->query($query)->fetchAll();
            self::close();
        } 
        catch (PDOException $e) {
            echo "Query didn't executed: " . $e->getMessage();
            die();
        }
    }

    // Fetch single row
    public function queryFetch($query) {
        try {
            self::connect();
            return self::$con->query($query)->fetch();
            self::close();
        } 
        catch (PDOException $e) {
            echo "Query didn't executed: " . $e->getMessage();
            die();
        }
    }
}
?>
