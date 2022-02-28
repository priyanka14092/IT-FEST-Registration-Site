<?php
	include_once('dbConnect.php');
	$dfname = $_POST['firstname'];
	$dlname = $_POST['lastname'];
	$demail = $_POST['email'];
	$dphone = $_POST['phone'];
	$dgender = $_POST['gender'];
	$dcountry = $_POST['country'];
	$dcourse = $_POST['course'];
	$dinstitute = $_POST['institute'];
	$dpassingyear = $_POST['year'];
	$dcompetition = $_POST['competition'];
	$qry = "INSERT INTO tbDeb VALUES('$dfname', '$dlname', '$demail', '$dphone', '$dgender', '$dcountry', '$dcourse', '$dinstitute', '$dpassingyear', '$dcompetition')";
	if(mysqli_query($conn, $qry) == true){
		echo "<script>alert('Registration Successful!');</script>";
		header("refresh:0; url=Registration.html");
	}
	else{
		echo "<script>alert('Error occurred, Try Again!');</script>";
		header("refresh:0; url=Debug.html");
	}
	mysqli_commit($conn);
	mysqli_close($conn);
?>