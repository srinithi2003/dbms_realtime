<?php


include("connection.php");
$pid=$_POST["pid"];
$rate=$_POST["rate"];
$pieces=$_POST["pieces"];
$pname=$_POST["pname"];
$date=$_POST["date"];
$place=$_POST["place"];

$sql = "INSERT INTO import(pid, pname,rate,place,pieces,date)VALUES ('$pid','$pname','$rate','$place','$pieces','$date')";
if ($conn->query($sql) === TRUE) {
  echo '<script>alert("Import details Registered completed successfully")</script>';
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
