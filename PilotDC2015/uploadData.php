<html>
<head>
</head>
<body>
<?php

#This file connects to the MySQL database

#MySQL Host
$host = "localhost";

#login user
$user = "heartUser";

$password = "genericPassword";

#name of database
$db_name = "heart";


#database connection
$dbc = mysqli_connect($host, $user, $password, $db_name) OR die('Connection error: '.mysqli_connect_error());

$json = file_get_contents("http://www.bigoofn.com/heart/data.json");


?>
</body>
</html>

