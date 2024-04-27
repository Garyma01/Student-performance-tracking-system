


<?php
// $conn=mysqli_connect("localhost","root","","student_performance _tracking");
require_once 'config.php';
$sql="Select count(distinct subname) as number  FROM profile ";
$gire=mysqli_query($conn,$sql);
?>

<html>
  <head>

   <!--Load the loader-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        
    // Load the Visualization API and the piechart package. google.charts is a library
       google.charts.load('current', {'packages':['corechart']});
    // Set a callback to run when the Google Visualization API is loaded.   
      google.charts.setOnLoadCallback(drawChart);

       // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.  
      function drawChart() {

        
        // Create our data table.
        var data = google.visualization.arrayToDataTable([
            ['Subjects','Number'],
<?php
while($result=mysqli_fetch_assoc($gire)){
    echo "['Complete',".$result["number"]."],";
    $result2=20-$result["number"];
    echo "['Incomplete',".$result2."],";
}
?>
        ]);

           // Set chart options
          var options = {
          title: 'Percentage of syllabus completed',
          pieHole:0.4
          };


          // Instantiate and draw our chart
          // The Document method getElementById() returns an Element object representing the element whose id property matches the specified string. 
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
    </script>
  </head>
  <body>
    
      <BR/>  <BR/>
      <div style="width:900px;">
      <BR/>

        <!--Div that will hold the pie chart-->
      <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
