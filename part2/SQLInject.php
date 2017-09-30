<html>
	<head>
		<title>SQL injection</title>
	</head>
	<form>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "toor";
	$dbname = "studentResult";
	
	$input1 = $_GET['ID'];
	$input2 = $_GET['password'];
	try
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$query = "SELECT * FROM studentResult WHERE userID = '".$input1."' AND password = '".$input2."'";
	
			$result = $conn->query($query);
			echo '<table border=1 cellpadding=1 cellspacing=1>';
			echo '<tr><td><b>Place</b></td><td><b>Population</b></td></tr>';
			foreach($result as $row) 
			{
				$place = $row[0];
				$population = $row[2];
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
	