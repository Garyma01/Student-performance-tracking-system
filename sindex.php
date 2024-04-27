<?php
include('connection.php');

session_start();

if(isset($_POST['login']))
{ 
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  
  $login = mysqli_query($conn, "select * from user where email = '$email' AND password = '$password' ");
  $user_data = mysqli_fetch_array($login);
  $no = mysqli_num_rows($login);
  
  if($no == 1)
  { 
    $_SESSION['id'] = $user_data['id'];  //we have stored user id in session id
    
    if(isset($_POST['remember']) && $_POST['remember'] == 1)
    {
      setcookie("cemail", $email, time()+(60*60*24));
      setcookie("cpassword", $password, time()+(60*60*24));
    }  
    
    
    echo "<script>window.location.href='redisterr.php'</script>";
  }
  else
  {
    echo "<script>alert('Username or Password is Incorrect!')</script>";

  }
}
?>


<!DOCTYPE html>
<html>
<head> 

	<title> Login Form </title>
<!-- <link rel="stylesheet" href="login.css">
 --><style type="text/css">
body
{
   margin: 0px;
   background-color: lavender;
  /* font-family: `Arial`;*/
}
.login{
width: 400px;          /*width of the form*/
/*margin: 25 0 0 462px; to set the top right bottom left margin from the window
*/padding: 40px;
padding-top: 30px;
padding-left: 75px;
padding-right: 50px;        /*to set space between elements`s border and content*/ 
background: #cccccc;
border-radius: 10px; 
margin-top: 88px;
margin-left: 490px;  
}

h2{
text-align: center;
color: white;
}

label{
color: #08ffdl;
font-size: 18px;
}

#Uname{  /*selects the element with id=Uname*/
width: 376px;
height: 30px;
border: none;
border-radius: 3px;
paddinng-left: 8px; /*sets the left space between the element`s border and content*/
}

#Pass{

   width: 374px;
   height: 30px;
   border: none;
   border-radius: 3px;
   padding-left: 8px;
}

button{
   width: 379px;
   height: 30px;
   /*border: none;*/
   border-radius: 3px;
   padding-right: 7px;
   background-color: green;
   color: white;
}

#cancel{
   width: 100px;
   height: 30px;
   border-radius: 3px;
   color: white;
   margin: 80px 0px 0px 20px ;
   background-color: green;
}
span{
color: black;
font-size: 17px;
}

a{
float: center;
/*background-color: skyblue; */
text-decoration: none;
}

.forgotdiv{
   text-align: right;
}

.avatar{
   margin: 0px 0px 0px 130px;
}

.bgimage{
      width: 100%;
      height: 100%;
      position: absolute;
      z-index: -1;
      opacity: 0.6;
   }
   p{
   	text-align: center;
   }
</style>
</head>

<body>
		<div class="image-content">
	<div class="login">
 <form method="post">		
			<div class="avatar">
				<img src="../admin/amu.png" height="120px" width="120px">
			</div><br>
			<p>Use your registered credentials to login</p>
			<label><b>Email</b></label><br>
		<input type="email" name="email" id="Uname" placeholder=" Enter email ID" required>
		<br><br>

		<label><b>Password</b>	</label><br>
		<input type="Password" name="password" id="Pass" placeholder="Enter Password" required>
		<br><br><br>

		<button type="submit" name="login">
           Sign In
        </button>
		<br>

		<input type="checkbox" id="check" name="remember">
		<label for="remember">Remember me</label>
		<br><br>
	</form>

		<div class="forgotdiv"><a href="forgot-password.php">Forgot Password?</a>
		</div>
		<br>

		<span> Not registered yet? </span> 
		<a href="registerr.php"> 
		Create new account </a>
	</div>
   <a href="../welcome.php">
	    <input type="button" id="cancel" value="Back">		
       </a>
</body>
</html>