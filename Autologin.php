<?php
session_start();
include('ProcessMethods.php');

if(isset($_POST['submit']))
{
    $User_Name = $_POST["User_Name"];
    $Password = $_POST["Password"];

    require_once 'ProcessMethods.php';
    require_once 'Autologin.php';

    if (emptyInputLogin($User_Name, $Password) !== false){
        header("location: Login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $User_Name, $Password); 
}
else{
    header("location: Login.php");
    exit();
}
?>