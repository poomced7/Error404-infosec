<?php
$token = $_GET["token"];
$showtoken = $conn->query("SELECT * FROM member WHERE token = '$token' ");
while ($row = $showtoken->fetch_array()) {
  $id = $row["qrkey"];
  $point = $row["point"];
  $name = $row["name"];
  $lastname = $row["lastname"];
}
echo "<div style=\"font-size:120px;\"> $point </div>" ;
?>
