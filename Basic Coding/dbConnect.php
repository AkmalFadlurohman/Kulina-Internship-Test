<?php
    define('dbserver', '127.0.0.1:3306');
    define('dbuser', 'root');
    define('dbpass', '');
    define('dbname', 'kulina');

    $conn = mysqli_connect(dbserver, dbuser, dbpass) or die("Connection failed: " . mysql_error());

    mysqli_select_db($conn,dbname) or die('Could not use database '.mysql_error());
?>
