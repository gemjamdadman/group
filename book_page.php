
<?php
require 'head.php';
require 'db.php';

//If a person to edit is specified, display the form and load the persons's information into it
if (isset($_GET['ISBN']))
{
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
								 		<b>Price :</b>£'
										. $row['PRICE'] .'

					 					<p class = "add"><a href="wishlist.php"><img src="images/wishlist.png" alt = "wishlist"></a>
					 					<p class = "add"><a href="add_basket.php"><img src="images/basket.jpg" alt = "basket"></a>
										</p>
						</p>
					</div>
					</div>
        </div>';
  }
}

require 'foot.php';
?>
