<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$servername = "localhost";

$username = "root";

$password = "";

$db = "ltc";

$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM income WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);

header("Refresh:0; url=select.php");

?>
</body>
</html>