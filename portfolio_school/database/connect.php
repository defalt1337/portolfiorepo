<?php
session_start();

if(isset($_POST['megyeget'])){
    connectit();
}

function connectit(){
    $db_name = 'contact';
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pss = '';
    $conn = new mysqli($db_host, $db_user, $db_pss, $db_name);

    if(!$conn){
        echo"elszartad bro";
    }
    header("refresh:4;url=/portolfiorepo/portfolio_school/index.php");
    echo"sikerült gec de am át leszel irányítva 4 másodperc múlva xd";
}
?>