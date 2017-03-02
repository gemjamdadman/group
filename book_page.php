
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
            <p>'
							  . $row['TITLE'] . " - "
							  . $row['AUTHOR'] . "
						<p> " . '<img class="resize" src="'
                . $row['IMAGE'] . '">'
                . $row['ISBN'] . '<br>' . "£"
								. $row['PRICE'] . '
						<p>'
								. $row['SYNOPSIS'] .
           '</p>
					 <p>
					 	<a href="wishlist.php"><img src="images/wishlist.png" alt = "wishlist"></a>
					 <a href="add_basket.php"><img src="images/basket.jpg" alt = "basket"></a>
					 </p>
        </div>';
  }
}

require 'foot.php';
?>
