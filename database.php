<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "boolean-hotel";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn && $conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

$rooms = [];
if ($result && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
    $rooms[] = $row;
  }

} elseif ($result) {
  // echo "0 results";
  $rooms = [];
} else {
  die("Query error");
}
$conn->close();
?>
