
<html >
<head>
    
    <title>UPDATE</title>

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
    
      
       
    
    

    <button class="btn" name="add" onclick="fun()">+ Add</button>
    <script>
    function fun(){
        location.replace("a_questionform.php");
    }
    </script>
  

<input type="text" name="search" id="myinput" placeholder="names" onkeyup="searchFun()">

  <table class="container" width=100% id="myTable">
	<bR><br>	<bR><br>
    <table cellpadding=2 cellspacing=6 id="myTable">
        <thead class="tablehead" >
            <tr >
              
            <th>Subject Name</th>
            <th>Question Number</th>
                <th>Question</th>
                <th>Option 1</th>
                <th>Option 2</th>
                <th>Option 3</th>
                <th>Option 4</th>
                <th>Answer</th>
                <th>Solution</th>
               
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
       
      

   <?php
	require_once "config.php";
    error_reporting(0);


	$sql = "SELECT * FROM questions";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
                $id = $id + 1;
			$ques=$id;
        echo"<tr >
        <td>". $row["sub"] . "</td>
        <td>". $row["id"] . "</td>
        <td>" . $row["question"] . "</td>
        <td>" .  $row["opt1"] . "</td>
        <td>" .  $row["opt2"] . "</td>
        <td>" . $row["opt3"] . "</td>
        <td>" .  $row["opt4"] . "</td>
        <td>" .  $row["ans"] . "</td>
       
        <td>" .  $row['solution'] . "</td>
        
        
       
      
      <td> 
     <a href='a_deletequ.php?qn=$row[id]'> Delete </a>
       </td>
    </tr>";
    

	
}}

	

?> 
<?php
$search = $_GET['search'];

//query to search for data
$sql = "SELECT * FROM questions WHERE question LIKE '%$search%' OR solution LIKE '%$search%'";

$result = mysqli_query($conn, $sql);

//check if there are any results
if (mysqli_num_rows($result) > 0) {
  //display results in a table
  echo '<table>';
  echo '<tr><th>Name</th><th>Email</th></tr>';
  while($row = mysqli_fetch_assoc($result)) {
    echo '<tr><td>'.$row['question'].'</td><td>'.$row['solution'].'</td></tr>';
  }
  echo '</table>';
} else {
  echo 'No results found.';
}
?>
</table><br><br>
<!-- <script>
 const searchFun= () => {
    let filter= document.getElementById('myinput').value.toUpperCase();
    let myTable=document.getElementById('myTable');
    let tr=myTable.getElementsByTagName('tr');
    for(var i=0;i<tr.length;i++){
        let td=tr[i].getElementsByTagName('td')[0];
        if(td){
            let textvalue=td.textContent || td.innerHTML;
            if(textvalue.toUpperCase().indexOf(filter)>-1){
                tr[i].style.display="";
            }
            else{
                tr[i].styledisplay="none";
            }
        }
    }
}
</script> -->
<style>
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
   

<!-- include ("footer.php"); -->