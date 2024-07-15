<?php
    ob_start(); 
    session_start();
?>
<!DOCTYPE html>

<html>

<head>

<title>  Reset Password </title>

<style>

h2{
    text-align: center;
    border-bottom: 2px solid green;
}

body{
    background-color: #e4ebe6;
}

</style>

<?php
    include 'link.php';
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />


</head>

<body>

<div class="container">

<h2 class="text-success">
    Account Recovery
</h2>

<br>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
    
    <div class="form-group">
        <label for="email"> Enter Your Email </label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Registered Email" value="" required>
    </div>

    <button type="submit" name="submit" class="btn btn-primary" data-toggle="button" > Send Mail  </button>


</form>

</div>

</body>



</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $emailquery="select * from registration_deatils where email='$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount){
                    $userdata = mysqli_fetch_array($query);
                    $username = $userdata['username'];
                    $token = $userdata['token'];

                    $subject = "Password Reset";
                    $body = "Hi, $name . Click Here To Reset Your Password http://localhost/Registration_form/reset_password.php?token=$token ";
                    
                    $sender_mail = "From: nkg6773@gmail.com";

                    if (mail($email, $subject, $body, $sender_mail)) {
                        $_SESSION['msg'] = "Check Your Mail To Reset Your Password $email";
                        header("Location: login.php");
                    } else {
                        echo "Email sending failed...";
                    }
                
                } 
}  
    
?>