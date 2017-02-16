<?php
require 'head.php';
?>
<?php
//$server = '194.81.104.22';
//$username = 'gp_general_1617';
//$password = 'general';

//$schema = 'db_general_1617';

//$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


if (isset($_GET['bookCat'])){
    switch ($_GET['bookCat']) {

      case 'Databases':
        $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Databases"');
            foreach ($results as $row)
            {
                echo '<div class = "dataSearch"><p>' . $row['TITLE'] . $row['AUTHOR'] . '</p>></div>';
            }
        break;

      case 'Networking':
        $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Computer communication"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>' . $row['TITLE'] . ' - ' . $row['AUTHOR'] . '</p></div>';
            }
        break;

      case 'Java':
          $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Java"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>' . $row['TITLE'] . ' - ' . $row['AUTHOR'] . '</p></div>';
            }
        break;

      case 'Systems':
          $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Systems"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>' . $row['TITLE'] . ' - ' . $row['AUTHOR'] . '</p></div>';
            }
        break;

      case 'WebDesign':
          $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Web Design"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>' . $row['TITLE'] . ' - ' . $row['AUTHOR'] . '</p></div>';
            }
        break;

      case 'SoftEng':
          $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Software Engineering"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>' . $row['TITLE'] . ' - ' . $row['AUTHOR'] . '</p></div>';
            }
        break;

      case 'Problem':
          $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Problem Solving"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>' . '<img src= ' . $row['IMAGE'] . '>' . ' - ' . $row['TITLE'] . ' - ' . $row['AUTHOR'] . '</p></div>';
            }
        break;

      case 'Other':
          $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Other"');

            foreach ($results as $row)
            {
              echo '<div class = "dataSearch"><p>' . $row['TITLE'] . ' - ' . $row['AUTHOR'] . '</p></div>';
            }
        break;

      default:
          echo '<p>' . " Nothing found " . '</p>';
        break;

    }

}

?>

<?php
require 'foot.php';
 ?>
