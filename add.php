<html>
<head>
	<title>Registration Form</title>
</head>

<body>

<?php
//including the database connection file
include_once("DBconfig.php");

if(isset($_POST['Submit'])) {	
	$fname = $_POST['fn'];
	$uname = $_POST['un'];
	//echo "hihello";
	$pw = $_POST['pw'];
	//$cpw= $_POST['cpw'];
	$email = $_POST['email'];
	//$phone =$_POST['phone'];
	//$dob = $_POST['bdate'];
	//$gender = $_POST['gender'];
	//$edu = $_POST['edu'];
	//$adrs = $_POST['address'];

	// checking empty fields
	if(empty($uname) || empty($pw) ) {
				
		if(empty($uname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($pw)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$entry = mysql_query("INSERT INTO `users`(`UserName`, `Password`, `FullName`, `email`) VALUES ('$uname','$pw','$fname','$email')");
		//$thisRow = mysql_query("select ID from info where fullname ='$name'");
		
		//mysql_fetch_array($thisRow);
		//echo $thisRow['UserID'];
		
		//display success message
		echo "<font color='green'>User added successfully.";
		echo "<br/><a href='index.php'>Go To Home</a>";
	}
}
?>
</body>
</html>
