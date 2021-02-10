<?php 
include 'db_connect.php';

$id = $_POST['id'];

$sql = "DELETE FROM notification WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('location: ./notification.php');

} else {
  echo "Error deleting record: " . $conn->error;
  
}

?>