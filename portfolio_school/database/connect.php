<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

if(isset($_POST['megyeget'])){
    connectit();
}
function connectit(){
    $db_name = 'contact';
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pss = 'asd123';
    $conn = new mysqli($db_host, $db_user, $db_pss, $db_name);

    if(!$conn){
        echo"elszartad bro";
    }
    $selected_db = mysqli_select_db($conn,$db_name);
    if(!$selected_db){
        die('rip'.mysqli_error($conn));
    }
    //header("refresh:2;url=/portolfiorepo/portfolio_school/database/upload.php");
    echo"sikerült gec de am át leszel irányítva 4 másodperc múlva xd";
    return $conn;
}
?>