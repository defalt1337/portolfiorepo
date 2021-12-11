<?php
require('connect.php');
extract($_POST);

$sqlSyntax = "INSERT into guests (name,mail,topic,message,created_date) VALUES ('".$name."','".$mail."','".$topic."','".$message."','".$date('Y-m-d')."') ";
$done = $mysqli->$query($sqlSyntax);

if(!$done){
    die("Can't resolve a connection error!".$mysqli->error);
    echo"<script> location.href='../page/contact.php'</script>";
}
echo "Thanks for contacting us!";
header('location: ../page/contact.php');
$conn->close();
?>