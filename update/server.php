<?php
include __DIR__ . '/../database.php';

$room_id = $_GET['id'];

$sql = "SELECT * FROM `stanze` WHERE `id` = $room_id";
$result = $conn->query($sql);

if ($result) {
  $room = $result->fetch_assoc();

} else {
  die("Query error");
}
$conn->close();
?>
