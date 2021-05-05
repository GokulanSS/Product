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

  $Name = $_POST['name'];
  $Price=$_POST['price'];
  

$sql="INSERT INTO customer (Name,Price) VALUES ('$Name','$Price')";

if(!mysqli_query($con,$sql))
{
  echo 'not inserted';
}
else{
  echo'Submited';
}
header("refresh:1; url=index.html");
?>