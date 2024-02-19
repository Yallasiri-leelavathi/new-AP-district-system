
<?php
	include 'connect.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
   $comment = $_POST['comment'];
	if($connection)
		echo "connection established";
	$query = "CREATE TABLE IF NOT EXISTS comments(Name VARCHAR(40) NOT NULL, Mail VARCHAR(40) NOT NULL , comment VARCHAR(200));";
	$query1 = "INSERT INTO comments VALUES('$name','$email','$comment');";
	if(mysqli_query($connection,$query))
	{
		
		if(mysqli_query($connection,$query1))
		{
				echo "Thanking you";
		}
	}
?>
<html>
<body>
<h2>REFERENCES</h2>
<a href="Andhra Pradesh Complete List Of New Districts, Headquarters and Mandals With Maps-2022.html">new districts</a><br><br>
<a href="List of 26 districts formed in Andhra Pradesh.html">districts</a>
</body>
</html>
