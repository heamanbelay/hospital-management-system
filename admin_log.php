<?php
//Variable Diclaration and Initialse from HTML Form

$email = validate_input($_POST['email']);
$password = validate_input($_POST['password']);



	$connection = mysqli_connect("localhost", "root", "");
	if (!$connection) {
		print("Server not found!!!");
	} else {
		mysqli_select_db($connection, "hospital");
		$sql = "SELECT email,password FROM admin where email = '$email' and password = '$password'";
		$query = mysqli_query($connection, $sql);
		if (mysqli_num_rows($query) <= 0) {//if user is not registered
			echo "<script type='text/javascript'>";
			echo "alert('Admin login failed')";
			echo "</script>";
			//sleep(1);
			//header("location:adminlogin.php");
		} else {
			header("location:adminpage.php");
		}
	}

	mysqli_close($connection);
	
function validate_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
