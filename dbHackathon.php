<?php
	include_once('dbConnect.php');
	$hfname = $_POST['firstname'];
	$hlname = $_POST['lastname'];
	$hemail = $_POST['email'];
	$hphone = $_POST['phone'];
	$hgender = $_POST['gender'];
	$hcountry = $_POST['country'];
	$hcourse = $_POST['course'];
	$hinstitute = $_POST['institute'];
	$hpassingyear = $_POST['year'];
	$hcompetition = $_POST['competition'];
	$qry = "INSERT INTO tbHak VALUES('$hfname', '$hlname', '$hemail', '$hphone', '$hgender', '$hcountry', '$hcourse', '$hinstitute', '$hpassingyear', '$hcompetition')";
	if(mysqli_query($conn, $qry) == true){
		echo "<script>alert('Registration Successful!');</script>";
		header("refresh:0; url=Registration.html");
	}
	else{
		echo "<script>alert('Error occurred, Try Again!');</script>";
		header("refresh:0; url=Hackathon.html");
	}
	mysqli_commit($conn);
	mysqli_close($conn);
?>