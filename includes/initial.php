<?php 
    $db = new mysqli('localhost', 'soheil_v', "Steam11@@", 'university');
    $coquery = "SELECT * FROM courses";
    $ciquery = "SELECT * FROM cities";
    $dequery = "SELECT * FROM depart";
    $courses = $db->query($coquery);
    $cities = $db->query($ciquery);
    $departments = $db->query($dequery);
    
    function isPost(){
        $method = $_SERVER["REQUEST_METHOD"];
        return $method == "POST";
        
        
    }

  

    function redirectTo($url)
    {
        header("Location: $url");
        exit;
    }
    require("functions.php")
?>