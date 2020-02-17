<?php
 
include 'connection.php';
 error_reporting(0);
 $name = $_POST['Name'];
  
if($_POST['submit'])
{
    $sql = "DELETE FROM data WHERE fname = '$name'";

    if (mysqli_query($conn, $sql)) 
    {
        echo "<h1><center>User deleted successfully</center></h1>";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<html>
<head>
<title>Add Data</title>
</head>

<body>
   
	<h2>Give name to delete the user data</h2>
		<form action="delete.php" method="POST">
			Id: <input type="text" name="Name" value="" required><br><br>
	<br>
			<input type="submit" name="submit" value="delete"/></center>
</body>
</html>