<?php
    ob_start(); 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Password Reset </title>

    <?php
    include 'link.php';
    ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

<style>
h2{
    text-align: center;
    border-bottom: 2px solid green;
}

body{
    background-color: #e4ebe6;
}

.input-group-addon{color:#ff0000; background-color: #fff;}

.fa1{
    font-size: 22px;
    cursor: pointer;
    color: #000;
    padding: 8px;
}

.fa{
    font-size: 22px;
    color: #000;
    padding: 8px;
}


.fa.active{
     color: #ff0000;
} 
</style>
   
</head>

<body>
    

<div class="container">

<h2 class="text-success">
    Reset Password
</h2>

<p>  
    <?php
    if(isset($_SESSION['passmsg'])){
        echo $_SESSION['passmsg'];
    }
    else{
        echo $_SESSION['passmsg'] = "";
    }
?>  </p>



<form action="" method="POST">

    <div class="form-group">
        <label for="password" class="control-label"> Enter New Password </label>
        <div class="input-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter New Password" value=""required>
            <div class="input-group-addon">
            <i class= "fa fa-eye fa1" id="eye"></i>
            </div>
        </div>
    </div>




    <button type="submit" name="submit" class="btn btn-primary" data-toggle="button" > Reset Password  </button>
    <br>
    <br>

</form>

</div>

</body>

<script>
    var pwd = document.getElementById('password');
    var eye = document.getElementById('eye');

    eye.addEventListener('click',togglePass);

    function togglePass(){
        eye.classList.toggle('active');

        (pwd.type == 'password') ? pwd.type = 'text' : pwd.type = 'password' ;        
    }

</script>

</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){

if(isset($_GET['token'])){
    $token = $_GET['token'];

    $password = mysqli_real_escape_string($con, $_POST['password']);

    $pass = password_hash($password, PASSWORD_BCRYPT);

    $updatequery = " update registration_deatils set password='$pass' where token='$token' ";

    $iquery = mysqli_query($con, $updatequery);

    if($iquery){
        $_SESSION['msg'] = "Your Password Has Been Updated";
        header('location:login.php');
    } 
    else{
        $_SESSION['passmsg'] = "Your Password Is Not Updated";
        header('location:reset_password.php');
    }

}
    

}
?>