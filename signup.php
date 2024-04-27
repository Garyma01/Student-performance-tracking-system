<?php
require_once "config.php";
// error_reporting(0);
$username = $password = $confirm_password  = $full_name = $year = $sem = "";
$username_err = $password_err = $confirm_password_err = $name_err = $sem_err = $year_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM user WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {mysqli_stmt_bind_param($stmt, "s", $param_username);

          // Set the value of param username
          $param_username = trim($_POST['username']);

          // Try to execute this statement
          if(mysqli_stmt_execute($stmt)){
              mysqli_stmt_store_result($stmt);
              if(mysqli_stmt_num_rows($stmt) == 1)
              {
                  $username_err = "This username already exist."; 
                  echo "<script> alert('This username already exists.');
                  window.location.replace('signin.php'); </script>";
              }
              else{
                  $username = trim($_POST['username']);
              }
          }
          else{
              echo "Something went wrong";
          }
        }
      }
  
      mysqli_stmt_close($stmt);
  
  
  // Check for password
  if(empty(trim($_POST['password']))){
      $password_err = "Password cannot be blank";
  }
  elseif(strlen(trim($_POST['password'])) < 5){
      $password_err = "Password cannot be less than 5 characters";
      echo "<script> alert('Password cannot be less than 5 characters.'); 
     </script> ";
  }
  else{
      $password = trim($_POST['password']);
  }
  
  // Check for confirm password field
  if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
    echo "<script> alert('passwords should match.'); </script>";
}
//name check
if(empty(trim($_POST['full_name']))){
  $name_err = "Name cannot be blank";
}
else{
  $full_name = trim($_POST['full_name']);
}
//role name check

if(empty(trim($_POST['sem']))){
    $sem_err = " semester cannot be blank";
  }else{
    $sem = trim($_POST['sem']);
  }
  if(empty(trim($_POST['year']))){
    $year_err = " year cannot be blank";
  }else{
    $year = trim($_POST['year']);
  }
 

// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($year_err) && empty($password_err) && empty($confirm_password_err) && empty($name_err)&& empty($sem_err) )
{
    $sql = "INSERT INTO user (username, year,email,sem,password) VALUES (?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_year, $param_email, $param_sem, $param_password);

        // Set these parameters
        $param_email = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        $param_username = $full_name;
        $param_year =  $year;
        $param_sem = $sem; 
       
// Try to execute the query
if (mysqli_stmt_execute($stmt)){
// {  if( $role_name == "customer"){
//     header("location:login page.php");
// }
// elseif( $role_name == "employee"){
// header("location: Log_employee.php");
//     }

//     else{
      header("location:signin.php");
    // }
}
else{
    echo "Something went wrong... cannot redirect!";
}
}
mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}






?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style1.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/register.css" rel="stylesheet" type="text/css">
     <scrit src="js/form.js"></script>
   </head>
    
<body >
  
    <div id="form">
       
            <h1>Create Account</h1>
      <form name="form1" method="post">
        <div id="consent">
          <div ><br>
            <label>Email</label>
            <input type="email"  name="username" placeholder="user@abc.com" required>
           
          </div>
          <div ><br>
            <label> Full Name</label>
            <input type="text" name="full_name" placeholder="Enter your name" required>
          </div>
          <!-- <div><br>
           <label>Semester</label><br><br>
           <label class="container">Customer
  <input type="radio" name="role_name" value="customer">
  <span class="checkmark"></span>
</label>
<label class="container">Employee
  <input type="radio" name="role_name" value="employee">
  <span class="checkmark"></span>
</label>
<label class="container">Admin
  <input type="radio" name="role_name" value="admin">
  <span class="checkmark"></span>
</label>
  -->
          </div>
          <!-- <div ><br>
            <label>User Id (If Employee)</label>
            <input type="text" name="userId" placeholder="Enter your Id" >
          </div>
          <div><br> -->
         
          <div ><br>
            <label> Password</label>
            <input type="password" name="password" placeholder="Enter password" required>
          </div>
          <div ><br>
            <label> Confirm Password</label>
            <input type="text" name="confirm_password" placeholder="confirm password" required>
          </div>
          <div ><br>
            <label> Semester</label>
            <input type="password" name="sem" placeholder="Enter password" required>
          </div>
          <div ><br>
            <label> Year</label>
            <input type="password" name="year" placeholder="Enter password" required>
          </div>
        </div>
        
       
          <div>
            <br>
            <!-- <a href="main page.html"> -->
            <button  type="submit" onclick="phonenumber(document.form1.phone)">Register</button>
        </div>
          <div>
            <h3>Already have an account? <a href="login page.php">Login now</a></h3>
          </div>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
