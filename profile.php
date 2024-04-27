<?php
include('config.php');

if(isset($_POST['formsubmit']))
    { 
      $name = $_POST['name'];
      $sem = $_POST['sem'];
      $email = $_POST['email'];
    //  $id=$_POST['id'];
        $q1=mysqli_query($conn,"update user set name='$name', sem='$sem',email='$email'where id='$id'") or die(mysqli_error($conn));


        if($q1>0)
        { 
          echo "<script>alert('Profile Updated Successfully!')</script>";
        
      }
      else
      {
        echo "<script>alert('Something Went Wrong!')</script>";
     
      }
    }

$fetch=mysqli_query($conn,"select * from user where id='$id'") or die(mysqli_error());
while($row=mysqli_fetch_assoc($fetch))

{
      $name = $row['name'];
      $sem = $row['sem'];
      $email = $row['email'];


}
?>

  <!--page content -->
  <div class="content-wrapper">
    <!--Heading-->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">My Profile</li>
            </ol>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">

          <div class="card-header">
            <div class="card-tools">
            </div>
            <center><img src="../adminlogo.jpg" height="120px" width="120px">
              <h4><?php echo $name;?></h4></center>
          </div>
          <!-- /.card-header -->

           <form method="POST" enctype="multipart/form-data">               
          <div class="card-body">
            <div class="row">

              
             
              <div class="col-md-6">
                <div class="form-group">
                  <label>Semester <span class="text-danger">*</span></label>
                  <input class="form-control" maxlength="10" type="text" placeholder="Enter Contact No"  name="phone" value="<?php echo $sem;?>" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Email ID <span class="text-danger">*</span></label>
                  <input class="form-control" type="email" placeholder="Enter Email ID"  name="email" value="<?php echo $email;?>" required>
                </div>
              </div>

              <button style="margin: 0 auto;" type="submit" class="btn btn-primary" name="formsubmit">Change</button>

            </div>
          </div>
        </div>
        <!-- card -->
        </form>
               
      </div>
      <!-- container-fluid -->
    </section>
  </div>
  <!-- content-wrapper -->
  
    
