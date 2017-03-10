

<?php

require 'head.php';
require 'db.php';
//If a person to edit is specified, display the form and load the persons's information into it

if (isset($_POST['customer_submit']))
{
$stmt = $pdo->prepare('INSERT INTO REVIEW (USER_EMAIL, BOOK_ISBN, TEXT_REVIEW, REVIEW_RATING, REVIEW_DATE)
						 VALUES (:USER_EMAIL, :BOOK_ISBN, :TEXT_REVIEW, :REVIEW_RATING, :REVIEW_DATE )');
$criteria = [
'USER_EMAIL' => $_POST['USER_EMAIL'],
'BOOK_ISBN' => $_GET['ISBN'] ,
'TEXT_REVIEW' => $_POST['TEXT_REVIEW'] ,
'REVIEW_RATING' => $_POST['REVIEW_RATING'],
'REVIEW_DATE' => $_POST['REVIEW_DATE']
];

$stmt->execute($criteria);

} else if (isset($_GET['ISBN'])) {
	 $stmt = $pdo->prepare('SELECT * FROM BOOK WHERE ISBN = :ISBN');
	       $criteria = [
		                    'ISBN' => $_GET['ISBN']
	                   ];
	       $stmt->execute($criteria);
	       $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($results as $row)
  {
    echo '<div class = "dataSearch">
            		<div class = "bookTitle"> <b>Title: </b>'
							  		. $row['TITLE'] . " - "
							  		. $row['AUTHOR'] . '<p><b>ISBN: </b>'
										. $row['ISBN'] .
					'</div>' .
					'<div class = "bookImage"><img class="bookResize" src="'
                	. $row['IMAGE'] . '"
					</div>
					<div class = "bookBlurb"><b>Synopsis: </b>'
					. $row['SYNOPSIS'] .
		       		'
					</div>
					<div class = "bookFoot">
						<p class ="price">
								 		<b>Price :</b>Â£'
										. $row['PRICE'] .'
					 					<p class = "add"><a href="wishlist.php"><img src="images/wishlist.png" alt = "wishlist"></a>
					 					<p class = "add"><a href="add_basket.php"><img src="images/basket.jpg" alt = "basket"></a>
										</p>
						</p>


					</div>
					</div>
        </div>';
		}
		
		
$results = $pdo->query('SELECT * FROM REVIEW WHERE BOOK_ISBN =' . $_GET['ISBN']);
    foreach ($results as $row)
{
  echo 
  '<ul>Title: ' . $row['TEXT_REVIEW'] .
  '<ul>Author: ' . $row['USER_EMAIL'] . '</p></div></a>';

}


}
?>
<div class = "customer">
	<form action="" method="post">
    <!-- creates the form of a customer review -->


    <h2>Customer review</h2>
    <!-- creates heading -->
    USER_EMAIL: <!-- creates heading -->
     <input name="USER_EMAIL" type="text">
    <!-- creates a input to put data inside-->
    TEXT_REVIEW:<br />
    <!-- creates heading -->
    <textarea cols="80" name="TEXT_REVIEW" rows="10"></textarea>
    <!-- creates a input to put data inside-->
    <br />
    REVIEW_RATING:<br />
    <!-- creates heading -->
     <select name="REVIEW_RATING">
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
 <br />
	REVIEW_DATE: <!-- creates heading -->
     <input type = "date" name = "REVIEW_DATE"></br>

    <p>Click to submit <input name="customer_submit" type="submit" value="Submit"></p>
    <!-- creates a submit button -->
  </form>
</div>