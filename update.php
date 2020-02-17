<?php
 
include 'connection.php';
 error_reporting(0);
  $uname = $_POST['uname'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $position = $_POST['position'];
  $pass = 'abc123';
  $row["uname"] = '';
  $row["fname"] = '';
  $row["lname"] = '';
  $row["email"] = '';

if($_POST['load'])
{
	if($query0 = mysqli_query($conn, "SELECT * FROM data WHERE uname = '$uname'"))
	{
		if(($row=mysqli_fetch_array($query0)))
		{
			
		}
		else
		{
			echo "Username is invalid.";
		}
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

  
if($_POST['update']){
 	// insert into tableName (feilds) values (variables) If still you cant understand please check videos on my youtube channel NOSGENE or comment there so i can help you
 
	//Validate user name availability
	if($query0 = mysqli_query($conn, "SELECT * FROM data WHERE uname = '$uname'"))
	{
	
		if(($row1=mysqli_fetch_array($query0)))
		{
			$sql = "UPDATE data 
			SET fname = '$fname', lname = '$lname', email = '$email', position = '$position'
			WHERE uname = '$uname'";

			if (mysqli_query($conn, $sql)) 
			{
				echo "<h1><center>$uname is updated successfully</center></h1>";
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
		else
		{
			echo "Username is invalid.";
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
   
	<h2>Update User Data</h2>
		<form action="update.php" method="POST">
			Username: <input type="text" name="uname" value="<?php echo $row["uname"] ?>" required><br><br>
			First Name: <input type="text" name="fname" value="<?php echo $row["fname"] ?>" ><br><br>
			Last Name: <input type="text" name="lname" value="<?php echo $row["lname"] ?>" ><br><br>
			Email: <input type="email" name="email" value="<?php echo $row["email"] ?>" ><br><br>
			Position: <select name="position">
						<option value="teacher">Teacher</option>
						<option value="vice-principal">vice-principal</option>
						<option value="principal">principal</option>
					  </select><br><br>
	<br>
			<input type="submit" name="update" value="Update"/></center>
	<br>
			<input type="submit" name="load" value="Load"/></center>
</body>

<!--
	Similarly you can make delete and updates pages with little changes in sql query and here and there. If you need to learn those too
	please check my youtube channel NOSGENE as i am running a full stack web development course there right now.
 -->

 <!--
      ENCODED BY RAMEEZ SAFDAR / For more web and other programmings check out my channel nosgene https://www.youtube.com/channel/UCYbUaMVWujooISm4m7NDIeg
 -->
</html>