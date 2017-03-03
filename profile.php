<?php
require 'head.php';
require 'db.php';
session_start();

if (isset($_SESSION['loggedin']))
{
			
			if (isset($_GET['EMAIL']))
			{
			$stmt = $pdo->prepare('SELECT * FROM CUSTOMER WHERE EMAIL = :EMAIL');

	       $criteria = [
		                    'EMAIL' => $_GET['EMAIL']
	                   ];
	       $stmt->execute($criteria);
	       $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		   
			
			
			foreach ($results as $row)
			{
			echo '<div class = "dataSearch">
            		<div class = "bookTitle"> <b>Title: </b>'
							  		. $row['EMAIL'] . " - "
							  		. $row['ADDRESS'] .
									'<p><b>ISBN: </b>'
										. $row['FIRST_NAME'] .
									'</p>
									<h2>Welcome ' . $_SESSION['loggedin'] .
									'</h2><ul><h4><a href="Order_History.php">Order History</a></h4></ul>
									<ul><h4><a href="Edit_Account_Details.php">Edit Account Details</a></h4></ul>
									<ul><h4><a href="logout.php">Click here to log out</a></h4></ul>
					</div>' .
				'</div>';
			}
	}
			
}
else { 
    echo '<div class = "dataSearch"> You are not logged in. <a href="login.php">Click here to log in</a></div>';
}
?>


<?php
require 'foot.php';
 ?>
