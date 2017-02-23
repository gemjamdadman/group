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
        $results = $pdo->query('SELECT * FROM BOOK WHERE category = "Database"');
            foreach ($results as $row)
				{
					echo '<div class = "dataSearch"><p>
				<ul><img class="resize" src= ' . $row['IMAGE'] . '>' .  
					'<ul>Title: ' . $row['TITLE'] . 
					'<ul>Author: ' . $row['AUTHOR'] . '</p></div>';
				}
         break;
 
			case 'Networking':
			$results = $pdo->query('SELECT * FROM BOOK WHERE category = "Computer Communication"');
            foreach ($results as $row)
				{
					echo '<div class = "dataSearch"><p>
					<ul><img class="resize" src= ' . $row['IMAGE'] . '>' .   
					'<ul>Title: ' . $row['TITLE'] .
					'<ul>Author: ' . $row['AUTHOR'] . '</p></div>';
				}
         break;
  

			case 'Java':
			$results = $pdo->query('SELECT * FROM BOOK WHERE category = "Java"');  
            foreach ($results as $row)
				{
					echo '<div class = "dataSearch"><p>
					<ul><img class="resize" src= ' . $row['IMAGE'] . '>' .  
					'<ul>Title: ' . $row['TITLE'] . 
					'<ul>Author: ' . $row['AUTHOR'] . '</p></div>';
				}
         break;
  
			case 'Systems':
			$results = $pdo->query('SELECT * FROM BOOK WHERE category = "Operating Systems"');
  
            foreach ($results as $row)
				{
					echo '<div class = "dataSearch"><p>
					<ul><img class="resize" src= ' . $row['IMAGE'] . '>' . 
					'<ul>Title: ' . $row['TITLE'] . 
					'<ul>Author: ' . $row['AUTHOR'] . '</p></div>';
				}
         break;
		 
			case 'WebDesign':
			$results = $pdo->query('SELECT * FROM BOOK WHERE category = "WebDesign"');
            foreach ($results as $row)
				{
					echo '<div class = "dataSearch"><p>
					<ul><img class="resize" src= ' . $row['IMAGE'] . '>' .  
					'<ul>Title: ' . $row['TITLE'] . 
					'<ul>Author: ' . $row['AUTHOR'] . '</p></div>';
				}
         break;
  

			case 'SoftEng':
			$results = $pdo->query('SELECT * FROM BOOK WHERE category = "Software Engineering"');
            foreach ($results as $row)
			  {
					echo '<div class = "dataSearch"><p>
					<ul><img class="resize" src= ' . $row['IMAGE'] . '>' .  
					'<ul>Title: ' . $row['TITLE'] . 
					'<ul>Author: ' . $row['AUTHOR'] . '</p></div>';
				}
         break;
 
		case 'Problem':
			$results = $pdo->query('SELECT * FROM BOOK WHERE category = "Problem Solving"');
            foreach ($results as $row)
            {
					echo '<div class = "dataSearch"><p>
					<ul><img class="resize" src= ' . $row['IMAGE'] . '>' .   
					'<ul>Title: ' . $row['TITLE'] . 
					'<ul>Author: ' . $row['AUTHOR'] . '</p></div>';
            }
         break;

		default:
          echo '<p class = "dataSearch">' . " Nothing found " . '</p>';
        break;

    }

}

?>

<?php
require 'foot.php';
 ?>
