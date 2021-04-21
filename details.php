<?php 
    require("includes/initial.php");

    $id = $_GET['id'];
    $student = getUser($id);
    
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<title>details(student)</title>
<?php require("includes/main.php") ?>
<body>
<div class="table-responsive container table-c">
    <table class="table table-bordered">
        <thead>
            <tr>
                
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">City</th>
                <th scope="col">Grade</th>
                <th scope="col">Course Name</th>
                <th scope="col">Honor</th>
               
            </tr>
        </thead>
        <tbody>
    
        <?php 
           if($student["is_honor"] == 1){
               $honor = "yes";
           }else{
               $honor = "no";
           }
                
                echo 

                    "
                
                        <tr>
                            
                            <td> $student[student_fname]  $student[student_lname]</td>
                            <td> $student[student_email] </td>
                            <td> $student[student_city]</td>
                            <td> $student[student_grade]</td>
                            <td> $student[course_name]</td>
                            <td> $honor </td>
                            
                            
                            
                        </tr>
                        
                    ";
                
            
        ?>
        </tbody>
    </table>
    </div>
</body>
</html>