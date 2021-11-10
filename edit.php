<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action= "" method="post">

	<h2>Edit Detail</h2>
			
				Title: <input type="text" name="title" placeholder="Enter name of the book"><br><br>

				Description: <textarea name="description" rows="4" cols="50"></textarea><br><br>

				Category: <select name="category" id="cars"> sdfdsf
						    <option value="Fiction">Fiction</option>
						    <option value="Romantic">Romantic</option>
						    <option value="Kids">Kids</option>
						    <option value="Knowledge">Knowledge</option>
						  </select>


				Author:<input type="text" name="author" value="author_name"><br><br>

				<input type="submit" formaction="list.php" name= "edit_user" value="edit"><br><br>

				




				

				</form>

</body>
</html>

<?php


	include_once 'conn.php';

		if (isset($_POST['delete_user'])) {


			print(12364);



		}
	

					

?>