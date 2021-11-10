<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List Of Books</title>
</head>
<body>



		
		<form action="" method="post">

				<h2>List Of Books</h2>

			<input id="search" name="search_books" style="align-content: center;" type="text" placeholder="search books">
			<input id="submit" type="submit" name="search_books" value="search_books">

		</form>

	



		<?php


				$conn= mysqli_connect("localhost","root","root", "book");

				if (!$conn) {
			  		die("Connection failed: " . mysqli_connect_error());
				}


				if(empty('search_books')){

					$sql="SELECT * from description";
				}

				else{


					echo '<h2>show result</h2>';
						$sql="SELECT * from description where title like '%{$_POST['search_books']}'";

						$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
				  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {

					  
					    echo "
					    	
	  					
					  		<strong>Title</strong>: 
					  		<form action='edit.php'><input type='submit' value='Edit User' name='edit_user'/></form>
					  		<form method='post'><input type='submit' value='delete user' name='delete_user'/>
					  		</form>
					  		" . $row["title"]. " 
					  		<br><strong>description</strong>: " . $row["description"]. "<br> 
					  		<strong>category</strong>: " . $row["category"]." <br>
					  		<strong>Author</strong>: " . $row["author"].  "<br>";

					  }
					} else {
					  echo "0 results";
					}

				}

			




		
									

		?>












</body>
</html>