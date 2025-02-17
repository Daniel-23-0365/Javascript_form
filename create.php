<?php
	echo "Hello World";
	var_dump($_POST);
?>

<br>
<br>
<br>
<br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lorraine";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
 die("Connection faild: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO students (id, last_name, first_name) VALUES ('', '$lastname', '$firstname')";
 
 if ($conn->query($sql) === TRUE) {
	 
	 echo "<br>";
	 echo "<br>";
	 echo "<br>";

	 echo "New record created successfully";
 }else {
  echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 ?>
 