<?php

$server = '194.81.104.22';//creates a variable that holds the server name
$username = 'gp_general_1617';//creates a variable that holds the username 
$password = 'db_general_1617';//creaes  a variable that holds the password
//The name of the schema we created earlier in MySQL workbench
//If this schema does not exist you will get an error!
$schema = 'db_general_1617';
$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,
[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>