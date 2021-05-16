<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

    define('DB_SERVER', 'remotemysql.com');
    define('DB_USERNAME', 'N7F1LWSc3k');
    define('DB_PASSWORD', 'LiF9Ui46Xa');
    define('DB_NAME', 'N7F1LWSc3k');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>
