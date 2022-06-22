<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  <div class="container">
    <?php 
      include("./navbar.php");
     include("connection.php"); 
     $pname=$_POST["pname"];
$sql = "SELECT * FROM import  left join export on import.pid=export.pid WHERE pname='$pname'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<br><br><table class='table table-striped'><tr><th>Product ID  </th><th>Product Name </th><th>Quantity</th><th>Pieces Exported</th><th>Imported rate</th><th>Exported rate</th><th> Date of import</th><th>Imported place</th><th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["pid"]. "</td><td>" . $row["pname"]. "</td><td> " . $row["pieces"]."</td><td>".$row["epieces"]."</td><td>".$row["rate"]."</td><td>".$row["erate"] ."</td><td>".$row["date"]." </td><td>".$row["place"]."</td></tr>";
    }
  echo "</table>";
} else {
  echo '<script>alert("Oops  ! No result found..!")</script>';
  
}
$conn->close();
?>
  




     
    
  </div>
  
</body>
</html>
<?php



