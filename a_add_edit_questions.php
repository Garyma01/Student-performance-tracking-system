
<html >
<head>
    
    <title>UPDATE</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>

<header>
      <a href="#" class="brand">Hello Admin!</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <div class="navigation-items">
          <!-- <a href="../html/index.html">Home</a> -->
          <a href="../html/index.html">Solutions</a>
            <a href="../riya/causes.html">References</a>
            <a href="../jansy/jansy.php">Update Chapters</a>
            
            <a href="../riya/donation.php">Add Questions</a>
            <!-- <a href="../akanksha/volunteer.html">Volunteer</a>
            <a href="../riya/pie1.php">Resources</a>
           -->
        </div>
      </div>
    </header>

<!-- <CENTER>
<h1><B>ADMIN PANEL</B></h1></CENTER> -->

<!-- chatgpt -->
<!-- <header>
  <div class="logo">
    <a href="#">Logo</a>
  </div>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
</header> -->

<!-- riya ka navbar -->
<!-- <nav class="navbar"> -->

 <!-- NAVIGATION MENU -->
 <!-- <ul class="nav-links"> -->
 <!-- USING CHECKBOX HACK -->
 
 <!-- NAVIGATION MENUS -->
 <!-- <div class="menu"> -->
 <!-- <li><a href="solutions.php">Solutions</a></li> -->
 <!-- <li><a href="a_references.php">References</a></li>
 <li>
 <a href="a_details.php">Student's Details</a></li><li>
 <a href="a_mainadmin.php">Update Chapters</a></li> -->
 <!-- <a href="add_edit_questions.php.php">Add Questions</a> -->
 
 <!-- </li>
 <li><a href="a_add_edit_questions.php">Add Questions</a></li>
 
 </div>
 </ul>
 </nav> -->


        <br><br><br><br>
    <br>
    

    <button class="btn" name="add" onclick="fun()">+ Add</button>
    <script>
    function fun(){
        location.replace("a_questionform.php");
    }
    </script>
  



  <!-- <table class="container" width=80%> -->
	<bR><br>	<bR><br>
    <table  cellpadding=2 cellspacing=6 class="table"   style="border: 2px solid rgb(240, 74, 68); width: 100%";>
        <thead class="tablehead" >
            <tr style= "background-color: rgb(240, 74, 68);">
              
            <th>Subject Name</th>
            <th >Question Number</th>
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
        echo" <tr>
        <td >". $row["sub"] . "</td>
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
</table><br><br>
<style>
table {
    border-collapse: collapse;
    width: 100%;
    /* border: 1; */
  }
  
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  tr {
    background-color: rgb(244, 97, 92);
  }
  
  tr:hover {background-color: rgb(240, 74, 68);}</style>
</div>
<button class="btn"><a bgcolor="red" href="a_mainadmin.php " class="BACK">BACK</a></button>
</body>
</html>
   