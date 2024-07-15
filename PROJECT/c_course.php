<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'link.php';
    ?>

    <link rel="stylesheet" href="style/style1.css" />

    <script type="text/javascript" src="video_player.js"> </script>

    <title> J2C C Course </title>

    <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />


    <style>
        
        html{
            scroll-behavior:smooth;
        }

        .heading{
            text-transform: uppercase;
            text-align: center;
            text-shadow: 2px 2px #2E4242;
            font-size: 35px;
        }

        .play-btn{
            width:50px;
            position: relative;
            top:-50%;
            right: -50%;
            cursor: pointer;
            transition: 0.5s;
            opacity: 0;
            color: green;
        }

        .col-md-4:hover .play-btn{
            opacity: 1;
        }

        .modal-content{
    background: transparent !important;
    border: none !important;
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

.footerdiv{
  
  background-color: #D4D3B6;
}


.footer {

  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
}


    
    </style>




<script>

$('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});

</script>



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
        <a class="nav-link" href="#">Contact Us</a>
      </li>
  </div>


      <ul class="nav navbar-nav ml-auto">

      <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
      {

        
      ?>
        <a> <div id="profileImage"> </div> </a>
        <li class="nav-item dropdown profile-link">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!-- <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle"> -->



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

<br>
<br>
<br>
<br>



<div class="container">

<h2 class="heading"> C COURSE CONTENT </h2>
<hr>


<br>



<div id="accordion">
  <div class="card">
    <div class="card-header" id="heading-1">
      <h5 class="mb-0">
        <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
          1. Basics Of C
        </a>
      </h5>
    </div>
    <div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
      <div class="card-body">

        <div id="accordion-1">
          <div class="card">
            <div class="card-header" id="heading-1-1">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                  Elements In C
                </a>
              </h5>
            </div>
            <div id="collapse-1-1" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-1">
              <div class="card-body">





              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-1" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade videoModal" id="play-video-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  

    <div class="modal-content">
    
    
      <div class="modal-body">

      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>

            <video width="100%" autoplay controls> 
  
                 <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1OmDpgVeKrz4eKiVaG8bcW5l3Q59RErTL" type="video/mp4"> -->
             </video>
              
            </div>
      </div>
      
    </div>
  </div>
</div>







                  
              </div>
            </div>
          </div>
           <div class="card">
            <div class="card-header" id="heading-1-2">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                      Hello World                   
                </a>
              </h5>
            </div>
            <div id="collapse-1-2" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-2">
              <div class="card-body">
      
              

              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-2" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
      
      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>




      <video width="100%" controls> 
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1mxfp07brOuPTmiEdFK0K384M9xMt1VKo" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>






            






              </div>
            </div>










          </div>
        </div>      
      










      </div>
    </div>






<br>

  
  <div class="card">
    <div class="card-header" id="heading-2">
      <h5 class="mb-0">
        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
          2. Data Types In C
        </a>
      </h5>
    </div>
    <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
      <div class="card-body">
        

      <div id="accordion-2">
          <div class="card">
            <div class="card-header" id="heading-b-1-1">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-b-1-1" aria-expanded="false" aria-controls="collapse-b-1-1">
                  Introduction
                </a>
              </h5>
            </div>
            <div id="collapse-b-1-1" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-b-1-1">
              <div class="card-body">





              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-1a" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-1a" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">

      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>

          
            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1B0lWP-UegV38VqyYz31jCcqYSQuRR_Ov" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>







                  
              </div>
            </div>
          

    
          <div class="card">
            <div class="card-header" id="heading-b-2-1">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-b-2-1" aria-expanded="false" aria-controls="collapse-b-2-1">
                  Access Modifiers
                </a>
              </h5>
            </div>
            <div id="collapse-b-2-1" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-b-2-1">
              <div class="card-body">





              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-2a" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-2a" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          
      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>

            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1Jgc1_4VQ1HRIrcMkkfxj_8rTEIu84mnW" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>







                  
              </div>
            </div>
          





          <div class="card">
            <div class="card-header" id="heading-b-3-1">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-b-3-1" aria-expanded="false" aria-controls="collapse-b-3-1">
                  Integer
                </a>
              </h5>
            </div>
            <div id="collapse-b-3-1" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-b-3-1">
              <div class="card-body">





              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-3a" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-3a" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">

      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>
          
            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1dmE15k1kf2-j082AON297A4YWN24SOgq" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>







                  
              </div>
            </div>



            <div class="card">
            <div class="card-header" id="heading-b-4-1">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-b-4-1" aria-expanded="false" aria-controls="collapse-b-4-1">
                  Character
                </a>
              </h5>
            </div>
            <div id="collapse-b-4-1" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-b-4-1">
              <div class="card-body">





              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-4a" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-4a" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          

      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>

            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1zIK6daS2QJCYmqOhCEG_VkMkUmVKtRwe" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>







                  
              </div>
            </div>





            <div class="card">
            <div class="card-header" id="heading-b-5-1">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-b-5-1" aria-expanded="false" aria-controls="collapse-b-5-1">
                  Float
                </a>
              </h5>
            </div>
            <div id="collapse-b-5-1" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-b-5-1">
              <div class="card-body">





              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-4a" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-4a" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">

      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>
          
            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=10o98CosByYMZCfvSPJu7Y6oN-xJvR1pC" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>







                  
              </div>
            </div>




            <div class="card">
            <div class="card-header" id="heading-b-6-1">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-b-6-1" aria-expanded="false" aria-controls="collapse-b-6-1">
                  Double
                </a>
              </h5>
            </div>
            <div id="collapse-b-6-1" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-b-6-1">
              <div class="card-body">





              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-4a" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-4a" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          

      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>

            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1x0JOOmNUSB_pKCiTFrxWN-yAmgu8h5-5" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>







                  
              </div>
            </div>






            <div class="card">
            <div class="card-header" id="heading-b-7-1">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-b-7-1" aria-expanded="false" aria-controls="collapse-b-7-1">
                  String
                </a>
              </h5>
            </div>
            <div id="collapse-b-7-1" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-b-7-1">
              <div class="card-body">





              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-5a" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-5a" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          

      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>


            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1pP5n8pmwl9NwfSy47Wj8YCt1DQSwEK6s" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>







                  
              </div>
            </div>











          </div>











      </div>
    </div>
  </div>



  <br>

  <div class="card">
    <div class="card-header" id="heading-3">
      <h5 class="mb-0">
        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
          3. Conditional Statements
        </a>
      </h5>
    </div>
    <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-3">
      <div class="card-body">
        


        
      <div id="accordion-3">
          <div class="card">
            <div class="card-header" id="heading-c-1-1">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-c-1-1" aria-expanded="false" aria-controls="collapse-c-1-1">
                  Introduction
                </a>
              </h5>
            </div>
            <div id="collapse-c-1-1" class="collapse" data-parent="#accordion-3" aria-labelledby="heading-c-1-1">
              <div class="card-body">





              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-1b" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-1b" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          
      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>

            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1Y18wn9_zKpy6xeG_SQI5rjrFHFanA5OS" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>







                  
              </div>
            </div>
          </div>




          <div class="card">
            <div class="card-header" id="heading-c-1-2">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-c-1-2" aria-expanded="false" aria-controls="collapse-c-1-2">
                  If Statement
                </a>
              </h5>
            </div>
            <div id="collapse-c-1-2" class="collapse" data-parent="#accordion-3" aria-labelledby="heading-c-1-2">
              <div class="card-body">
      
              

              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-2b" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-2b" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          
      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>


            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1rUSiBUJ6hNhSFYlyF7C-XsRlnUX2UMJp" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>






              </div>
            </div>



            <div class="card">
            <div class="card-header" id="heading-c-1-3">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-c-1-3" aria-expanded="false" aria-controls="collapse-c-1-3">
                  Else If Statement
                </a>
              </h5>
            </div>
            <div id="collapse-c-1-3" class="collapse" data-parent="#accordion-3" aria-labelledby="heading-c-1-3">
              <div class="card-body">
      
              

              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-3b" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-3b" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          
      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>

            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1PZsOccEpn_lpCipw5Jc-PxfIv436IIDR" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>






              </div>
            </div>



            <div class="card">
            <div class="card-header" id="heading-c-1-4">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-c-1-4" aria-expanded="false" aria-controls="collapse-c-1-4">
                  Else Statement
                </a>
              </h5>
            </div>
            <div id="collapse-c-1-4" class="collapse" data-parent="#accordion-3" aria-labelledby="heading-c-1-4">
              <div class="card-body">
      
              

              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-4b" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-4b" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          
      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>


            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1O0xibOSu4hwp4_eXebXfx8B7TkfQROn6" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>






              </div>
            </div>



            











      </div>
    </div>
  </div>



  <br>


  <div class="card">
    <div class="card-header" id="heading-4">
      <h5 class="mb-0">
        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
          4. Loops
        </a>
      </h5>
    </div>
    <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-4">
      <div class="card-body">
        

      <div id="accordion-4">
          <div class="card">
            <div class="card-header" id="heading-d-1-1">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-d-1-1" aria-expanded="false" aria-controls="collapse-d-1-1">
                  Introduction
                </a>
              </h5>
            </div>
            <div id="collapse-d-1-1" class="collapse" data-parent="#accordion-4" aria-labelledby="heading-d-1-1">
              <div class="card-body">





              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-1c" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-1c" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">

      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>
          
            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=15tJpAaxHaTX0UI5vfULNQKF9ehdtf5L-" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>







                  
              </div>
            </div>
          </div>



          <div class="card">
            <div class="card-header" id="heading-d-1-2">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-d-1-2" aria-expanded="false" aria-controls="collapse-d-1-2">
                  For Loop
                </a>
              </h5>
            </div>
            <div id="collapse-d-1-2" class="collapse" data-parent="#accordion-4" aria-labelledby="heading-d-1-2">
              <div class="card-body">
      
              

              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-2c" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-2c" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          

      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>

            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=15tJpAaxHaTX0UI5vfULNQKF9ehdtf5L-" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>






              </div>
            </div>


            <div class="card">
            <div class="card-header" id="heading-d-1-3">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-d-1-3" aria-expanded="false" aria-controls="collapse-d-1-3">
                  While Loop
                </a>
              </h5>
            </div>
            <div id="collapse-d-1-3" class="collapse" data-parent="#accordion-4" aria-labelledby="heading-d-1-3">
              <div class="card-body">
      
              

              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-3c" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-3c" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          

      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>

            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1lwWuQrMLBHlT4KzN08pVmUJxdhyXeBgs" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>






              </div>
            </div>


            <div class="card">
            <div class="card-header" id="heading-d-1-4">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-d-1-4" aria-expanded="false" aria-controls="collapse-d-1-4">
                  Do While Loop
                </a>
              </h5>
            </div>
            <div id="collapse-d-1-4" class="collapse" data-parent="#accordion-4" aria-labelledby="heading-d-1-4">
              <div class="card-body">
      
              

              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-4c" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-4c" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          

      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>

            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1O90kSu9Dy3MwxolXKBPGBnUav3EAvV60" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>






              </div>
            </div>


            






          










      </div>
    </div>
  </div>









  <br>



  <div class="card">
    <div class="card-header" id="heading-5">
      <h5 class="mb-0">
        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
          5. POINTERS
        </a>
      </h5>
    </div>
    <div id="collapse-5" class="collapse" data-parent="#accordion" aria-labelledby="heading-5">
      <div class="card-body">
      
      
      <div id="accordion-5">
          <div class="card">
            <div class="card-header" id="heading-e-1-1">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-e-1-1" aria-expanded="false" aria-controls="collapse-e-1-1">
                  Pointers Introduction
                </a>
              </h5>
            </div>
            <div id="collapse-e-1-1" class="collapse" data-parent="#accordion-5" aria-labelledby="heading-e-1-1">
              <div class="card-body">





              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-1d" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-1d" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          
      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>


            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1rF5VKzkuv4J3GixS2_vU9OG5UgI9xa_G" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>







                  
              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-header" id="heading-e-1-2">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-e-1-2" aria-expanded="false" aria-controls="collapse-e-1-2">
                  Pointers Declaration & Initialization
                </a>
              </h5>
            </div>
            <div id="collapse-e-1-2" class="collapse" data-parent="#accordion-5" aria-labelledby="heading-e-1-2">
              <div class="card-body">
      
              

              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-2d" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-2d" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          
      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>


            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1-HZeuSIzQTSjxozGSHhPTyIiLZqgQLqT" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>






              </div>
            </div>

            <div class="card">
            <div class="card-header" id="heading-e-1-3">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-e-1-3" aria-expanded="false" aria-controls="collapse-e-1-3">
                  Important Note 
                </a>
              </h5>
            </div>
            <div id="collapse-e-1-3" class="collapse" data-parent="#accordion-5" aria-labelledby="heading-e-1-3">
              <div class="card-body">
      
              

              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-3d" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-3d" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          

      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>

            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1Bl2ItvtxFlkwCcBULLWgzKMUB7zXZXvA" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>






              </div>
            </div>

            <div class="card">
            <div class="card-header" id="heading-e-1-4">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-e-1-4" aria-expanded="false" aria-controls="collapse-e-1-4">
                  Accessing With Pointers
                </a>
              </h5>
            </div>
            <div id="collapse-e-1-4" class="collapse" data-parent="#accordion-5" aria-labelledby="heading-e-1-4">
              <div class="card-body">
      
              

              <div class="row">
            <div class="col-md-4">
                <img src="Images/logo.png" alt="" class="img-fluid" style="height: 150px;">
                <i class="fa fa-play play-btn" data-toggle="modal" data-target="#play-video-4d" style="font-size:36px;"></i>
            </div>

        </div>


        <div class="modal fade" id="play-video-4d" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
          

      <button type="button" class="close" data-dismiss="modal">CLOSE</button>

<script>
      $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
</script>


            <video width="100%" controls >
                <source label="fullHD" src="https://drive.google.com/uc?export=download&id=1cS7Mveq4r1kI5MgpmgNvS3gUtUzFAk0X" type="video/mp4">
            </video>        
            </div>
      </div>
      
    </div>
  </div>
</div>






              </div>
            </div>

            











      </div>
    </div>
  </div>

<br>

 <form action="" method="post">
<button type="submit" name="submit" class="btn btn-primary" data-toggle="button" > Add To Account  </button>
</form>


<?php

include 'connection.php';


if(isset($_POST['submit'])){
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








 




</div>

<br>
<br>


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

        <!--Copyright-->
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

<!-- <script>
jQuery('#myModal1').on('hidden.bs.modal', function (e) {
  // do something...
  jQuery('#myModal1 video').attr("src", jQuery("#myModal1  video").attr("src"));
});
</script> -->


<script src="https://vjs.zencdn.net/7.8.4/video.js"></script>



</body>

</html>