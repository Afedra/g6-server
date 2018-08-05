<?php
 $lines = file('waiting.txt');
  foreach($lines as $data){
   echo "<tr><td>$data</td></tr><br>";
}
?> 


