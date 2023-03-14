<?php

include '../settingDB.php';


$sql = "INSERT INTO tasks (user_id, title, note)
VALUES (3, 'task number 5', 'note of task number 5 ')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>