<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Assignment 3</title>

		<link rel="stylesheet" href="CSS/assignment3.css">
	</head>

	<body>
		<h2>Daniel Hui Assignment 3</h2>
		<h1>Information about fish:</h1>
		
		
		<?php 
			include('ParentClass.php');
			include('ChildClass.php');
			
			$all_fish = array(
				new ChildClass("pretty big", "fish", "Thresher sharks", "solid-colored", "saltwater"),
				new ChildClass("about a foot long", "benthic macroinvertebrates and small fish", "Rainbow trout", "spotted", "freshwater"),
				new ChildClass("a few inches long", "small snails", "Dwarf pufferfish", "spotted", "freshwater"),
				new ChildClass("pretty big", "anything", "Bull sharks", "solid-colored", "anywhere")
			);
			
			foreach ($all_fish as $fish) {
				echo "<li>" . $fish . "</li><br>";
			}
			
			
		?>

	</body>
</html>
