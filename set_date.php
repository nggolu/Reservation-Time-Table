<?php


// destroy the session 
if(session_id() != '') {
    session_destroy();
}

$date = $_POST['date'];
session_start();
$_SESSION['date'] = $date;

//On details pages
header('Location: details.php');
?>