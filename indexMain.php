
<?php


$results = $pdo->query('SELECT * FROM BOOK order by RAND() LIMIT 1 ');
    foreach ($results as $row)
{
  echo '<a href="book_page.php?ISBN=' . $row['ISBN'] . '"><div class = "dataSearch"><p>
<ul><img class="resize" src= ' . $row['IMAGE'] . '>' .
  '<ul>Title: ' . $row['TITLE'] .
  '<ul>Author: ' . $row['AUTHOR'] . '</p></div></a>';

}

$results = $pdo->query('SELECT * FROM BOOK order by RAND() LIMIT 3 ');
    foreach ($results as $row)
{
  echo '<a href="book_page.php?ISBN=' . $row['ISBN'] . '"><div class = "side"><p>
<ul><img class="resize" src= ' . $row['IMAGE'] . '>' .
  '<ul>Title: ' . $row['TITLE'] .
  '<ul>Author: ' . $row['AUTHOR'] . '</p></div></a>';

}

?>
