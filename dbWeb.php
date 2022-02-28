<?php
	include_once('dbConnect.php');
	$wfname = $_POST['firstname'];
	$wlname = $_POST['lastname'];
	$wemail = $_POST['email'];
	$wphone = $_POST['phone'];
	$wgender = $_POST['gender'];
	$wcountry = $_POST['country'];
	$wcourse = $_POST['course'];
	$winstitute = $_POST['institute'];
	$wpassingyear = $_POST['year'];
	$wcompetition = $_POST['competition'];
	$qry = "INSERT INTO tbWeb VALUES('$wfname', '$wlname', '$wemail', '$wphone', '$wgender', '$wcountry', '$wcourse', '$winstitute', '$wpassingyear', '$wcompetition')";
	if(mysqli_query($conn, $qry) == true){
		echo "<script>alert('Registration Successful!');</script>";
		header("refresh:0; url=Registration.html");
	}
	else{
		echo "<script>alert('Error occurred, Try Again!');</script>";
		header("refresh:0; url=Web.html");
	}
	mysqli_commit($conn);
	mysqli_close($conn);
?>