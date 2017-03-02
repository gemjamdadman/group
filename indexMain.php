
<?php
require 'head.php';
require 'db.php';

$results = $pdo->query('SELECT * FROM BOOK order by RAND() LIMIT 1 ');
    foreach ($results as $row)
{
  echo '<a href="book_page.php?ISBN=' . $row['ISBN'] . '"><div class = "feature"><p>
<ul><img class="resize" src= ' . $row['IMAGE'] . '>' .
  '<ul>Title: ' . $row['TITLE'] .
  '<ul>Author: ' . $row['AUTHOR'] . '</p></div></a>';

}

$results = $pdo->query('SELECT * FROM BOOK order by RAND() LIMIT 2 ');
    foreach ($results as $row)
{
  echo '<a href="book_page.php?ISBN=' . $row['ISBN'] . '"><div class = "side"><p>
<ul><img class="resize" src= ' . $row['IMAGE'] . '>' .
  '<ul>Title: ' . $row['TITLE'] .
  '<ul>Author: ' . $row['AUTHOR'] . '</p></div></a>';

}
require 'foot.php';
?>
