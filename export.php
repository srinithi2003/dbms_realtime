<?php


include("connection.php");
$pid=$_POST["pid"];
$rate=$_POST["rate"];
$pieces=$_POST["pieces"];

$sql = "INSERT INTO export(pid, epieces,erate)VALUES ('$pid','$pieces','$rate')";
if ($conn->query($sql) === TRUE) {
  echo '<script>alert("Export Registration completed successfully")</script>';
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
