<?php

    require("includes/initial.php");

    $users = getUserList();
    
    
   
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("includes/main.php") ?>
    <title>Students</title>
</head>
<body>
    
        <?php 
            require ("includes/navbar.php")
        ?>
    
    
    <div class="table-responsive container table-c">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
    
        <?php 
            $i = 1;
            foreach($users as $student){
                
                echo 

                    "
                
                        <tr>
                            <th scope = 'row'>$i</th>
                            <td> $student[student_fname] $student[student_lname]</td>
                            <td><a href='details.php?id=$student[student_id]'> Click Here </a></td>
                            
                            <td>
                                <div class=btn-items>
                                    <a class='btn btn-warning' href='editStudents.php?id=$student[student_id]'> Edit </a>
                                    <a class='btn btn-danger' onclick = 'return confirm(\"You are about to delete $student[student_fname] $student[student_lname]  do you want to proceed ?\");' href='deleteStudents.php?id=$student[student_id]'> Delete </a> 
                                </div>
                            </td>
                        </tr>
                        
                    ";
                
                $i++;
            }
        ?>
        </tbody>
    </table>
    </div>
   
</body>
</html>