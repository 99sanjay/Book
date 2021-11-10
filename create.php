<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CREATE BOOK</title>
</head>
<body>

		<form action="" method="post">




			<h2>CREATE BOOK</h2>
			
				Title: <input type="text" name="title" placeholder="Enter name of the book"><br><br>

				Description: <textarea name="description" rows="4" cols="50"></textarea><br><br>

				Category: <select name="category" id="cars">
						    <option value="Fiction">Fiction</option>
						    <option value="Romantic">Romantic</option>
						    <option value="Kids">Kids</option>
						    <option value="Knowledge">Knowledge</option>
						  </select>


				Author:<input type="text" name="author" value="author_name"><br><br>

				<input type="submit" name= "submit" value="submitt"><br><br>

				<form action="list.php" method="post">

				<input type="submit" name="show_list" formaction="list.php" value="Show the list">

				</form>



		<?php

				include 'conn.php';



				if (isset($_POST['submit'])) {	


					$title = $_POST['title'];

					$description= $_POST['description'];

					$category = $_POST['category'];

					$author = $_POST['author'];


					$sql = "INSERT INTO description(title, description, category, author) VALUES('$title', '$description', '$category', '$author')";

					print_r($sql);

					if (mysqli_query($conn, $sql)) {
							  echo "<strong style='margin:1rem;padding:1rem;background:orange;display:inline-block;'>New record created successfully</strong>";
							} else {
							  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
							}




				
			


			}


			

			
		?>







</body>
</html>