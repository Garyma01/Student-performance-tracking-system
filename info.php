<?php
 require_once 'config.php';

   
 if ($_SERVER['REQUEST_METHOD'] == "POST"){
	$name = ($_POST['name']); 
	$email = ($_POST['email']);
  $year = ($_POST['year']);
  $sem= ($_POST['sem']);
  $password=($_POST['password']);


$sql = "INSERT INTO user(name,  email, year,sem,password) VALUES( '$name','$email','$year','$sem','$password')"; 
  
	$result = mysqli_query($conn, $sql);
	if ($result)
	{ header("location: index.php");
	}

}
?>
	


<html >
<head>
     <title>Sign Up</title>
     <link href="css/login.css" type="text/css" rel="stylesheet">
</head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">

   
	<!-- Create Form -->
	<form  >
    <div  class="container">                                <!-- class for making the box -->
        
      
    <BR>
		<div class="main">
    <label class="para"> <b>NAME:</b> </label>        
                  <br>
            <input type="text" placeholder=" Name" name="name">
            <br> <br> 
        
  

            <label class="para"> <b>  EMAIL ID:</b> </label>        
                  <br>
            <input type="email" placeholder="Email-id" name="email">
            <br> <br> 
            
            <label class="para"> <b>  PASSWORD:</b> </label>        
                  <br>
            <input type="text" placeholder="" name="password">
            <br> <br> 

            <label class="para"> <b>YEAR:</b> </label>        
                  <br>
            <input type="text" placeholder=" Enter your year" name="year">
            <br> <br> 

            <label class="para"> <b>SEM:</b> </label>        
                  <br>
            <input type="text" placeholder=" Enter your semester" name="sem">
            <br> <br> 

       

          
		</div>
    <br><br>

	<center><button class="button1" type="submit" name="submit"><b>SIGN UP </b></button></center>
		
    </form>
  </body>
  </html>

</form>
	