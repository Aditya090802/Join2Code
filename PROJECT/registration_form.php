<?php
    ob_start(); 
    session_start();
?>
<!DOCTYPE html>

<html>

<head>

<title> J2C Registration Form </title>

<?php
    include 'link.php';
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

<style>
h1{
    text-align: center;
    border-bottom: 2px solid green;
}

/* body{
    background-color: #e4ebe6;
} */

body {
    font-family: "Open Sans", sans-serif;
    color: #444444;
}

.navbar-nav a{
    font-family: poppins;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: bold;
}

.navbar-nav{
    text-align: center;
}

.navbar-light .navbar-nav .nav-link{
    color:#3FBD2B;
}

.nav-link{
    padding: .2rem 1rem;
}

.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover{
    color:#a86932 !important;
}

@media only screen and (max-width: 767px){
    
    .navbar-toggler{
        padding: 1px 5px;
        font-size: 18px;
        line-height: 0.3;
    }
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

#profileImage{
    background-color:#fff;
    border:2px solid white;    
    height:38px;
    border-radius:50%;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
    width:38px;
    padding-top:5px;
    color: white;
    background-color: green;
}

.profile-link{
  margin-top: 5px;
}

@media only screen and (max-width: 767px){
    #profileImage{
      margin-left: 162px;
    }    

    .profile-link{
      margin-top: 0;
      margin-right: 20px;
    }

}



</style>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

<div class="container">
<a class="navbar-brand" href="home_page.php"><img src="Images/logo.png" alt="Logo" style="width: 130px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
  <div class="justify-content-end">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home_page.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about_us">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#courses">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footerid">Contact Us</a>
      </li>
  </div>


      <ul class="nav navbar-nav ml-auto">

      <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
      {
      ?>

        <a> <div id="profileImage"> </div> </a>

        <li class="nav-item dropdown profile-link">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


        
         <?php  $name = $_SESSION['username'] ?>
        

      
    
    
      <script type="text/javascript">
        $(document).ready(function() {
            var firstName = '<?php echo $name;  ?>';

            var matches = firstName.match(/\b(\w)/g);
            var acronym = matches.join('');

            var profileImage = $('#profileImage').text(acronym);
            
        });
    </script>



        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="profile.php">Dashboard</a>
          <a class="dropdown-item" href="logout.php">Log Out</a>
        </div>
      </li>



      <?php }else{ ?>
                    <li class="nav-item">
        <a class="nav-link" href="registration_form.php"><span class="fas fa-user"></span> Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php"><span class="fas fa-sign-in-alt"></span> Login</a>
      </li>              
        <?php } ?>


    </ul>
  </div>
  </div>
</nav>


<div class="container">

<br> <br> <br> <br>

<h1 class="text-success">
    Registration Form
</h1>

<br>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
    
    <div class="form-group">
        <label for="user"> Enter Your Name </label>
        <input type="text" name="username" id="user" class="form-control" placeholder="Enter Name" required>
    </div>




    <div class="form-group">
        <label for="password" class="control-label"> Enter Your Password </label>
        <div class="input-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
            <div class="input-group-addon">
            <i class= "fa fa1 fa-eye" id="eye"></i>
            </div>
        </div>
        <small id="password" class="text-muted">
      *Must be atleast 8 characters long
    </small>
    </div>


    <div class="form-group">
        <label for="email"> Enter Your Email </label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
    </div>


    <div class="form-group">
        <label for="phone"> Enter Your Mobile No. </label>
        <input type="phone" name="phone" id="phone" class="form-control" placeholder="Enter Your Mobile No." required>
    </div>

    

    <div class="form-group">
    <label for="dob"> Enter Your D.O.B </label>
    <br>
    <input type="date" id="dob" name="dob" required>
    </div>

    <button type="submit" name="submit" class="btn btn-primary btn-lg" data-toggle="button" > Register  </button>

    <br>
    <br>

    <p class="text-center"> Already Have An Account? <a href="login.php"> Login Here </a> </p>


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
  $name = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $dob = mysqli_real_escape_string($con, $_POST['dob']);
  
    $pass = password_hash($password, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    $emailquery="select * from registration_deatils where email='$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount > 0){
        ?>
        <script>
            alert('Email Already Exists');
        </script>
        <?php
    }
    else{
        if(strlen($password) >=8){
            if(!ctype_upper($password) && !ctype_lower($password)){
                $insert_query = "insert into registration_deatils (name,password,email,phone,dob,token,state,course,course1) values ('$name','$pass','$email','$phone','$dob','$token','inactive','','')";
                $res = mysqli_query($con,$insert_query);
            
                if($res){
                    
                    $subject = "Join2Code Account Activation";
                    $body = "Hi, $name . Click Here To Activate Your Account http://localhost/Registration_form/activate.php?token=$token ";
                    
                    $sender_mail = "From: nkg6773@gmail.com";

                    if (mail($email, $subject, $body, $sender_mail)) {
                        $_SESSION['msg'] = "Check Your Mail To Activate Your Account $email";
                        header("Location: login.php");
                    } else {
                        echo "Email sending failed...";
                    }
                
                }
        
                else{
                    ?>
        
                    <script>
                        alert('Data Not Inserted Successfully');
                    </script>
        
                    <?php
                } 
            }
        }

        else{
            ?>
            <script>
                alert('Please Enter A Strong Password\nStrong Password Means ::--\nPassword Length Should Be Atleast 8\nPassword Should Contain Atleast 1 Uppercase Letter\nAnd 1 Lowercase Letter');
            </script>

            <?php
        }
        
    }

    }
    

    



?>