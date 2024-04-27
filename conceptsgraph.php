
<h1 >Examine Yourself and get better</h1><?php
require_once 'config.php';
$sql="SELECT COUNT(DISTINCT subname) as number  FROM profile where concept='weak' ";
$sql2="SELECT COUNT(DISTINCT subname) as number  FROM profile where concept='average' ";
$sql3="SELECT COUNT(DISTINCT subname) as number  FROM profile where concept='strong' ";
$sql4="SELECT DISTINCT subname  FROM profile where concept='weak' ";
$sql5="SELECT DISTINCT subname  FROM profile where concept='average' ";
$sql6="SELECT DISTINCT subname FROM profile where concept='strong' ";
$gire=mysqli_query($conn,$sql);
$gire2=mysqli_query($conn,$sql2);
$gire3=mysqli_query($conn,$sql3);
$gire4=mysqli_query($conn,$sql4);
$gire5=mysqli_query($conn,$sql5);
$gire6=mysqli_query($conn,$sql6);
?>
<html>
  <head>
 <!--Load the loader-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
       
    //    <link rel="stylesheet" type="text/css" href="css/concepts.css">
  // Load the Visualization API and the piechart package. google.charts is a library
     google.charts.load('current', {'packages':['corechart']});
  // Set a callback to run when the Google Visualization API is loaded.
     google.charts.setOnLoadCallback(drawChart);
      
      // Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.  
     function drawChart() {

     
        // Create our data table.   
      var data = google.visualization.arrayToDataTable([
            ['Concepts','Number'],
<?php
while($result=mysqli_fetch_assoc($gire)){
    echo "['Weak',".$result["number"]."],";
}
?>
   
    <?php
    while($result2=mysqli_fetch_assoc($gire2)){
    echo "['Average',".$result2["number"]."],";
}
?>
<?php
while($result3=mysqli_fetch_assoc($gire3)){
echo "['Strong',".$result3["number"]."],";
}
?>
        ]);


           // Set chart options
          var options = {
          title: 'Concepts',
           };


           // Instantiate and draw our chart
        //    The Document method getElementById() returns an Element object representing the element whose id property matches the specified string. 
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

     <table align="center" border="1" width="100%">
         <tr bgcolor="blue"><th> Weak Subjects</th>
         <th> Average Subjects </th>
         <th> Strong  Subjects</th></tr>
         <tr > <td>
       <?php while($result4=mysqli_fetch_array($gire4)){
echo $result4['subname'];?> <br>
<?php } ?></td>

<td>
       <?php while($result5=mysqli_fetch_array($gire5)){
echo $result5['subname'];?> <br>
<?php } ?></td>

<td>
       <?php while($result6=mysqli_fetch_array($gire6)){
echo $result6['subname'];?> <br>
<?php } ?></td>
</tr>
       </table>
<style>table {
    border-collapse: collapse;
    width: 100%;
  }
  /* *{
    background-color: rgba(46, 107, 198, 0.731);
  } */
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  
  tr:hover {background-color: coral;
    
  }
  h1{
  color:white;font-weight: bold;
  align-self: center;}</style>
  </body>
</html>