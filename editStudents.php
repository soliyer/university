<?php 
    

    $id = $_GET['id'];

    require("includes/initial.php");

  

    $user = getUser($id);


 if(isPost()){
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    
    $city = $_REQUEST['city'];
    $course = $_REQUEST['course'];
    $grade = (int)$_REQUEST['grade'];

    updateUser($id, $fname , $lname , $email  , $city , $course , $grade);
    redirectTO("index.php");


}
   

   
   
    
    

   
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="style.css">
   <?php require("includes/main.php") ?>
   <title>Update User(student)</title>
</head>
<body>
<?php require("includes/navbar.php") ?>
<div class="container regForm">
    <form method="post">
    <div class="form-row">
        <div class="form-group col-md-4">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" value="<?php echo $user["student_fname"]; ?>" name="fname" id="fname" placeholder="Enter Your First Name">
        </div>
        <div class="form-group col-md-4">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" value="<?php echo $user["student_lname"]; ?>" name="lname" id="lname" placeholder="Enter Your Last Name">
        </div>
        <div class="form-group col-md-4">
        <label for="email">Email</label>
        <input type="email" class="form-control"  value="<?php echo $user["student_email"]; ?>" name="email" id="email" placeholder="Enter Your Email Address">
        </div>
    </div>
    
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="city">City</label>
        <select id="city" name="city" class="form-control">
            <?php 
                
                echo "<option selected>Choose ...</option>";

                foreach($cities as $city){
                    echo "<option>$city[city_name]</option>";
                }
            ?>
            
            
        </select>
        </div>
        <div class="form-group col-md-4">
        <label for="course">Courses</label>
        <select id="course" name="course" class="form-control">
            <?php 
                echo "<option selected>$user[course_name]</option>";
                
                foreach($courses as $course){
                    echo "<option >$course[course_title]</option>";
                }
            ?>
            
            
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="grade">Grade</label>
        <input type="text" class="form-control" value="<?php echo $user["student_grade"]; ?>" name="grade" id="grade">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>