<html>
<head>
   <title>Solutions</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css">S -->
    </head>
<body ><center>
    <h1    >SOLUTIONS</h1></center>
    <hr>
<?php
include 'config.php';
mysqli_connect("localhost","root");
mysqli_select_db($conn,"student_performance _tracking");
$res=mysqli_query($conn,"SELECT q.id,q.question,    q.solution FROM questions q where sub='dbms'");
while($row=mysqli_fetch_array($res))
{
 ?>
<b>
    <?php echo"Ques: "; echo $row['question']; ?><br><br></b><?php echo "Sol: "; echo $row['solution']; ?>

    <?php
    echo "<br><br><br><bR>";
}
?>
 <a class="BACK" href="nnewsol.php">BACK</a>
 <style>.BACK{                                  /*For back button*/
     position: fixed;                  /* It is positioned relative to the initial containing block */
     bottom: 10px;
     left:10px;
     width: 90px;
     height: 25px;
     font-size: 20px;
     font-family: lato;
     background-color:lightcoral; 
     color: black;
     box-shadow: 2px 2px lightgrey;
     border-radius: 5px;
     text-align: center;
     padding: 5px;
 }*{                                      /*For heading h1*/
    /* padding-top: 15px;
    color:white; */
    background-color: aquamarine;
}
h1
{
color:blueviolet;
}
a{                                       /*For removing undeline from anchor tag*/
    text-decoration: none;
}</style>
</body>    
</html>