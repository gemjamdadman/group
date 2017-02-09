
<?php
require 'head.php'; ?>



      <?php
require 'db.php';

//If a person to edit is specified, display the form and load the persons's information into it
if (isset($_GET['book'])) {
	$stmt = $pdo->prepare('SELECT * FROM BOOK WHERE ISBN = :ISBN');

	$criteria = [
		'ISBN' => $_GET['book']
	];
	$stmt->execute($criteria);

	$row = $stmt->fetch();
/*
or:

foreach ($results as $row) {
	//This will set the $row variable to the last result!	
}
*/
?>
<div class = "dataSearch">
      
     <form action="edit_book" enctype="multipart/form-data" method="post">
	 
        <input type="hidden" name="originalISBN" value="<?php echo $row['ISBN']; ?>" />
         <h2>Edit BOOK</h2>
         <br />
         ISBN:
        
          <input name="ISBN" type="text"  value="<?php echo $row['ISBN']; ?>">
         <br />
        TITLE:
        
          <input name="TITLE" type="text"  value="<?php echo $row['TITLE']; ?>"><br />
         AUTHOR:
         
          <input name="AUTHOR" type="text"  value="<?php echo $row['AUTHOR']; ?>">
         <br />
         PRICE:
    
          <input name="PRICE" type="text"  value="<?php echo $row['PRICE']; ?>">
         <br />
         SYNOPSIS:
         <br />
          <textarea cols="80" type="text" name="SYNOPSIS" rows="10"  value="<?php echo $row['SYNOPSIS']; ?>"></textarea>
		  <br />    
		 CATEGORY:
         
          <input name="CATEGORY" type="text"  value="<?php echo $row['CATEGORY']; ?>">
         <br />
		 PUBLIC_DATE:
   
          <input name="PUBLIC_DATE" type="text"  value="<?php echo $row['PUBLIC_DATE']; ?>">
         <br />
         <p>Click to submit <input name="send" type="submit" value="Submit"></p>
      </form>
  </div>
<div class = "dataSearch">
	
	</div>

<?php
}
//Otherwise, the form was submitted, amend the record
else {
	$stmt = $pdo->prepare('UPDATE BOOK
				 SET TITLE = :TITLE, 
				  AUTHOR= :AUTHOR,
				  ISBN= :ISBN,
				  PRICE= :PRICE,
				  SYNOPSIS= :SYNOPSIS,
				  CATEGORY= :CATEGORY,
				  PUBLICE_DATE= :PUBLIC_DATE
				 WHERE ISBN= :originalISBN
	');

	$criteria = [
		'TITLE' => $_POST['TITLE'],
		'AUTHOR' => $_POST['AUTHOR'],
		'ISBN' => $_POST['ISBN'],
		'PRICE' => $_POST['PRICE'],
		'SYNOPSIS' => $_POST['SYNOPSIS'],
		'CATEGORY' => $_POST['CATEGORY'],
		'PUBLICE_DATE' => $_POST['PUBLICE_DATE'],
		'originalISBN' => $_POST['originalISBN']
	];

	$stmt->execute($criteria);
	echo '<p>Record updated</p>';
}
?>

<?php
require 'foot.php'; ?>