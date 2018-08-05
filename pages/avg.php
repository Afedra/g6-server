  <?php
ini_set('display_errors', 1);
 ini_set('log_errors',1);
 error_reporting(E_ALL); 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $database= "info";

  $con = mysqli_connect('localhost','root','emmanuel');
  if (!$con)
  {
    die ('Could not connect:' . mysql_error());
  }
  //echo ("This is the sum:");
  mysqli_select_db($con, $database);
  $result= mysqli_query($con, "SELECT AVG(PROCESSING_DURATION ) AS average FROM logs");
  $row = mysqli_fetch_assoc($result);

  $average = $row['average'];
echo number_format((float)$average, 7, '.', '');
 

  ?>
