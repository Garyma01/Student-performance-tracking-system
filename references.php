
<html >
<head>
    
    <title>Project</title>
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>
<CENTER>
        <br><br>
<table  class="container">
	
    <table class="table" >
        <thead class="tablehead" >
            <tr >
                <th>SERIAL NUMBER</th>
                <th>SUBJECT NAME</th>
                <th>URL</th>
               
            </tr>
        </thead>

       
        <?php
	require_once "config.php";
    error_reporting(0);
	$sql = "SELECT * FROM reference ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
            
			
        echo"<tr>
       <td>" . $row['id'] . "</td> 
       <td>" .  $row['subname'] . "</td> 
       <td>" .  $row['link'] . "</td> 
      
      
     
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
    color:black;
  }
  
  tr:hover {background-color: coral;}</style>
</div><button><a bgcolor="red" href="mainuser.php " class="BACK">BACK</a></button>
</body>
</html>
   