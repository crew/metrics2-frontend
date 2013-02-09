<!DOCTYPE html>
<?php include "grabdata.php"?>
<html>
  <header>
    <!-- bootstrap, hicharts-extras, hicharts base, ajax -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.5/mootools-yui-compressed.js"></script>
    <script src="http://code.highcharts.com/adapters/mootools-adapter.js"></script> -->
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <style>
      .header
      {
        font-family:"verdana";
        color:#FFA71A;
        background-color:#76766e;
      }
      .container
      {
        background-color:#76766e;
      }
      body
      {
        background-image:url('light_alu/light_alu.png');
      }
    </style>
    <script>
        // makes an array for our data to go in
        var dataarray = [];
        // grabs the data file

        $.get('http://missilecommand:5984/allthefucks/_design/testreduce/_view/basicreduce?group_level=1',function(data){
          var lines = data.rows;
          // grab each line & make datapoint
          for(var i=0; i<lines.length;i++){
            var line = lines[i];
              dataarray.push([line.key,line.value]);
          }
          console.log(dataarray[0]);
          // make chart
          var chart1 = new Highcharts.Chart({
            chart: {
              // what id the chart goes in
              renderTo: 'container',
              // what axis is zoomable
              zoomType: 'x'
            },
            title: {
              // title of graph
              text: 'Computer Usage'
            },
            xAxis: {
              // title of axis
              title: 'Time',
              // specifies that this axis takes js unix timestamps (milliseconds)
              type: 'line',
            },
            yAxis: {
              title: {
                // title of axis
                text: 'Users Logged In'
              }
            },
            series: [
            {
              // title of series
              name: 'Ubuntu',
              // pulls data in an array from that variable
              data: dataarray
            }]
          });
        });
        // poop out table
        /*
      $(document).ready(function() {
      });*/
    </script>
    </header>
    <body> <!-- div where the graph gets put-->
      <div class="hero-unit header" style="width:800px; height:100px; margin-left:auto; margin-right:auto; text-align:center;"><h1>Lab Metrics</h1></div>
      <div class="hero-unit container" id="container" style="width:800px; height:400px; margin-left:auto; margin-right:auto;"></div>
  </body>
  <footer>
  </footer>
</html>

