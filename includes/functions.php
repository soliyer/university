<?php 
    $db = new mysqli('localhost', 'soheil_v', "Steam11@@", 'university');
    function getUserList()
{
    global $db;
    $query = "SELECT student_id, student_fname, student_lname , student_email , student_grade , course_name , student_city FROM student";
    $result = $db->query($query);
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
    }
    return $result->fetch_all(MYSQLI_ASSOC);
}
function getInstructorList()
{
    global $db;
    $query = "SELECT * FROM instructor";
    $result = $db->query($query);
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
    }
    return $result->fetch_all(MYSQLI_ASSOC);
}

    function addUser($fname , $lname , $email , $password , $city , $course , $grade){
        global $db;
        
        if($grade >=17){
            $honor = 1;
        }else{
            $honor = 0;
        }
        $query = "INSERT INTO student SET student_fname = '$fname' , student_lname='$lname' ,student_email = '$email' ,
        student_password = '$password' ,student_city = '$city' ,course_name = '$course',
        student_grade = '$grade' , is_honor = $honor ";
        $result = $db->query($query);
        if (false === $result) {
            echo $query . "<br>";
            echo $db->error;
            exit;
        }
        
    }

    function getUser($id){
        global $db;
        

        $query = "SELECT student_id, student_fname, student_lname, student_email , student_city,
        course_name , student_grade , is_honor FROM student WHERE student_id = $id";
        $result = $db->query($query);
        
        if (false === $result) {
            echo $query . "<br>";
            echo $db->error;
            exit;
    }
    return $result->fetch_assoc();
}

function getInstructor($id){
    global $db;
    

    $query = "SELECT * FROM instructor WHERE instructor_id = $id";
    $result = $db->query($query);
    
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
}
return $result->fetch_assoc();
}


function updateUser($student_id, $fname , $lname , $email  , $city , $course , $grade){
    global $db;
    
    if($grade >=17){
        $honor = 1;
    }else{
        $honor = 0;
    }
    $query = "UPDATE student SET student_fname = '$fname' , student_lname='$lname' ,student_email = '$email',
    student_city = '$city' ,course_name = '$course',
    student_grade = '$grade' , is_honor = $honor WHERE student_id = $student_id ";
    $result = $db->query($query);
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
    }
    

}
function updateInstructor( $id,$fname , $lname , $depart_name , $course , $city , $duration){
    global $db;
    
    if($duration >=30){
        $time = 1;
    }else{
        $time = 0;
    }
    $query = "UPDATE instructor SET instructor_fname = '$fname' , instructor_lname='$lname' ,
    instructor_city = '$city' ,course_name = '$course', depart_name = '$depart_name'
    , is_retired = $time WHERE instructor_id = $id ";
    $result = $db->query($query);
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
    }
    
}

function deleteUser($id){
    global $db;
    $query = "DELETE FROM student WHERE student_id = $id";
    $result = $db->query($query);
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
    };

}
function  deleteInstructor($id){
    global $db;
    $query = "DELETE FROM instructor WHERE instructor_id = $id";
    $result = $db->query($query);
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
    };
}
function addUserInstructor($fname , $lname , $depart_name , $course , $city , $duration){
    global $db;
        
    if($duration >=17){
        $time = 1;
    }else{
        $time = 0;
    }
    $query = "INSERT INTO instructor SET instructor_fname = '$fname' , instructor_lname='$lname' ,
    depart_name = '$depart_name' , course_name =' $course' , instructor_city = '$city',working_duration = '$duration' , is_retired = '$time' ";
    $result = $db->query($query);
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
    }
}
?>