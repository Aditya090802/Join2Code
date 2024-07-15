<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>

    </title>
    <?php
    include 'link.php';
    
  ?>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1" />


       
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
      <!-- Latest compiled and minified CSS -->
    
  
      

    

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
 
 

      <!-- Latest compiled and minified JavaScript -->
 

      <link rel="stylesheet" type="text/css" href="CSS.css">
      <link rel="stylesheet" type="text/css" href="style1.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">








        <link rel="stylesheet" type="text/css" href="CSS.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        
        <link rel="stylesheet" type="text/css" href="VIDEOCSS.css">
        <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
        <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />

        <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
        <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

        <!------loader of pages.-->


        <script>
            function toggleSidebar() {
                document.getElementById("sidebar").classList.toggle("active");
                document.getElementById("my-video").classList.toggle("active");

            }
        </script>

        <script>
            function shownotes() {
                document.getElementById("adobe-dc-view").classList.toggle("active");
            }

            function showquiz() {
                document.getElementById("quiz01").classList.toggle("active");
            }
        </script>

        <style>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />



<style>


@media only screen and (max-width: 767px){
    #profileImage{
      margin-left: 162px;
    }    

    .profile-link{
      margin-top: 0;
      margin-right: 20px;
    }

}

#footerid
{
    font-size:15px;
}

.footerdiv{
  background-color: #D4D3B6;
}

.footer {

position: fixed;
left: 0;
bottom: 0;
width: 100%;
}


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


            <style>.container {
                position: relative;
            }
            
            .image {
                transition: .5s ease;
                text-align: left;
            }
            
            .middle {
                transition: .5s ease;
                opacity: 0;
                position: absolute;
                top: 10%;
                transform: translate(-30%, -10%);
                -ms-transform: translate(-30%, -10%);
                text-align: center;
            }
            
            .container:hover .image {
                opacity: 0.3;
            }
            
            .container:hover .middle {
                opacity: 1;
            }
            
            .text {
                background-color: #4CAF50;
                color: white;
                font-size: 3px;
            }

            #navigation
            {
                font-size:14px;
            }

           
           .button1 {
                background-color:#FF0000; /* Green */
  border: none;
  color: white;

  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  width:40%;
  font-size: 16px;
  left:40%;;
  margin: 7% 30%;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1:hover
{
    background-color:#90ee90;
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


        
        
        

      
    
    
      <script type="text/javascript">
        $(document).ready(function() {
            var firstName =sessionStorage.getItem("name");

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
    <br>
    </br>

    <div class="jumbotron text-center" style="border-radius: 12px; margin-top:40px">
        <div class="col-lg-12 col-md-12 col-sm-12" style="background-color: greenyellow;">
            <h3>Enjoy lecture.</h3>
            <p>This Video clip make you clear in taught topic. </p>
        </div>
    </div>




    <div id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="text">CONTENT</div>
        <ul>
            <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1ooO8RuPxTHUdlKgcB3KnjqO_8tKKtIyf')"><a href="#">Introduction  </a></li>
            <li>
                <a href="#" class="feat-btn">Basic Topic <b class="caret"></b></a>
                <ul class="feat-show">
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1OmDpgVeKrz4eKiVaG8bcW5l3Q59RErTL')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">24:45</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">Element of C</h4>


                            </div>


                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#" class="feat-btn-02">Hello world<b class="caret"></b></a>
                <ul class="feat-show-02">
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1mxfp07brOuPTmiEdFK0K384M9xMt1VKo')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">5:40</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">Hello world(Program)</h4>


                            </div>


                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#" class="feat-btn-03">Input/Output<b class="caret"></b></a>
                <ul class="feat-show-03">
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1B0lWP-UegV38VqyYz31jCcqYSQuRR_Ov')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">5:40</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">Introduction</h4>


                            </div>


                        </a>
                    </li>
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1Jgc1_4VQ1HRIrcMkkfxj_8rTEIu84mnW')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text">6.15</div>
                                </div>
                                <h4 style="text-align: center; text-decoration: double;">Access modifier</h4>
                            </div>

                        </a>

                    </li>
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1dmE15k1kf2-j082AON297A4YWN24SOgq')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text">4:45</div>
                                </div>
                                <h4 style="text-align: center; text-decoration: double;">Integer</h4>
                            </div>

                        </a>

                    </li>

                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1zIK6daS2QJCYmqOhCEG_VkMkUmVKtRwe')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text">4:45</div>
                                </div>
                                <h4 style="text-align: center; text-decoration: double;">character</h4>
                            </div>

                        </a>

                    </li>
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=10o98CosByYMZCfvSPJu7Y6oN-xJvR1pC')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">5:40</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">Float</h4>


                            </div>


                        </a>
                    </li>

                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1x0JOOmNUSB_pKCiTFrxWN-yAmgu8h5-5')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">5:40</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">Double</h4>


                            </div>


                        </a>
                    </li>
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1pP5n8pmwl9NwfSy47Wj8YCt1DQSwEK6s')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">5:40</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">String</h4>


                            </div>


                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="feat-btn-04">Cond.Statement<b class="caret"></b></a>
                <ul class="feat-show-04">
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1Y18wn9_zKpy6xeG_SQI5rjrFHFanA5OS')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">5:40</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">Introduction</h4>


                            </div>


                        </a>
                    </li>
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1rUSiBUJ6hNhSFYlyF7C-XsRlnUX2UMJp')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text">6.15</div>
                                </div>
                                <h4 style="text-align: center; text-decoration: double;">IF condition</h4>
                            </div>

                        </a>

                    </li>
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1PZsOccEpn_lpCipw5Jc-PxfIv436IIDR')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text">4:45</div>
                                </div>
                                <h4 style="text-align: center; text-decoration: double;">Else if</h4>
                            </div>

                        </a>

                    </li>

                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1O0xibOSu4hwp4_eXebXfx8B7TkfQROn6')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text">4:45</div>
                                </div>
                                <h4 style="text-align: center; text-decoration: double;">Else</h4>
                            </div>

                        </a>

                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="feat-btn-06">Loop <b class="caret"></b></a>
                <ul class="feat-show-06">
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=15tJpAaxHaTX0UI5vfULNQKF9ehdtf5L-')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">5:40</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">Introduction</h4>


                            </div>


                        </a>
                    </li>
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=15tJpAaxHaTX0UI5vfULNQKF9ehdtf5L-')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text">6.15</div>
                                </div>
                                <h4 style="text-align: center; text-decoration: double;">For loop</h4>
                            </div>

                        </a>

                    </li>
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1lwWuQrMLBHlT4KzN08pVmUJxdhyXeBgs')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text">4:45</div>
                                </div>
                                <h4 style="text-align: center; text-decoration: double;">While Loop</h4>
                            </div>

                        </a>

                    </li>

                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1O90kSu9Dy3MwxolXKBPGBnUav3EAvV60')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text">4:45</div>
                                </div>
                                <h4 style="text-align: center; text-decoration: double;">Do While</h4>
                            </div>

                        </a>

                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="feat-btn-07">Pointer<b class="caret"></b></a>
                <ul class="feat-show-07">
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1rF5VKzkuv4J3GixS2_vU9OG5UgI9xa_G')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">5:40</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">Introduction</h4>


                            </div>


                        </a>
                    </li>
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1-HZeuSIzQTSjxozGSHhPTyIiLZqgQLqT')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text">6.15</div>
                                </div>
                                <h4 style="text-align: center; text-decoration: double;">Imp. point</h4>
                            </div>

                        </a>

                    </li>
                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1Bl2ItvtxFlkwCcBULLWgzKMUB7zXZXvA')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text">4:45</div>
                                </div>
                                <h4 style="text-align: center; text-decoration: double;">Declaration and Implementation</h4>
                            </div>

                        </a>

                    </li>

                    <li onclick="myFunction('https://drive.google.com/uc?export=download&id=1cS7Mveq4r1kI5MgpmgNvS3gUtUzFAk0X')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text">4:45</div>
                                </div>
                                <h4 style="text-align: center; text-decoration: double;">Accessing</h4>
                            </div>

                        </a>

                    </li>
                </ul>
            </li>


            <!-----
            <li><a href="#" class="feat-btn-01">Pointer part-2<b class="caret"></b></a>

                <ul class="feat-show-01">
                    <b style="font-size: medium; color: antiquewhite;">Pointer Arithmetic</b>
                    <li onclick="myFunction('1.mp4')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">6:30</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">Addition</h4>


                            </div>
                        </a>
                    </li>
                    <li onclick="myFunction('2.mp4')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">5:30</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">subtraction</h4>


                            </div>
                        </a>
                    </li>
                    <li onclick="myFunction('3.mp4')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">7:30</div>
                                </div>

                                <h5 style="text-align: center; text-decoration: double;font-size: medium;">Increment & Decrement</h5>


                            </div>
                        </a>
                    </li>
                    <b style="font-size: medium; color: antiquewhite;">Pointer with array</b>
                    <li onclick="myFunction('2.mp4')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">5:30</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">subtraction</h4>


                            </div>
                        </a>
                    </li>
                    <li onclick="myFunction('2.mp4')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">5:30</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">subtraction</h4>


                            </div>
                        </a>
                    </li>
                    <li onclick="myFunction('2.mp4')">
                        <a href="#">
                            <div class="container">
                                <img id="thumbnail" class="image" src="logo.jpeg" height="50px" width="140px" alt="logo" style="text-align: left;margin-left: -15px;">
                                <div class="middle">
                                    <div class="text" id="time1">5:30</div>
                                </div>

                                <h4 style="text-align: center; text-decoration: double;font-size: medium;">subtraction</h4>


                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li onclick="shownotes()"><a href="#">Notes</a></li>
            <li onclick="showquiz()"><a href="#">Quiz</a></li>

        -->





        </ul>



    </div>




    <script>
        function ChangeVideo(src1) {
            document.getElementById('video').src = src1;

        }
    </script>

    <video id="my-video" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="90%" height="264" poster="logo.png" data-setup='{ "playbackRates": [0.5, 1, 1.5, 2,2.5,3,3.5,4] }'>
        <source id="video" src="https://drive.google.com/uc?export=download&id=1ooO8RuPxTHUdlKgcB3KnjqO_8tKKtIyf" type="video/mp4" label='SD' res='480' />
    
        <p class="vjs-no-js">
          To view this video please enable JavaScript, and consider upgrading to a
          web browser that
          <a href="https://videojs.com/html5-video-support/" target="_blank"
            >supports HTML5 video</a
          >
        </p>
      </video>
      <form action="" method="post">
<button type="submit" name="submit" class="btn button1"  data-toggle="button"  > Add To Account  </button>
</form>




<?php

include 'connection.php';

if(isset($_POST["submit"]))
{
  if(isset($_SESSION['username']) ? $_SESSION['username'] : ''){

    $uemail = $_SESSION['email'];

  $course = "C Programming Language";
  

  $showquery = "select * from registration_deatils where email='$uemail' ";

  $showdata = mysqli_query($con,$showquery);

  $arrdata = mysqli_fetch_assoc($showdata);

  $email = $arrdata['email'];

  $query = "update registration_deatils set course='$course' where email='$email' ";



                $res = mysqli_query($con,$query);
  

  if($res){
    ?>
    <script>
        alert('Course Purchased Successfully');
    </script>
    <?php
  }
  else{
    ?>
    <script>
        alert('Course Not Purchased');
    </script>
    <?php
  }


}

else{
  ?>
  <script>
  alert('Login First In Order To Purchase The Course');
  </script>
  <?php
}

}
?> 



      
      
      
    <script>
        var vid = document.getElementById("my-video");

        function myFunction(hello) {

            isSupp = vid.canPlayType("video/mp4");
            if (isSupp == "") {
                vid.src = "movie.ogg";
            } else {
                vid.src = hello;
            }
            vid.load();
        }
    </script>
    <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>




    <br />
    <br />
    <script>
        $('.feat-btn').click(function() {
            $('#sidebar ul .feat-show').toggleClass("show");
            document.getElementById("time1").innerHTML = "5:30";

        });

        $('.feat-btn-02').click(function() {
            $('#sidebar ul .feat-show-02').toggleClass("show");
        });

        $('.feat-btn-03').click(function() {
            $('#sidebar ul .feat-show-03').toggleClass("show");
        });

        $('.feat-btn-04').click(function() {
            $('#sidebar ul .feat-show-04').toggleClass("show");
        });


        $('.feat-btn-05').click(function() {
            $('#sidebar ul .feat-show-05').toggleClass("show");
        });

        $('.feat-btn-06').click(function() {
            $('#sidebar ul .feat-show-06').toggleClass("show");
        });

        $('.feat-btn-07').click(function() {
            $('#sidebar ul .feat-show-07').toggleClass("show");
        });
    </script>

<!---------
    <div id="adobe-dc-view"></div>
    <script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
    <script type="text/javascript">
        document.addEventListener("adobe_dc_view_sdk.ready", function() {
            var adobeDCView = new AdobeDC.View({
                clientId: "<YOUR_CLIENT_ID>",
                divId: "adobe-dc-view"
            });
            adobeDCView.previewFile({
                content: {
                    location: {
                        url: "https://file-examples-com.github.io/uploads/2017/10/file-example_PDF_500_kB.pdf"


                    }
                },
                metaData: {
                    fileName: "Bodea Brochure.pdf"
                }
            });
        });
    </script>

    <br />
    <br />
    <div id="quiz01" class="col-lg-12 col-sm-12 col-md-12">
        <div class="grid">
            <div id="quiz">
                <h1>Welcomet to quiz of J2C</h1>
                <hr style="margin-bottom: 20px">

                <p id="question"></p>

                <div class="buttons">
                    <button id="btn0"><span id="choice0"></span></button>
                    <button id="btn1"><span id="choice1"></span></button>
                    <button id="btn2"><span id="choice2"></span></button>
                    <button id="btn3"><span id="choice3"></span></button>
                </div>

                <hr style="margin-top: 50px">
                <footer>
                    <p id="progress">Question x of y</p>
                </footer>
            </div>
        </div>
    </div>
    <script src="question.js"></script>
    <br />
    <br />
    
------>


<div class="footerdiv" id="footerid">

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold"> Join2Code </h6>
        <p> You Should Join Us To Build Your Career In Programming. </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold"> Courses </h6>
        <p>
          <a href="c_course.php"> C Course </a>
        </p>
        <p>
          <a href="cpp_course.php"> Cpp Course </a>
        </p>
        <!-- <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p> -->
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="home_page.php"> Home </a>
        </p>
        <p>
          <a href="registration_form.php"> Register With Us </a>
        </p>
        <p>
          <a href="courses.php"> Start Learning </a>
        </p>
        <!-- <p>
          <a href="#!"></a>
        </p> -->
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> Dwarka, New Delhi </p>
        <p>
          <i class="fas fa-envelope mr-3"></i> nkg0280@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +91-7456077288</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +91-9193366942 </p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--1Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="http://localhost/Registration_form/home_page.php">
            <strong> JOIN2CODE </strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://twitter.com/Nik17999">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->



</div>



</body>

</html>