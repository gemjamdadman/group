<?php
require 'head.php';
?>

<div class = "dataSearch">
<form action="" method="post">
    <!-- creates the form of a customer review -->


    <h2>Customer Feedback</h2>
    <!-- creates heading -->
    <!-- creates a input to put data inside-->
     Customer Email:<!-- creates heading -->
     <input name="CUSTOMER_EMAIL" placeholder="email" type="text"><!-- creates a input to put data inside-->
	 
    <br>Feedback Description:<br />
    <!-- creates heading -->
    <textarea cols="80" name="message_text" placeholder="write a comment" rows="10"></textarea>
    <!-- creates a input to put data inside-->
   
    <p>Click to submit <input name="customer_submit" type="submit" value="Submit"></p>
    <!-- creates a submit button -->
  </form>
</div>
<?php
require 'db.php';
$stmt = $pdo->prepare('INSERT INTO person (CUSTOMER_EMAIL, FEEDBACK_DESCRIPTION) VALUES (:CUSTOMER_EMAIL, :FEEDBACK_DESCRIPTION )');
$criteria = [
 'CUSTOMER_EMAIL' => $_POST['CUSTOMER_EMAIL'],
 'FEEDBACK_DESCRIPTION' => $_POST['FEEDBACK_DESCRIPTION']
];
$stmt->execute($criteria);
?>
<?php
require 'foot.php';
 ?>
