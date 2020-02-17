<?php
 
include 'connection.php';
 error_reporting(0);
  $uname = $_POST['uname'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $position = $_POST['position'];
  $pass = 'abc123';
  
if($_POST['submit']){
 	// insert into tableName (feilds) values (variables) If still you cant understand please check videos on my youtube channel NOSGENE or comment there so i can help you
 
	//Validate user name availability
	if($query0 = mysqli_query($conn, "SELECT * FROM data WHERE uname = '$uname'"))
	{
	
		if(!($row=mysqli_fetch_array($query0)))
		{
			$sql = "INSERT INTO data (uname,fname,lname,email,position,pass)
			VALUES ('$uname', '$fname', '$lname', '$email', $position, '$pass')";

			if (mysqli_query($conn, $sql)) 
			{
				echo "<h1><center>New record created successfully</center></h1>";
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
		else
		{
			echo "Username already exist.";
		}
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
   
	<h2>Register User</h2>
		<form action="add.php" method="POST">
			Username: <input type="text" name="uname" value="" required><br><br>
			First Name: <input type="text" name="fname" value="" required><br><br>
			Last Name: <input type="text" name="lname" value="" required><br><br>
			Email: <input type="email" name="email" value="" required><br><br>
			Position: <select name="position">
						<option value="teacher">Teacher</option>
						<option value="vice-principal">vice-principal</option>
						<option value="principal">principal</option>
					  </select><br><br>
	<br>
			<input type="submit" name="submit" value="Register"/></center>
</body>

<!--
	Similarly you can make delete and updates pages with little changes in sql query and here and there. If you need to learn those too
	please check my youtube channel NOSGENE as i am running a full stack web development course there right now.
 -->

 <!--
      ENCODED BY RAMEEZ SAFDAR / For more web and other programmings check out my channel nosgene https://www.youtube.com/channel/UCYbUaMVWujooISm4m7NDIeg
 -->
</html>