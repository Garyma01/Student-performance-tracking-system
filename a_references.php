
<html >
<head>
    
    <title>References</title>
    
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
    
      
       
    
    

    <button class="btn" name="add" onclick="fun()">+ Add</button>
    <script>
    function fun(){
        location.replace("a_referenceform.php");
    }
    </script>
  
    <table  class="container">
	
    <table class="table" >
        <thead class="tablehead" >
            <tr >
                <th>ID</th>
                <th>SUBJECT</th>
                <th>URL</th>
                <th>Delete</th>
            </tr>
        </thead>

       
        <?php
	require_once "config.php";
    error_reporting(0);
	$sql = "SELECT * FROM reference ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
                // $id = $id + 1;
			
        echo"<tr>
       <td>" . $row['id'] . "</td> 
       <td>" .  $row['subname'] . "</td> 
       <td>" .  $row['link'] . "</td> 
      
      
      <td> 
     <a href='a_deletere.php?id=$row[id]'> Delete </a>
       </td>
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
  
  tr:hover {background-color: coral;}</style>
</div><button><a bgcolor="red" href="a_mainadmin.php " class="BACK">BACK</a></button>
</body>
</html>
   