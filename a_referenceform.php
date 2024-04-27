<?php
 require_once 'config.php';
 if ($_SERVER['REQUEST_METHOD'] == "POST"){
	 
	
	$subname = ($_POST['subname']);
    $link = ($_POST['link']);
$sql = "INSERT INTO reference(link, subname) VALUES( '$link','$subname')"; 
  
	$result = mysqli_query($conn, $sql);
	if ($result)
	{ header("location: a_references.php");
	}
	
}
?>
<html >
<head>
     <title>Add-Reference</title>
     <link href="css/JEE1.css" type="text/css" rel="stylesheet">
</head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
  	
    <div  class="container1">                                <!-- class for making the  box -->
              
	<center><h1>ADD REFERENCE</h1></center>
    <hr>
   
	<!-- Create Form -->
	<form align-items="left" >
    <BR>
		<div class="main">
			<label class="para"> <b> SUBJECT NAME:</b> </label>
            <br>
			<input type="text"   name="subname"  >
           
            <br><br><br>
			
            <label class="para" > <b>URL:</b> </label>
             <br>
			<input type="text" name="link" >
		</div>
    <br><br>

	<center><button class="button1" type="submit" name="submit">ADD REFERENCE</button></center>
	<!-- <button>< bgcolor="red" href="a_mainadmin.php " class="BACK">BACK</a></button> -->
	<button><a bgcolor="red" href="a_mainadmin.php " class="BACK">BACK</a></button>	
    </form>
  </body>
  </html>

 
	