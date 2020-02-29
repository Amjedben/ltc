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
$inv = $_GET['inv'];
$amount = $_GET['amount'];
$data = $_GET['data'];
$note = $_GET['note'];
$sql = "INSERT INTO outgo (id, amount, data, note) VALUES ('$inv', '$amount', '$data', '$note')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

header("Refresh:0; url=min.html");

?>

</body>
</html>