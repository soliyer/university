<?php 
    require("includes/initial.php");
    $id = $_GET['id'];
    deleteInstructor($id);
    redirectTO("instructors.php");
   
?>