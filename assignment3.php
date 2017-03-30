<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Assignment 3</title>

		<link rel="stylesheet" href="CSS/assignment3.css">
	</head>

	<body>
		<h1>Choose a pet and give it a name</h1>
		<form method=post">
			Type of Pet: <br>
			<input type="radio" name="type" value="dog">Dog<br>
			<input type="radio" name="type" value="fish">Fish<br>
  
			Name of Pet:<br>
			<input type="text" name2="name" value2=""><br><br>
			<input type="submit" value="Submit">
		</form>	

		
		<?php 
			include('ParentClass.php');
			include('ChildClass.php');

			//post the values from form, and do it that way?
			
			
		?>

	</body>
</html>
