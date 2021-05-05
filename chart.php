<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Chart</title>
  </head>
  <body>
    <div class="container">
    <h3 style="text-align:center">Details</h3 > 
     
    <table border="2">
  <tr>
    <td>Product.</td>
    <td>Price</td>   
  </tr>
    <?php
$db = mysqli_connect("localhost","root","","product"); 
$sql="SELECT * from customer";
$sql1="SELECT * from chart";
$records = mysqli_query($db,$sql);
          while( $data=mysqli_fetch_array($records)) 
          {
          ?>
          <tr>
    <td><?php echo $data['Name']; ?></td>
    <td><?php echo $data['Price']; ?></td>
          </tr>
          <?php
          }
          ?>

          </table>
          <form action="ab.php" method="POST">
<input type="submit" value="ADD CHART">
          <h4>Added Details</h4 > 
          <table border="2">
          <tr>
    <td>Product.</td>
    <td>Price</td>   
  </tr>
  <?php

$records = mysqli_query($db,$sql1);
          while( $data=mysqli_fetch_array($records)) 
          {
          ?>
          <tr>
    <td><?php echo $data['Name']; ?></td>
    <td><?php echo $data['Price']; ?></td>
          </tr>
          <?php
          }
          ?>
          </table>
         

<h4>Total Items</h4>
<?php
$sql1 = "SELECT COUNT(*) from chart";
$result = mysqli_query($db,$sql1);
while($row=mysqli_fetch_array($result)) {
  ?>
 <td><?php echo $row['COUNT(*)']; ?></td> 
 <?php
  }
?>
     <h4>Total Price</h4 >    
     <?php
$sql1 = "SELECT SUM(price) from chart";
$result = mysqli_query($db,$sql1);
while($row=mysqli_fetch_array($result)) {
  ?>
 <td><?php echo $row['SUM(price)']; ?></td> 
 <?php
  }
 mysqli_close($db); 
?>



    </div>
  </body>
</html>