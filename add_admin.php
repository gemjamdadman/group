<?php
require 'head.php';

 // gets the admin page

 ?><?php

// Abdul Khan Published on Aug 5, 2014. E-Commerce Website in PHP & MySQL [Video] Available at :< https://www.youtube.com/watch?v=Gsl92TTawls&list=PL3oMl9a6mutmWThi6I3Wsz9uL8xWI7Epz > [Accessed 16 December 2016].

if (isset($_POST['submit']))
   { //will work if the button is pressed
   require 'db.php';

 // gets the database connection code
   // inserts the data to the admin table

   $stmt = $pdo->prepare('INSERT INTO STAFF ( STAFF_ID, FIRST_NAME, SURNAME, ROLE, USERNAME, PASSWORD)
                   VALUES (:STAFF_ID, :FIRST_NAME, :SURNAME, :ROLE, :USERNAME, :PASSWORD)');
   $hash = password_hash($_POST['PASSWORD'], PASSWORD_DEFAULT); //hashs the password and gets data from form
   $criteria = 
  $criteria = [
'STAFF_ID' => $_POST['STAFF_ID'], 
'FIRST_NAME' => $_POST['FIRST_NAME'] , 
'SURNAME' => $_POST['SURNAME'] , 
'ROLE' => $_POST['ROLE'],
'USERNAME' => $_POST['USERNAME'], 
'PASSWORD' => $hash

   // gets the data from the form

   ];
   $stmt->execute($criteria); //excute the data
   echo 'Registration successful'; //says the data was submitted
   }
  else
   { //else will get the form
?>
<div class = "dataSearch">
   <form action="add_admin.php" method="post">
    <input type = "text" name = "STAFF_ID" placeholder = "STAFF_ID">
	<input type = "text" name = "FIRST_NAME" placeholder = "FIRST_NAME">
	<input type = "text" name = "SURNAME" placeholder = "SURNAME">
	<input type = "text" name = "ROLE" placeholder = "ROLE">
     <input type = "text" name = "USERNAME" placeholder = "USERNAME">
    <input type = "password" name = "PASSWORD" placeholder = "PASSWORD">
    <input type = "submit" name = "submit" value= "Add">
   </form>
   </div>
   <?php
   }

?>
<?php
require 'foot.php';

 // gets the admin page

 ?>
