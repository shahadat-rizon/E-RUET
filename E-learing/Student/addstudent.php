<?php
 include_once('../dbconnection.php');
if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stumail']) && isset($_POST['stupass'])){
    $stuname = $_POST['stuname'];
    $stumail = $_POST['stumail'];
    $stupass = $_POST['stupass'];
    echo $stuname;
    echo $stupass;
    echo $stumail;
    
    $sql = "INSERT INTO student(stu_name,stu_mail,stu_pass VALUES('$stuname','$stumail','$stupass')";
    if($conn->query($sql) == true){
        echo json_encode("OK");
    }
    else
    {
        echo json_encode("Failed");
    }

}

 ?>