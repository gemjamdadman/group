<?php
	require 'head.php';
	require 'db.php';
	session_start();
if (isset($_POST['REGISTER']))
   {

	$stmt = $pdo->prepare('INSERT INTO CUSTOMER (FIRST_NAME, SURNAME, DATE_OF_BIRTH, EMAIL, ADDRESS, PASSWORD)
                VALUES (:FIRST_NAME, :SURNAME, :DOB, :EMAIL, :ADDRESS, :PASSWORD)');
	$hash = password_hash($_POST['PASSWORD'], PASSWORD_DEFAULT);
	$criteria = 
	[
		'FIRST_NAME' => $_POST['FIRST_NAME'] , 
		'SURNAME' => $_POST['SURNAME'] , 
		'DOB' => $_POST['DOB'],
		'EMAIL' => $_POST['EMAIL'], 
		'ADDRESS' => $_POST['ADDRESS'], 
		'PASSWORD' => $hash
	];
	
   $stmt->execute($criteria);
	echo '<div class = "dataSearch">Registration successful</div>';
	}
	else
	{
		if (isset($_POST['LOGIN']))
		{
			$stmt = $pdo->prepare('SELECT * FROM CUSTOMER WHERE EMAIL = :EMAIL');  
			
			$criteria = [
				'EMAIL' => $_POST['EMAIL']
			];

			$stmt->execute($criteria);

			$row = $stmt->fetch();

			if (password_verify($_POST['PASSWORD'], $row['PASSWORD'])) {
				$_SESSION['loggedin'] = $row['EMAIL'];
				echo 'You are now logged in, <a href="index.php">Go to index.php</a>';
			}
		}
		if (isset($_POST['LOGIN']))
		{
			$stmt = $pdo->prepare('SELECT * FROM STAFF WHERE EMAIL = :EMAIL');  
			
			$criteria = [
				'EMAIL' => $_POST['EMAIL']
			];

			$stmt->execute($criteria);

			$row = $stmt->fetch();

			if (password_verify($_POST['PASSWORD'], $row['PASSWORD'])) {
				$_SESSION['loggedin'] = $row['EMAIL'];
				 header('Location: http://194.81.104.22/~15414599/admin.php ');//goes to the admin area 
			}
		}

?>
<div class = "dataSearch">

  <form action ="register.php" method = "POST" class = "log">
    <label>Existing Members please sign in below</label><br>
    <input type = "text" name = "EMAIL" placeholder = "Username">
    <input type = "password" name = "PASSWORD" placeholder = "Password">
    <input type = "submit" name = "LOGIN" value= "Log In">
  </form>



  <form action ="register.php" method = "POST" class = "log">
    <label>NEW Members complete these fields</label><br>
    <input type = "text" name = "FIRST_NAME" placeholder = "First Name">
    <input type = "text" name = "SURNAME" placeholder = "Surname">
    <input type = "date" name = "DOB"></br>
    <input type = "text" name = "EMAIL" placeholder = "Email Address">
    <input type = "text" name = "ADDRESS" placeholder = "Address"></br>
    <input type = "password" name = "PASSWORD" placeholder = "Password">
    <input type = "password" name = "validate" placeholder = "Confirm Password">
    <input type = "submit" name = "REGISTER" value= "Join">
  </form>

</div>
<?php
   }
?>
<?php
require 'foot.php';
 ?>
