<?php
 $con = mysqli_connect('localhost','root','emmanuel','info');
$query = "select TIMES from statistis2";
$exec = mysqli_query($con,$query);
$qty=0;
 while($row = mysqli_fetch_array($exec)){
      $qty += $row['TIMES'];
 }
 echo $qty;
?>






