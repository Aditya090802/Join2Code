<?php
    session_start();
    
?>



<!DOCTYPE html>

<html>

<head>

<title> J2C Login Page </title>

<?php
    include 'link.php';
?>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head> -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head> -->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

<meta name="google-signin-scope" content="profile email">
   <meta name="google-signin-client_id" content="42198661889-k2pajmlunlpqo4ni75dllj8bfp3a0n10.apps.googleusercontent.com">





<style>
h1{
    text-align: center;
    border-bottom: 2px solid green;
}

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
<a class="navbar-brand" href="home_page.php"><img src="logo.png" alt="Logo" style="width: 130px;"></a>
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


        
         <?php  
         $name = $_SESSION['username'] ?>

     
        

      <script>
          var hello='<?php echo $name?>';
          

          
        if(hello!=Gname)
      { <?php 
            include 'connection.php';
            ?>



        <?php  
             $uemail = $_SESSION['email']; 
             $u_name = $_SESSION['username'];
        ?>
        <?php
                        $details = "select * from registration_deatils where email='$uemail' ";
                        $result = mysqli_query($con,$details);
                        $row = mysqli_fetch_assoc($result);

                        $name=$row['name'];
                        $em=$row['email'];
                        $phone=$row['phone'];
                        $dob=$row['dob'];
                        $course=$row['course'];
                        $id=$row['id'];
                        $course1=$row['course1'];
                        $_SESSION['name']=$name;
                        $_SESSION['email']=$em;
                        $_SESSION['phone']=$phone;
                        $_SESSION['dob']=$dob;
                        $_SESSION['course']=$course;
                        $_SESSION['course1']=$course1;
                        $_SESSION['id']=$id;
                        $_SESSION['username']=$name;
        ?>
        
         var nm='<?php echo $_SESSION['name']?>';
          var em='<?php echo $_SESSION['email']?>';
       
       
       ;

        sessionStorage.setItem("username",hello);
        
        sessionStorage.setItem("dob",dob);
        sessionStorage.setItem("course",course);
        sessionStorage.setItem("course1",course1);
        sessionStorage.setItem("phoneno",phoneno);
        sessionStorage.setItem("name",nm);
        sessionStorage.setItem("dob",'<?php echo $dob ?>');
        
    
        
        
        


        console.log(sessionStorage.getItem("name"));
    
      }
   
    
    
      
      
        $(document).ready(function() {
            var firstName = sessionStorage.getItem("name");

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
    Login Page
</h1>

<p> <?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg']; 
}
else{
    echo $_SESSION['msg'] = "";
}


?>
</p>



<br>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
    
    <div class="form-group">
        <label for="email"> Enter Your Email </label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="<?php if(isset($_COOKIE['emailcookie'])) {
            echo $_COOKIE['emailcookie'];} ?>" required>
    </div>

    <div class="form-group">
        <label for="password" class="control-label"> Enter Your Password </label>
        <div class="input-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" value="<?php if(isset($_COOKIE['pwdcookie'])) {
            echo $_COOKIE['pwdcookie'];} ?>"required>
            <div class="input-group-addon">
            <i class= "fa fa-eye fa1" id="eye"></i>
            </div>
        </div>
    </div>

    <div class="form-group">
        <input type="checkbox" name="rememberme"> Remember Me
    </div>



<button type="submit" name="submit" class="btn btn-primary btn-lg" data-toggle="button" > Login  </button> <b>  Or</b>
	<div class="g-signin2"  data-onsuccess="onSignIn" style="margin-top:-40px; margin-left:120px;" > </div>
    <script>



function onSignIn(googleUser) {
    var profile,name,email,firstname,lastname,token,image;



profile = googleUser.getBasicProfile();
name = profile.getName();
var Gname=name;
email = profile.getEmail();
firstname = profile.getGivenName();
lastname = profile.getFamilyName();
token = googleUser.getAuthResponse().id_token;
image = profile.getImageUrl();
console.log(image);
console.log(name);
var dob="--";
var course="--";
var course1="--";
var phoneno="--";

console.log(lastname);

     sessionStorage.setItem("name",name);
    sessionStorage.setItem("dob",dob);
    sessionStorage.setItem("course",course);
    sessionStorage.setItem("course1",course1);
    sessionStorage.setItem("phoneno",phoneno);
    sessionStorage.setItem("email",email);
   


console.log("my name"+sessionStorage.getItem("name"));

//sessionStorage.setItem("firstname",firstname);
console.log("fistname baby"+sessionStorage.getItem("firstname"));
//sessionStorage.setItem("lastname",lastname);
//sessionStorage.setItem("image",image);
sessionStorage.setItem("token",token);


console.log("hello"+sessionStorage.getItem("email"));
sessionStorage.setItem("username",name);

<?php
$_SESSION['username']="googleapi";
?>








}



</script>

    <br>
    <br>
  
    <p class="text-center"> Forget Your Password? <a href="recover_email.php"> Click Here </a> </p>

    <p class="text-center"> Don't Have An Account? <a href="registration_form.php"> Register Here </a> </p>

</form>

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
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from registration_deatils where email='$email' and state='active' ";

    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        
        $email_pass = mysqli_fetch_assoc($query);
        $db_password = $email_pass['password'];

        

        $pass_check = password_verify($password, $db_password);

        if($pass_check){

            $_SESSION['username'] = $email_pass['name'];
            
            
            $_SESSION['email'] = $email_pass['email'];

            if(isset($_POST['rememberme'])){
                setcookie('emailcookie',$email,time()+(10 * 365 * 24 * 60 * 60));
                setcookie('pwdcookie',$password,time()+(10 * 365 * 24 * 60 * 60));


                header('location:home.php');
            }
            else{
                header('location:home.php');
            }

            $_SESSION['address']=$_SESSION['email'];

            
            ?>
            <script>
                var aa='<?php echo $_SESSION['email']?>';
                sessionStorage.setItem("address",aa);
                 </script>

            <script>
                var ae='<?php echo $_SESSION['username']?>';
                sessionStorage.setItem("username",ae);
                
                
                alert('Login Successful');
                location.replace("home_page.php");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert('Incorrect Password');
            </script>
            <?php
        }
    }    

    else{
        ?>
        <script>
            alert('Incorrect Email');
        </script>
        <?php
    }
}

?>
<script>
    
    console.log(sessionStorage.getItem("username"));
    console.log(sessionStorage.getItem("email"));
    console.log(sessionStorage.getItem("address"));
    sessionStorage.setItem("email",sessionStorage.getItem("address"));
    console.log("abe"+sessionStorage.getItem("email"));
    console.log(sessionStorage.getItem("dob"));

    sessionStorage.setItem("dob",'<?php echo $_SESSION['dob']?>');
    sessionStorage.setItem("course",'<?php echo $_SESSION['course']?>');
    sessionStorage.setItem("course1",'<?php echo $_SESSION['course1']?>');
    sessionStorage.setItem("phoneno",'<?php echo $_SESSION['phone']?>');
    sessionStorage.setItem("name",'<?php echo $_SESSION['name']?>');

</script>