<?php
session_start();
// connect to database
$db = mysqli_connect('localhost', 'root', '');
if(!$db)
{
	echo 'Not connected to database';
}

if(!mysqli_select_db($db,'farming'))
{
	echo 'Database not selected';
}
/*if($db)
	echo "success";*/
$Name="";
$Gender="";
$DOB="";
$AadharNumber="";
$Address="";
$District="";
$MobileNumber="";
$Username="";
$Password="";
$errors=array();


// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	
	
	$Name = mysqli_real_escape_string($db, $_POST['Name']);
	$Gender = mysqli_real_escape_string($db, $_POST['Gender']);
	$DOB = mysqli_real_escape_string($db, $_POST['DOB']);
	$AadharNumber = mysqli_real_escape_string($db, $_POST['AadharNumber']);
	$Address = mysqli_real_escape_string($db, $_POST['Address']);
	$District= mysqli_real_escape_string($db, $_POST['District']);
	$MobileNumber = mysqli_real_escape_string($db, $_POST['MobileNumber']);
	$Username= mysqli_real_escape_string($db, $_POST['Username']);
	$Password = mysqli_real_escape_string($db, $_POST['Password']);
	//echo $Name;

	// form validation: ensure that the form is correctly filled
	if (empty($Name)) { array_push($errors, "Name is required"); }
	if (empty($Gender)) { array_push($errors, "Gender is required"); }
	if (empty($DOB)) { array_push($errors, "DOB is required"); }
	if (empty($AadharNumber)) { array_push($errors, "Aadhar Number is required"); }
	if (empty($Address)) { array_push($errors, "Address is required"); }
	if (empty($District)) { array_push($errors, "District is required"); }
	if (empty($MobileNumber)) { array_push($errors, "Mobile Number is required"); }	
	if (empty($Username)) { array_push($errors, "User name is required"); }
	if (empty($Password)) { array_push($errors, "Password is required"); }


	// register user if there are no errors in the form
if (count($errors) == 0) {
		
	$query = "INSERT INTO jaan VALUES('$Name', '$Gender', '$DOB', '$AadharNumber', '$Address', '$District', '$MobileNumber','$Username','$Password')";
		if(!mysqli_query($db, $query))
			echo "query error";
		

		echo '<script>
			window.alert("you are successfully Registered");
 			window.location.href=" loginform.php";
		</script>';
}
}

// LOGIN USER
if (isset($_POST['login_user'])) {
	$Username = mysqli_real_escape_string($db, $_POST['Username']);
	$Password = mysqli_real_escape_string($db, $_POST['Password']);
	$query = "SELECT Username,Password FROM jaan WHERE Username='$Username' AND Password='$Password'";
		$results = mysqli_query($db, $query);

	echo $Username,$Password;
	if ($Username==$Username && $Password==$Password) {
		
		
		if (mysqli_num_rows($results) ==1) {
		echo '<script>
			window.alert("you are successfully Loggedin");
			window.location.href=" homepage.html";
		</script>';
			
		}else {
			echo '<script>
			window.alert("Wrong username/password combination");
			
		</script>';
			
		}
	}
}

?>