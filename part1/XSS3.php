<html>
	<head>
		<title>XSS add data</title>
	</head>
	<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <p>
		Enter City:
		<input type="text" name="place"><br>
		Enter population:
		<input type="text" name="population"><br>
		<input type="submit">
      </p>
    </form>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "toor";
	$dbname = "population";
	
	$input1 = $_POST['place'];
	$input2 = $_POST['population'];
	
	try 
	{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    $sql = "INSERT INTO population (place, pupulation)
    VALUES ('$input1', '$input2')";
   
    $conn->exec($sql);
    echo "New record created successfully";
    }
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;
	?>
	</body>
</html>
