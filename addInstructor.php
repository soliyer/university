<?php
   
   require("includes/initial.php");

   
  

    

    if(isPost()){
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $depart_name = $_REQUEST['depart_name'];
        $duration = (int)$_REQUEST['working_duration'];
        $course = $_REQUEST['course'];
        $city = $_REQUEST['city'];

        

        addUserInstructor($fname , $lname , $depart_name , $course , $city , $duration);
        redirectTO("instructors.php");


    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php require("includes/main.php") ?>
    <title>Add User(instructor)</title>
</head>
<body>
<?php require("includes/navbar.php") ?>
<div class="container regForm">
    <form method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Your First Name">
        </div>
        <div class="form-group col-md-6">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Your Last Name">
        </div>
    </div>
   
    
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="city">City</label>
        <select id="city" name="city" class="form-control">
            <option selected>Choose...</option>
            <?php 

                foreach($cities as $city){
                    echo "<option >$city[city_name]</option>";
                }
            ?>
            
            
        </select>
        </div>
        <div class="form-group col-md-3">
        <label for="course">Courses</label>
        <select id="course" name="course" class="form-control">
            <option selected>Choose...</option>
            <?php 

                foreach($courses as $course){
                    echo "<option >$course[course_title]</option>";
                }
            ?>
            
            
        </select>
        </div>
        <div class="form-group col-md-4">
        <label for="depart_name">Department</label>
        <select id="depart_name" name="depart_name" class="form-control">
            <option selected>Choose...</option>
            <?php 

                foreach($departments as $depart){
                    echo "<option >$depart[depart_name]</option>";
                }
            ?>
            
            
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="workind_duration">Working Duration</label>
        <input type="text" class="form-control" name="working_duration" id="workind_duration">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
</div>
    
</body>
</html>