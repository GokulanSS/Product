<?php
  $con=mysqli_connect("localhost","root","");
  if(!$con)
  {
    echo 'Not cont to ser';
  }

  if(!mysqli_select_db($con,'Product'))
  {
   echo 'not db';
  }
  $con->query("INSERT INTO chart SELECT * FROM  customer");
  $con->query("TRUNCATE TABLE customer");
 
header("refresh:0; url=chart.php");
?>