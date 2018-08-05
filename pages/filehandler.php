<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'emmanuel'; // Password
$db_name = 'info'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

echo "Failed to connect to MySQL hh";
  $file = fopen("ready.txt","r");

while(!feof($file)){

	$content = fgets($file);
	$carray = explode("\t",$content);
	list($TaskType,$job,$Date,$Time,$processingTime,$UserId) = $carray;
	$sql = mysqli_query($conn,"INSERT INTO `reading` (`TYPE`,`COMPLETED_TASKS`,`DATE`,`TIME`,`PROCESSING_DURATION`,`USER_ID`) VALUES ('$TaskType','$job','$Date','$Time','$processingTime','$UserId')");


}

   
        fclose($file);
   $test = "ready.txt";
if(!unlink($test))
    {
       echo("Error deleting");
    }
else
      {
   echo("deleted");
      }

?>






