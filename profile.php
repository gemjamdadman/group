<?php
require 'head.php';
require 'db.php';
session_start();

if (isset($_SESSION['loggedin']))
	{
		echo '<p class = "dataSearch">';
		echo 'You are logged in as ' . $_SESSION['loggedin'] . '<a href="logout.php">Click here to log out</a>';
		echo '<input type="submit" name="Order History"			 value="Order" />';
		echo '<input type="submit" name="Edit Account Details" 	 value="Account" />';
		echo '<input type="submit" name="submit"				 value="delete" />';
		echo '</p>';
	}
else { 
    echo 'You are not logged in. <a href="login.php">Click here to log in</a>';
}
?>


<?php
require 'foot.php';
 ?>
