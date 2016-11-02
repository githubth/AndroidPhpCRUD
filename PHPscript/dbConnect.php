<?php
	/*
		author: Belal Khan
		website: http://www.simplifiedcoding.net

		My Database is androiddb
		you need to change the database name rest the things are default if you are using wamp or xampp server
		You may need to change the host user name or password if you have changed the defaults in your server
	*/

	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','android_phpmysql');

    /*define('HOST','mysql.hostinger.in');
    define('USER','u568354103_user');
    define('PASS','androidphp');
    define('DB','u568354103_dbap');*/

	
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');