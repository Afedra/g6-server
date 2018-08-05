<?php
 $con = mysqli_connect('localhost','root','emmanuel','info');
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php
 $query = "select TASK,TIMES,
       sum(TIMES) as TIMES
from statistis
group by TASK";

 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['TASK']."',".$row['TIMES']."],";

 }
 ?>
        ]);

        var options = {
          title: 'PROCESSED TASKS',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
              <div id="piechart_3d" style="width: 500px; height: 300px;"></div>
  </body>
</html>
