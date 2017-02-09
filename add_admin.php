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

   $stmt = $pdo->prepare('INSERT INTO admins ( username, password)
                   VALUES (:username, :password)');
   $hash = password_hash($_POST['password'], PASSWORD_DEFAULT); //hashs the password and gets data from form
   $criteria = ['username' => $_POST['username'], //gets the data from the form
   'password' => $hash

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
     <input type = "text" name = "email" placeholder = "Username">
    <input type = "text" name = "email" placeholder = "Confirm Username"></br>
    <input type = "password" name = "password" placeholder = "Password">
    <input type = "password" name = "validate" placeholder = "Confirm Password">
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
