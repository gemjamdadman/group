
<?php
require 'head.php'; ?>
<?php
require ('db.php');
?>


<div class = "dataSearch">
      
     <form action="" enctype="multipart/form-data" method="post">
        
         <h2>insert new book here</h2>
         <br />
         ISBN:
        
          <input name="ISBN" type="text">
         <br />
        TITLE:
        
          <input name="TITLE" type="text"><br />
         AUTHOR:
         
          <input name="AUTHOR" type="text">
         <br />
         PRICE:
    
          <input name="PRICE" type="text">
         <br />
         SYNOPSIS:
         <br />
          <textarea cols="80" name="SYNOPSIS" placeholder="write a comment" rows="10"></textarea>
		           <br />
		  IMAGE:
        
          <input name="IMAGE" type="file">
         <br />
		 CATEGORY:
         
          <input name="CATEGORY" type="text">
         <br />
		 PUBLIC_DATE:
   
          <input name="CATEGORY" type="date">
         <br />
         <p>Click to submit <input name="send" type="submit" value="Submit"></p>
      </form>
  </div>

   <?php

if (isset($_POST['send']))
   { //if the button is clicked the code below runs
   $stmt = $pdo->prepare('INSERT INTO BOOK (ISBN, TITLE, AUTHOR, PRICE, SYNOPSIS, IMAGE, CATEGORY, PUBLIC_DATE) VALUES (:ISBN, :TITLE, :AUTHOR, :PRICE :SYNOPSIS, :IMAGE, :CATEGORY, :PUBLIC_DATE )');
$criteria = [
'ISBN' => $_POST['ISBN'], 
'TITLE' => $_POST['TITLE'] , 
'AUTHOR' => $_POST['AUTHOR'] , 
'PRICE' => $_POST['PRICE'],
'SYNOPSIS' => $_POST['SYNOPSIS'], 
'IMAGE' => $_POST['IMAGE'], 
'CATEGORY' => $_POST['CATEGORY'],
'PUBLIC_DATE' => $_POST['PUBLIC_DATE']];
$stmt->execute($criteria);
   }
?>
<?php require 'foot.php'; ?>