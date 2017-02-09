<?php
require 'head.php';

if (isset($_POST['register']))
	{
	$server = '194.81.104.22';
	$username = 'gp_general_1617';
	$password = 'general';
	$schema = 'db_general_1617';


	$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	$pdo->query('INSERT INTO CUSTOMER (EMAIL, PASSWORD, FIRST_NAME, SURNAME, DATE_OF_BIRTH) 
		VALUES(
			"' . $_POST['email'] . '",
			"' . $_POST['password'] . '",
			"' . $_POST['firstname'] . '",
			"' . $_POST['surname'] . '",
			"' . $_POST['dob'] . '"
		)');
	}
	else
	{
		
?>
<div class = "dataSearch">

	<form action ="index.php" method = "POST" class = "log">
    <label>Existing Members please sign in below</label><br>
    <input type = "text" name = "email" placeholder = "Username">
    <input type = "password" name = "password" placeholder = "Password">
    <input type = "submit" name = "submit" value= "Log In">
	</form>

  <form action ="index.php" method = "POST" class = "log">
    <label>NEW Members complete these fields</label><br>
    <input type = "text" name = "firstname" placeholder = "First Name">
    <input type = "text" name = "surname" placeholder = "Surname">
    <input type = "date" name = "dob"></br>
    <input type = "text" name = "email" placeholder = "Email">
    <input type = "text" name = "email" placeholder = "Confirm Email"></br>
    <input type = "password" name = "password" placeholder = "Password">
    <input type = "password" name = "validate" placeholder = "Confirm Password">
    <input type = "submit" name = "register" value= "Join">
  </form>

</div>

<?php
	}
require 'foot.php';
?>