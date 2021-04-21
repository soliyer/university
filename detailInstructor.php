<?php 
    require("includes/initial.php");

    $id = $_GET['id'];
    $instructor = getInstructor($id);
    
    
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<title>details(instructor)</title>
<?php require("includes/main.php") ?>
<body>
<div class="table-responsive container table-c">
    <table class="table table-bordered">
        <thead>
            <tr>
                
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Course Name</th>
                <th scope="col">City</th>
                <th scope="col">Retired</th>
                
               
            </tr>
        </thead>
        <tbody>
    
        <?php 
           if($instructor["is_retired"] == 1){
               $retired = "yes";
           }else{
               $retired = "no";
           }
                
                echo 

                    "
                
                        <tr>
                            
                            <td> $instructor[instructor_fname] $instructor[instructor_lname] </td>
                            <td> $instructor[depart_name] </td>
                            <td> $instructor[course_name]</td>
                            <td> $instructor[instructor_city]</td>
                            <td> $retired </td>
                            
                            
                            
                        </tr>
                        
                    ";
                
            
        ?>
        </tbody>
    </table>
    </div>
</body>
</html>