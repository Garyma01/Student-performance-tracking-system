<?php
 require_once 'config.php';
 if ($_SERVER['REQUEST_METHOD'] == "POST"){
	 
	$id = ($_POST['id']);
	$subname = ($_POST['subname']);
$sql = "INSERT INTO subject(id, subname) VALUES( '$id','$subname')"; 
  
	$result = mysqli_query($conn, $sql);
	if ($result)
	{ header("location: a_add_edit_questions.php");
	}
	
}
?>
<html >
<head>
     <title>Add-Subject</title>
     <link href="css/JEE1.css" type="text/css" rel="stylesheet">
</head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
  	
    <div  class="container1">                                <!-- class for making the  box -->
              
	<center><h1>ADD CHAPTER</h1></center>
    <hr>
   
	<!-- Create Form -->
	<form align-items="left" >
    <BR>
		<div class="main">
			<label class="para"  > <b>CHAPTER NUMBER:</b> </label>
            <br>
			<input type="text"   name="id"  >
           
            <br><br><br>
			
            <label class="para" > <b>CHAPTER NAME:</b> </label>
             <br>
			<input type="text" name="subname" >
		</div>
    <br><br>

	<center><button class="button1" type="submit" name="submit">ADD CHAPTER</button></center>
	<!-- <button>< bgcolor="red" href="a_mainadmin.php " class="BACK">BACK</a></button> -->
	<button><a bgcolor="red" href="a_mainadmin.php " class="BACK">BACK</a></button>	
    </form>
  </body>
  </html>

 
	