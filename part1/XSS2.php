<html>
	<head>
		<title>Population all table</title>
	</head>
	<body>
		<?php
		try
		{
          $data_source_name = 'mysql:host=localhost;dbname=population';
          $username = 'root';
          $password = 'toor';
          
          $conn = new PDO($data_source_name, $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
          $query = "SELECT * FROM population";
 
          $result = $conn->query($query);
       
          echo '<table border=1 cellpadding=1 cellspacing=1>';
          echo '<tr><td><b>Place</b></td><td><b>Population</b></td></tr>';
          foreach($result as $row) 
          {
              $place = $row[0];
              $population = $row[1];
              echo '<tr><td>'.$place.'</td><td>'.$population.'</td></tr>';
          }   
          echo '</table>';
		}
		catch(PDOException $e) 
		{
			echo 'ERROR: ' . $e->getMessage();
		}
      
      $conn = null;
      ?>
	</body>
</html>