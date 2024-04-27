
<html >
<head>
    
    <title>Details</title>
    <!-- <link rel="stylesheet" type="text/css" href="JEE.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="JEE1.css"> -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>
<CENTER>
<h1><B>ADMIN PANEL</B></h1></CENTER><nav class="navbar">

 <!-- NAVIGATION MENU -->
 <ul class="nav-links">
 <!-- USING CHECKBOX HACK -->
 
 <!-- NAVIGATION MENUS -->
 <div class="menu">
 <!-- <li><a href="solutions.php">Solutions</a></li> -->
 <li><a href="a_references.php">References</a></li>
 <li>
 <a href="a_details.php">Student's Details</a></li><li>
 <a href="a_mainadmin.php">Update Chapters</a></li>
 <!-- <a href="add_edit_questions.php.php">Add Questions</a> -->
 
 </li>
 <li><a href="a_add_edit_questions.php">Add Questions</a></li>
 
 </div>
 </ul>
 </nav>





        <br><br>
    
      
       
    
    

  
  <table class="container">
	
    <table class="table">
        <thead class="tablehead" >
            <tr >
                <th>NAME</th>
            
                <th>SEM</th>
               <th>E-MAIL</th>
            </tr>
        </thead>
        <tbody>
       
      

   <?php
	require_once "config.php";
    error_reporting(0);
	$sql = "SELECT * FROM user ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result))
             {
                
			
        echo"<tr >
       <td>" . $row['name'] . "</td> 
     
       <td>" .  $row['sem'] . "</td> 
       
       <td>" .  $row['email'] . "</td> 
     
    </tr>";
    

	
            }}
 else{
	echo "something went wrong.";
}
		


?> 

       
      



</table><br><br><style>
table {
    border-collapse: collapse;
    width: 100%;
  }
  
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  
  tr:hover {background-color: aquamarine;}</style>
</div><button><a bgcolor="red" href="a_mainadmin.php " class="BACK">BACK</a></button>
</body>
</html>
   