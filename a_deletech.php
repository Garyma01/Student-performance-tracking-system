<?php
require_once 'config.php';
$id = $_GET["cn"];		
$sql = "DELETE FROM subject WHERE id= '$id'";
$data=mysqli_query($conn,$sql);    //PERFORMS A QUERY AGAINST DATABASE
if ($data) {
    
 echo "Deleted successfully";
   
} else {
  echo "Error deleting record: " ;
}
?><button><a bgcolor="red" href="a_mainadmin.php " class="BACK">BACK</a></button>
<style>
.BACK{    
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
}
</style>