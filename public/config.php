<?php 
/*
    File Name 		: config.php
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

namespace Blaze;

include 'includes/Database.class.php';

$db = new Database();
$con = $db->connect();

// Create Tables
	
$create_tbl = 'CREATE TABLE IF NOT EXISTS `blaze_user` (
    `user_id` INT(10) NOT NULL AUTO_INCREMENT,
    `user_name` VARCHAR(20) NOT NULL,
    `user_fname` VARCHAR(20) NOT NULL,
    `user_lname` VARCHAR(10) NOT NULL,
    `user_email` VARCHAR(30) NOT NULL,
    `user_cc` INT(3) NULL DEFAULT NULL,
    `user_no` VARCHAR(10) NULL DEFAULT NULL,
    `user_gender` TINYINT(1) NULL DEFAULT NULL,
    `user_birthday` DATE NULL DEFAULT NULL,
    `user_password` VARCHAR(256) NOT NULL,
    `user_signup` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`user_id`),
    UNIQUE (`user_name`, `user_email`, `user_no`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;';

$db->queryExec($create_tbl);

// Your other configuration query here

$db->close();

?>