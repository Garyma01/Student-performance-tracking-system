<?php
//
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: Customer Page.php");
    exit ;
}
require_once "config.php";

$email = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['email'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter email + password";
    }
    else{
        $username = trim($_POST['email']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, email, password FROM user WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_email);
    $param_email = $email;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(!password_verify($password, $hashed_password)){
                          
                           echo  '<script> alert("username or password is incorrect."); </script>'
                           ;
                            
                        }
                        else{
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["email"] = $email;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: info.php");
                            
                        
                        }}
                    }

                }

    }}    





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Log in page</title>
    <link href="css/login.css" rel="stylesheet" type="text/css">
</head>



<body>
    <div id="form">
   <h1>Log in</h1>
   <hr>
    <form  method="post">
   
    <br>
    <div>
    <label>Username:</label><input type="email" name="email" placeholder="Email Id">
</div> <div>
     <br>
    <label>Password:</label><input type="password" name="password" placeholder="Password">
</div> 
<br>
    <div>
<br>
<a href="http://127.0.0.1:5500/user.html"> <button input type="submit"   >Log in</button> </a>

</div>

<h3><a href="recover_psw.php">Forgotten password? </a></h3>
<div> 
<h3><a href="register.php">Create new account</a></h3>
<hr>
<h3><a href="Log_admin.php">Log in as Admin</a></h3>
<h3><a href="Log_employee.php">Log in as Employee</a></h3>

</div>
</form>
</div>
</body>
</html>