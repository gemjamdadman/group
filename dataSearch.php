
<?php
require 'head.php';
?>
<?php

function find($pdo, $table, $field, $value)
{
		$stmt = $pdo->prepare('SELECT * FROM ' . $table .  ' WHERE ' . $field . ' = :value');
		$criteria = ['value' => $value
								];
		$stmt->execute($criteria);
		return $stmt->fetch();
}


if (isset($_GET['bookCat']))
{
    switch ($_GET['bookCat'])
		{

      case 'Databases':
        $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Databases"');
            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>'
              . '<img src= ' . $row['IMAGE'] . '>' . ' - ' . $row['TITLE'] . ' - '
              . $row['AUTHOR'] . ' - ' . $row['ISBN'] . ' - ' . $row['PRICE']
              . ' - ' . $row['PUBLISH_DATE'] .  ' - ' . $row['SYNOPSIS'] .'</p></div>';
            }
        break;

      case 'Networking':
        $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Computer communication"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>'
              . '<img src= ' . $row['IMAGE'] . '>' . ' - ' . $row['TITLE'] . ' - '
              . $row['AUTHOR'] . ' - ' . $row['ISBN'] . ' - ' . $row['PRICE']
              . ' - ' . $row['PUBLISH_DATE'] .  ' - ' . $row['SYNOPSIS'] .'</p></div>';
            }
        break;

      case 'Java':
          $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Java"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>'
              . '<img src= ' . $row['IMAGE'] . '>' . ' - ' . $row['TITLE'] . ' - '
              . $row['AUTHOR'] . ' - ' . $row['ISBN'] . ' - ' . $row['PRICE']
              . ' - ' . $row['PUBLISH_DATE'] .  ' - ' . $row['SYNOPSIS'] .'</p></div>';
            }
        break;

      case 'Systems':
          $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Systems"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>'
              . '<img src= ' . $row['IMAGE'] . '>' . ' - ' . $row['TITLE'] . ' - '
              . $row['AUTHOR'] . ' - ' . $row['ISBN'] . ' - ' . $row['PRICE']
              . ' - ' . $row['PUBLISH_DATE'] .  ' - ' . $row['SYNOPSIS'] .'</p></div>';
            }
        break;

      case 'WebDesign':
          $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Web Design"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>'
              . '<img src= ' . $row['IMAGE'] . '>' . ' - ' . $row['TITLE'] . ' - '
              . $row['AUTHOR'] . ' - ' . $row['ISBN'] . ' - ' . $row['PRICE']
              . ' - ' . $row['PUBLISH_DATE'] .  ' - ' . $row['SYNOPSIS'] .'</p></div>';
            }
        break;

      case 'SoftEng':
          $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Software Engineering"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>'
              . '<img src= ' . $row['IMAGE'] . '>' . ' - ' . $row['TITLE'] . ' - '
              . $row['AUTHOR'] . ' - ' . $row['ISBN'] . ' - ' . $row['PRICE']
              . ' - ' . $row['PUBLISH_DATE'] .  ' - ' . $row['SYNOPSIS'] .'</p></div>';
            }
        break;

      case 'Problem':
          $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Problem Solving"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>'
              . '<img src= ' . $row['IMAGE'] . '>' . ' - ' . $row['TITLE'] . ' - '
              . $row['AUTHOR'] . ' - ' . $row['ISBN'] . ' - ' . $row['PRICE']
              . ' - ' . $row['PUBLISH_DATE'] .  ' - ' . $row['SYNOPSIS'] .'</p></div>';
            }
        break;

      case 'Other':
          $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Other"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>'
              . '<img src= ' . $row['IMAGE'] . '>' . ' - ' . $row['TITLE'] . ' - '
              . $row['AUTHOR'] . ' - ' . $row['ISBN'] . ' - ' . $row['PRICE']
              . ' - ' . $row['PUBLISH_DATE'] .  ' - ' . $row['SYNOPSIS'] .'</p></div>';
            }
        break;

      default:
          echo '<p>' . " Nothing found " . '</p>';
        break;

    }

}
//*********************************************************************************
if (isset($_POST['search'])){
	if (isset($_POST['submit'])){

$bookSearch = ($_POST['search']);
$books = $pdo->prepare("SELECT * FROM BOOK WHERE TITLE LIKE :search || AUTHOR LIKE :search || ISBN LIKE :search");

$book = "%" . $bookSearch . "%";
// PDO->BINDPARAM IS A ONE->ONE RELATIONSHIP SO NEEDS TO BE SINGLE VARIABLE INSTEAD OF ARRAY - NET.PHP
$books->bindParam(':search', $book, PDO::PARAM_STR);

$books->execute();
$bookResults = $books->fetchAll(PDO::FETCH_ASSOC);

'<p>';
foreach ($bookResults as $results)
{

		echo '<p>' . $results['TITLE'] . " - " . $results['AUTHOR'] . " - " . $results['ISBN'] . " - £" . $results['PRICE'] . '</p>';

}
'</p>';
/*

$i = 0;
echo '<table>';
foreach ($bookResults as $results) {
	if ($i == 0) {
		echo '<thead><tr>';
		foreach ($results as $key => $value)
		{
			echo '<td>' . $key . '</td>';
		}
		echo '</tr></thead>';
		echo '<tbody>';
		$i++;
	}
	echo '<tr>';
	foreach ($results as $key => $value)
	{

		echo '<td>';
			echo '<p>' . $results['TITLE'] . " - " . $results['AUTHOR'] . " - " . $results['ISBN'] . " - £" . $results['PRICE'] . '</p>';
		echo '</td>';
	}
	echo '</tr>';

}
echo '</tbody></table>';

}
}

//**********************************************************************************
*/
?>

<?php
require 'foot.php';
 ?>
