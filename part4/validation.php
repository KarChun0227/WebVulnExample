<html>
	<head>
		<title>validation input</title>
	</head>
	<body>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Name: <input type="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>
		URL: <input type="text" name="url"><br>
		<input type="submit" name="sanitize" value="Sanitize">
		<input type="submit" name="validate" value="Validate">
		</form>
		
		<?php
		if(isset($_POST['sanitize']))
		{	
			echo "Name entered: ".htmlspecialchars($_POST['name'])." <br />";
			echo "Email address entered: ".$_POST['email']." <br />";
			echo "URL address entered: ".htmlentities($_POST['url'])." <br />";
	
			$sanitizedName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
			echo "Name after sanitization: $sanitizedName<br />";
			$sanitizedEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
			echo "Email address after sanitization: $sanitizedEmail<br />";
			$sanitizedURL = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_EMAIL);
			echo "Email address after sanitization: $sanitizedURL<br />";
		}
		if(isset($_POST['validate']))
		{
			echo "Name entered: ".$_POST['name']." <br />";
			echo "Email address entered: ".$_POST['email']." <br />";
			
			$validatedname = filter_input(INPUT_POST, 'name', FILTER_VALIDATE_EMAIL);
			if ($validatedname)
			{
				echo "Email address after validation: $validatedname<br />";
			}
			else
			{    
				echo "Email address invalid!<br />";
			}
			$validatedEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
			if ($validatedEmail)
			{
				echo "Email address after validation: $validatedEmail<br />";
			}
			else
			{    
				echo "Email address invalid!<br />";
			}
		}
		?>
	</body>
</html>