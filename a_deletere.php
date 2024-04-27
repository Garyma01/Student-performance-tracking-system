<?php
require_once 'config.php';
// sql to delete a reference
$id = $_GET["id"];		
$sql = "DELETE FROM reference WHERE id= '$id'";
$data=mysqli_query($conn,$sql);
if ($data) {
    
 echo "Deleted successfully";
   
} else {
  echo "Error deleting record: " ;
}




?><a bgcolor="red" href="a_references.php " class="BACK">BACK</a></button>
<style>.BACK{    
    position: fixed;                  /* It is positioned relative to the initial containing block */
    bottom: 10px;
    left:10px;
    width: 90px;
    height: 35px;
    font-size: 20px;
    font-family: lato;
    background-color:rgb(236, 115, 115); 
    color: black;
    box-shadow: 2px 2px lightgrey;
    border-radius: 5px;
    text-align: center;
    padding: 5px;                              /*For back button*/
}</style>