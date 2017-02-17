
<?php
require 'head.php'; ?>
<?php

if (isset($_POST['send']))
   {
   require ('db.php');
   $stmt = $pdo->prepare('INSERT INTO BOOK (ISBN, TITLE, AUTHOR, PRICE, SYNOPSIS, IMAGE, CATEGORY, PUBLICATION_DATE) VALUES (:ISBN, :TITLE, :AUTHOR, :PRICE :SYNOPSIS, :IMAGE, :CATEGORY, :PUBLIC_DATE )');
	$criteria = [
	'ISBN' => $_POST['ISBN'], 
	'TITLE' => $_POST['TITLE'] , 
	'AUTHOR' => $_POST['AUTHOR'] , 
	'PRICE' => $_POST['PRICE'],
	'SYNOPSIS' => $_POST['SYNOPSIS'], 
	'IMAGE' => $_POST['IMAGE'], 
	'CATEGORY' => $_POST['CATEGORY'],
	'PUBLICATION_DATE' => $_POST['PUBLICATION_DATE']];
	$stmt->execute($criteria);
   }
   else
   {
?>


<div class = "dataSearch">
      
     <form action="" enctype="multipart/form-data" method="post">
        
        <h2>insert new book here</h2>
        <br/>
        ISBN: <input name="ISBN" type="text">
        <br/>
        TITLE: <input name="TITLE" type="text">
		<br/>
        AUTHOR: <input name="AUTHOR" type="text">
        <br/>
        PRICE: <input name="PRICE" type="text">
        <br/>
        SYNOPSIS:
        <br/>
        <textarea cols="80" name="SYNOPSIS" placeholder="write a comment" rows="10"></textarea>
		<br/>
		IMAGE: <input name="IMAGE" type="file">
        <br/>
		CATEGORY: <input name="CATEGORY" type="text">
        <br/>
		PUBLIC_DATE: <input name="PUBLICATION_DATE" type="date">
        <br/>
        <p>Click to submit <input name="send" type="submit" value="Submit"></p>
      </form>
  </div>

   <?php
   }

?>
<?php require 'foot.php'; ?>