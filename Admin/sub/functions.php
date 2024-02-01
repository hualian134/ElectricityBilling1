<?php
function getAll($table){
    global $con;
    $sql="Select * from $table ";
  return mysqli_query($con,$sql);
         
};      

?>