<?php 
require 'head.php';
require ('db.php');

 // this is the connection to the database file so the functions can acceess the information;

 ?>

  <form action="" method="post">
    <!-- creates the form of a customer review -->


    <h2>Customer review</h2>
    <!-- creates heading -->
    First name: <!-- creates heading -->
     <input name="firstname" type="text">
    <!-- creates a input to put data inside-->
     last name: <!-- creates heading -->
     <input name="surname" type="text">
    <!-- creates a input to put data inside-->
     Email:<!-- creates heading -->
     <input name="email" type="text"><!-- creates a input to put data inside-->
    <br />
    Product Description:<br />
    <!-- creates heading -->
     

    <textarea cols="80" name="message_text" rows="10"></textarea>
    <!-- creates a input to put data inside-->
    <br />
    Product rating:<br />
    <!-- creates heading -->
     <select name="rating">
      <!-- creates a select for rating -->


      <option value="1">
        1
      </option><!-- option for select -->


      <option value="2">
        2
      </option><!-- option for select -->


      <option value="3">
        3
      </option><!-- option for select -->


      <option value="4">
        4
      </option><!-- option for select -->


      <option value="5">
        5
      </option><!-- option for select -->
    </select><!-- end select tag -->


    <p>Click to submit <input name="customer_submit" type="submit" value=
    "Submit"></p>
    <!-- creates a submit button -->
  </form>
  <!-- closes form tagt -->
  <?php

if (isset($_POST['customer_submit']))
   { //if the button is clicked the code below runs
   $firstname = $_POST['firstname']; //once clicked  varibles will post
   $surname = $_POST['surname']; //once clicked  varibles will post
   $email = $_POST['email']; //once clicked  varibles will post
   $message_num = $_POST['message_num']; //once clicked  varibles will post
   $message_text = $_POST['message_text']; //once clicked  varibles will post
   $rating = $_POST['rating']; //once clicked  varibles will post
   $date = date("Y-m-d H:i:s"); //insert date and puts it in the format

   // insert data into messages and the names of the names in the database
   // the values of the variables will insert into database

   $pdo->query('INSERT INTO messages (firstname, surname, email,  message_num, message_text, rating, date)
          VALUES ("' . $firstname . '", "' . $surname . '", "' . $email . '", "' . $message_num . '", "' . $message_text . '","' . $rating . '","' . $date . '")');
   }

?>
<?php require 'foot.php'; ?>
