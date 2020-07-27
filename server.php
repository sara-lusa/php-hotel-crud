<?php
include __DIR__ . '/database.php';

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
