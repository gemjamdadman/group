<?php
require 'head.php';
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
    <input type = "text" name = "email" placeholder = "Username">
    <input type = "text" name = "email" placeholder = "Confirm Username"></br>
    <input type = "password" name = "password" placeholder = "Password">
    <input type = "password" name = "validate" placeholder = "Confirm Password">
    <input type = "submit" name = "submit" value= "Join">
  </form>

</div>

<?php
require 'foot.php';
 ?>
