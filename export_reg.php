
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
include('./navbar.php')
?>
        <center>
         <div class="card border-primary border-2 mb-3" style="max-width: 40rem;margin-top: 120px;">
             <div class="card-body">
                 <div class="card-title"><h2 style="color: rgb(103, 36, 185); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Export details</h2></div>
                 <div class="card-text" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                 <form action="./export.php" method="post">
                     <table>
                         <tr>
                             <td>product id:</td>
                             <td><input type="text" name="pid"></td>
                         </tr>
                         <tr>
                             <td>Exported rate:</td>
                             <td><input type="text" name="rate"></td>
                         </tr>
                         <tr>
                             <td> No.of pieces exported:</td>
                             <td> <input type="text" name="pieces"></td>
                         </tr>
                       
                         <tr>
                             <td colspan="2">  <input type="submit" value="submit"></td>
                             
                         </tr>
                        
                     </table>
             
                 </form>
             </div>
             </div>
         </div>
        </center>
     </div>
 
  
      
</body>
</html>