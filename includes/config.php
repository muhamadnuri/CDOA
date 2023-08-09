<?php
session_start();
$db = mysqli_connect('localhost','root','','cdo');

function x($data){
    global $db;
    $data = mysqli_real_escape_string($db ,htmlspecialchars($data));
    return $data ;
}

if(isset($_SESSION['admin'])){
    $admin =$_SESSION['admin'];
}else if(isset($_SESSION['user'])){
    $userid =$_SESSION['user'];
}

if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    unset($admin);
    unset($userid);
    echo "<script> window.location.href='index.php';</script>";
}

?>




