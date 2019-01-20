<html>
<body>
<?php

$username = 'root';
$pass = '';
$host = 'localhost';
$dbname = 'spartahack_database';



$dbc = @mysqli_connect($localhost, $username, $pass, $dbname) OR die('Could not connect to MySQL ' . mysqli_connect_error());
	
$query = "SELECT email, password FROM user_information";

$response = @mysqli_query($dbc, $query);


	$row = mysqli_fetch_array($response);
	$user_email = $row["email"];
	$user_pass = $row["password"];
	echo "Test";
	echo $row["email"];
	
		
?>

</body>
</html>