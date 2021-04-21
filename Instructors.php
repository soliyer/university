<?php 
    require("includes/initial.php");
    
    $users = getInstructorList();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Instructor</title>
   <?php 
        require("includes/main.php");
    
   ?>
</head>
<body>
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
        foreach($users as $instructor){
            
            echo 

                "
            
                    <tr>
                        <th scope = 'row'>$i</th>
                        <td> $instructor[instructor_fname] $instructor[instructor_lname]</td>
                        <td><a href='detailInstructor.php?id=$instructor[instructor_id]'> Click Here </a></td>
                        
                        <td>
                            <div class=btn-items>
                                <a class='btn btn-warning' href='editinstructors.php?id=$instructor[instructor_id]'> Edit </a>
                                <a class='btn btn-danger' onclick = 'return confirm(\"You are about to delete $instructor[instructor_fname] $instructor[instructor_lname]  do you want to proceed ?\");' href='deleteinstructors.php?id=$instructor[instructor_id]'> Delete </a> 
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
</body>
</html>