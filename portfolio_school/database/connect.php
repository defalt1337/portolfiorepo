<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

$db_name = 'contact';
$db_host = 'localhost';
$db_user = 'root';
$db_pss = '';
$conn = new mysqli($db_host, $db_user, $db_pss, $db_name);

if (!$conn) {
    echo "elszartad bro";
}
$selected_db = mysqli_select_db($conn, $db_name);
if (!$selected_db) {
    die('rip' . mysqli_error($conn));
}