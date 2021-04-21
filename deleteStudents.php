<?php 
    require("includes/initial.php");
    $id = $_GET['id'];
    deleteUser($id);
    redirectTO("index.php");
   
?>