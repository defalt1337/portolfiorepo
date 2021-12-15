<?php
include 'connect.php';
$conn = connectit();
ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

global $name,$mail,$topic,$message,$date;


function sqlinsert(){
    $sql = "INSERT into guests (name,mail,topic,message,created_date) VALUES ('".$name."','".$mail."','".$topic."','".$message."','".$date('Y-m-d')."') ";
    $done = $conn->query($sql);

    if(!$done){
        header("refresh=2;location=/portolfiorepo/portfolio_school/page/progress.php");
        echo "<script>alert('Ez bukott tes');</script>";
    }
    echo "Thanks for contacting us!";
    header("refresh=2;location=/portolfiorepo/portfolio_school/index.php.php");
    $conn->close();
}
sqlinsert();
?>