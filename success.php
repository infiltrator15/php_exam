<?php
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    echo $fname."<br>".$lname."<br>".$dob."<br>".$gender;
}

?>