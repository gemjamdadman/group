
<?php

require 'db.php';

$results = $pdo->query('SELECT * FROM BOOK order by RAND() LIMIT 3 ');
    foreach ($results as $row)
{
  echo '<a href="book_page.php?ISBN=' . $row['ISBN'] . '"><div class = "dataSearch"><p>
<ul><img class="bookresize" src= ' . $row['IMAGE'] . '>' .
  '<ul>Title: ' . $row['TITLE'] .
  '<ul>Author: ' . $row['AUTHOR'] . '</p></div></a>';

}



?>
