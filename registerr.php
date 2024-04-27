<?php
include('connection.php');

session_start();

if(isset($_POST['formsubmit']))
    { 
    	// $name = $_POST['name'];
    	// $email = $_POST['email'];
    	// $invalidfaculty=mysqli_query($conn ,"select * from students where faculty_no='$faculty_no'") or die(mysqli_error());
    	// $invalidenroll=mysqli_query($conn ,"select * from students where enrollment_no='$enrollment_no'") or die(mysqli_error());

    	// if(mysqli_num_rows($invalidfaculty)>0){
    	// 	echo "<script>alert('Student with this Faculty No already Exists!')</script>";
    	// }elseif(mysqli_num_rows($invalidenroll)>0){
    	// 	echo "<script>alert('Student with this Enrollment No already Exists!')</script>";
    	// }else{
		      $sem= $_POST['sem'];
		    //   $course=implode(', ',$_POST['course']);
		      $name = $_POST['name'];
		      $password = md5($_POST['password']);
		      
		    //   $phone = $_POST['phone'];
		      $email = $_POST['email'];
		    //   $branch = $_POST['branch'];
		      $year = $_POST['year'];
		      
		     
		       $q1=mysqli_query($conn ,"insert into user (sem,name,password,email,year) values ('$sem','$name','$password','$email','$year')") or die(mysqli_error());
		  
		        if($q1>0)
		        { 
		          echo "<script>alert('Student Added Successfully!')</script>";
		        
		      }
		      else
		      {
		        echo "<script>alert('Something Went Wrong!')</script>";
		     
		      }
		  }


  
			
?>



<!DOCTYPE html>
	<html>
	<head>
		<title>Registration</title>
		<!-- BoxIcons CDN link -->
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">



<style type="text/css">
	body{
	margin: 0px;
background-color: lavender;
font-family: 'Poppins', sans-serif;
}
/*.bgimage{
   background-image: url("city.jpg");
   height: 700px;
   width: 100%;
}*/

h2{
	color: navy;
   text-align: center;
}

.form{
	margin: 5px 0px 0px 500px;
    width: 400px;
    padding: 40px;  
    padding-top: 30px;
    padding-left: 65px;
    padding-right: 65px; 
    padding-bottom: 15px;  /*to set space between elements`s border and content*/ 
    background: #cccccc;

    border-radius: 10px;  
  
}

.avatar{
	margin: 28 0 0 180px;
}

label{
	color: #000033; /*fontsize and color of username, and faculty number*/
   font-size: 17px;
}

label{
color: #08ffdl; 
font-size: 14px;
}
#Uname
{
	width: 390px;
    height: 28px;
    border: none;
    border-radius: 3px;
    paddinng-left: 8px;
}
#Pass
{
	width: 390px;
    height: 28px;
    border: none;
    border-radius: 3px;
    paddinng-left: 8px;
}
#Full
{
	width: 390px;
    height: 28px;
    border: none;
    border-radius: 3px;
    paddinng-left: 8px;
}
#gender{
	font-size: 15px;
	text-align: left;
}
#Faculty
{
	width: 390px;
    height: 28px;
    border: none;
    border-radius: 3px;
    paddinng-left: 8px;
}
#Enroll
{
	width: 390px;
    height: 28px;
    border: none;
    border-radius: 3px;
    paddinng-left: 8px;
}
#Bran 
{
	width: 390px;
    height: 28px;
    border: none;
    border-radius: 3px;
    paddinng-left: 8px;
}
#Cont
{
	width: 390px;
    height: 28px;
    border: none;
    border-radius: 3px;
    paddinng-left: 8px;
}
#ID
{
	width: 390px;
    height: 28px;
    border: none;
    border-radius: 3px;
    paddinng-left: 8px;
}
button
{
   width: 100px;
   height: 30px;
   border-radius: 5px;
   color: white;
   background-color: blue;
   cursor: pointer;
   margin-top: 10px;
   margin-left: 150px;
   margin: auto;
}
#reset
{
	width: 100px;
	height: 30px;
	border-radius: 5px;
	background-color: dimgray;
	color: white;
	margin-top: 90px;

}

select{
	font-size: 15px;
	height: 30px;
	width: 390px;
	border: none;
	border-radius: 2px;
}
/*.image-content{
   background-image: url("study.jpg");
   height: 700px;
   width: 100%;*/

   .bgimage{
   	width: 100%;
   	height: 100%;
   	position: absolute;
   	z-index: -1;
   	opacity: 0.6;
   }

.avatar{
   margin: 0px 0px 0px 145px;
}

#back{
	width: 100px;
   height: 30px;
   border-radius: 3px;
   color: white;
   margin-top: 50px;
   background-color: red;
}

input{
	font-size: 15px;
/*	width: 200px;
*/}

	.formerror{
		color: red;
	}

</style>


<!-- <script type="text/javascript">
	function validateform(){
		var semester= document.myform.semester.value;
		if(NaN(semester) || x<1 || x>10){
			alert("Semester should be a number between 1 and 8 !")
			return false;
		}
	
	 }
</script> -->
	</head>
	<body>
		

<!-- 		<div class="image-content">-->
	<!-- <img class="bgimage" src="../lapy.png" alt="image">  -->
		<h2>Create account </h2>
		<div class="form">
			
	<form method="post" action="registerr.php" name="myform" onsubmit="return validateform()">
		<br>
		<label><b>Full Name</b></label>
     <input type="text" name="name" id="Uname" placeholder="Enter your full name"> 
		<br><br>
		
		<label><b>Semester</b></label>
		<input type="text" name="sem" id="Full" maxlength="1" placeholder="Enter your Semester" required> 
		<br><br>
		 <label><b>Year</b></label>
		<input type="text" name="year" id="Faculty" maxlength="10" minlength="10"  placeholder="Faculty Number" required>
		<br><br> 
		<!-- <label><b>Enrollment number</b></label>
		<input type="text" name="enrollment_no" id="Enroll" placeholder="Enrollment Number" required> 
		<br><br> --> 
		
     <!-- <label><b>Branch</b></label>
		 <select name="branch" required>

              
                </select> <br><br> -->

		<!-- <label><b>Contact number</b></label>
		<input type="text" name="phone" id="Cont" minlength="10" maxlength="12" placeholder="Enter your Contact Number" required>
		<br><br> -->
		<label><b>Email</b></label>
		<input type="email" name="email" id="ID" placeholder="Enter your Email ID" required>
		<br><br>
		<label><b>Password</b></label>
		<input type="password" name="password" id="ID"  minlength="6"  placeholder="Enter your password" required>
		<br><br>
		<!-- <label><b>Gender</b></label>		
		<input type="radio" name="gender"  value="male" required> Male
        <input type="radio" name="gender" value="female" required> Female
        <input type="radio" name="gender" value="other" required> Other <br><br> -->

        
<!--   		<input type="button" name="reset" id="reset" value="Reset">
 -->
<br><center>
		<button style="margin: auto;" type="submit" name="formsubmit">Register</button>

		<p>  Already have an account?<!-- <p class="mb-1"> -->
        <a href="sindex.php">Login</a>
      </p></center>

	</form>
	</div>
	</div>
	</body>

	</html>