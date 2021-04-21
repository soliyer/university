<?php
   
   require("includes/initial.php");

   
  

    

    if(isPost()){
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $city = $_REQUEST['city'];
        $course = $_REQUEST['course'];
        $grade = (int)$_REQUEST['grade'];

        addUser($fname , $lname , $email , $password , $city , $course , $grade);
        redirectTO("index.php");


    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php require("includes/main.php") ?>
    <title>Add User (student)</title>
    <link rel="stylesheet" href="css/style.css">
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
        <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email Address">
        </div>
        <div class="form-group col-md-6">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
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
        <div class="form-group col-md-4">
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
        <div class="form-group col-md-2">
        <label for="grade">Grade</label>
        <input type="text" class="form-control" name="grade" id="grade">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
</div>
    
</body>
</html>


    
