<?php
require_once 'config.php';
// sql to delete a question
$id = $_GET["qn"];		
$sql = "DELETE FROM questions WHERE id= '$id'";
$data=mysqli_query($conn,$sql);
if ($data) {
    
 echo "Deleted successfully";
   
} else {
  echo "Error deleting record: " ;
}




?>
<html>

</div><button><a bgcolor="red" href="a_add_edit_questions.php " class="BACK">BACK</a></button>
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
</html>