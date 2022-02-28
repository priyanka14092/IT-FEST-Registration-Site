<html>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$conn = mysqli_connect($servername, $username, $password);
		$sql = 'CREATE DATABASE dbReg';
		$servername = "localhost";
		$username = "root";
		$password = "";
		$Database = 'dbReg';
		$conn = mysqli_connect($servername, $username, $password, $Database);
		mysqli_select_db($conn, 'dbReg');
	?>
</body>
</html>