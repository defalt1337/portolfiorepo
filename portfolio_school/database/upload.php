<?php
require 'connect.php';

//Display all the errors if they're present

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

//Calling the function when the form sends 'megyeget' from the submit button

if(isset($_POST['megyeget'])){
    uploadingIt();
}
function uploadingIt(){

    //Make these variables accessable golablly

    global $name,$mail,$topic,$message,$conn;

    //Creating variables which collects data from form fields

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mail = mysqli_real_escape_string($conn, $_POST['mail']);
    $topic = mysqli_real_escape_string($conn, $_POST['service']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    //Checking if the fields are empyt, if not, count errors than error message

    if(empty($name)) {array_push ($errors, "Name is rquired");}
    if(empty($mail)){array_push($errors, "Mail is required");}
    if(empty($message)){array_push($errors, "Message is required");}

    //Uploading data into the databse

    $sql = "INSERT into guests (name,mail,topic,message) VALUES ('".$name."','".$mail."','".$topic."','".$message."') ";
    $done = $conn->query($sql);

    //Checking if the guest is already in a database with his/her message

    $user_check_query = "SELECT * FROM guests WHERE name ='$name' OR mail = '$mail' LIMIT 1";
    $result_1 = mysqli_query($conn,$user_check_query);
    $user_1 = mysqli_fetch_assoc($result_1);

    if ($user_1['name'] === $name) {
        array_push($errors, "Username already exists");
    }

    //If the uploading fails this will show

    if(!$done){
        echo "<script>alert('Ez bukott tes');</script>";
    }

    //Redirecting if everything done, no error

    header('location:success.php');
    die();
    $conn->close();
}
