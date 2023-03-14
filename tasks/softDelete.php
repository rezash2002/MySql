<?php

include '../settingDB.php';


$sql = "UPDATE tasks SET IsDelete='true' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record Deleted successfully";
} else {
  echo "Error Deleted record: " . $conn->error;
}

$conn->close();



?>