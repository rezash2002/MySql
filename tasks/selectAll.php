<?php

include '../settingDB.php';


$sql = "SELECT * FROM tasks where isDelete= 'false' ";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $row["category_id"]? $category_id = $row["category_id"] : $category_id = "NULL";
    echo "id: " . $row["id"]. "<br> Title: " . $row["title"]. "<br> Note: " . $row["note"]. "<br> user_id: " . $row["user_id"].
     "<br> category_id: " .$category_id. "<hr>" ;
  }
} else {
  echo "0 results";
}

$conn->close();



?>