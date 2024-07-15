<?php

session_start();

include 'connection.php';

if(isset($_GET['token'])){
    $token = $_GET['token'];
    $update_query = "update registration_deatils set state='active' where token='$token' ";
    $query = mysqli_query($con,$update_query);

    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account Activated Successfully";
            header('location:login.php');
        }
        else{
            $_SESSION['msg'] = "You Are Logged Out";
            header('location:login.php');
        }
    }

    else{
        $_SESSION['msg'] = "Account Not Updated";
        header('location:registration_form.php');
    }
}

?>