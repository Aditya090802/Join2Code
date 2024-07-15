<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?>
<head>
    <title>Join2Code</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="CSS.css">
  
    <?php
    include 'link.php';
  ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
    
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


            body{
                font-size:16px;
            }
            .carousel-inner>.item>a>img,
            .carousel-inner>.item>img {
                line-height: 1;
                width: 100%;
                height: 100%;
            }
            
            .image {
                display: block;
            }
            
            .overlay {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                transition: all 0.75s linear;
                background-color: #FFFF99;
            }
            
            .cards:hover .overlay {
                opacity: 1;
            }
            
            .text01 {
                color: darkblue;
                font-size: 20px;
                position: absolute;
                top: 50%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                white-space: nowrap;
                text-align: center;
            }
            
            .text2 {
                text-align: left;
                color: #3FBD2B;
                font-size: 25px;
                font-weight: bold;
                margin-top: 120px;
            }
            
            .headings {
                text-transform: uppercase;
                font-size: 30px;
                text-shadow: 2px 2px #000;
            }
            
            .aboutdesc {
                text-font: 20px;
                font-family: 'Raleway', sans-serif;
            }
            
            .aboutus {
                height: 350px;
            }
            
            #loader {
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #fff url('loader.gif') no-repeat center center;
                z-index: 9999999;
            }
            
            .carousel-inner {
                position: relative;
                width: 100%;
                overflow: hidden;
                height: 70vh;
            }
            
            .socila-links a {
                font-size: 20px;
                margin: 10px;
            }
            
            .cards {
                text-align: center;
                background: linear-gradient(45deg, lightgreen, transparent);
                padding: 20px 10px;
                box-shadow: 1px 1px 10px #cccccc94;
                height: 250px;
                margin: 10px 0px;
                border-radius: 8px;
            }
            
            .cards:hover {
                background: linear-gradient(45deg, #006400, #6dd5ed);
                transition: all 0.6s;
            }
            
            h4.shadow {
                background: #00FF00;
                width: max-content;
                text-align: center;
                padding: 10px;
                margin: 0;
                color: #202020;
                border-radius: 4px;
                box-shadow: 1px 1px 10px #ccc;
            }
            
            .navbar {
                margin-bottom: 0 !important;
            }
            
            @media only screen and (max-width: 600px) {
                .carousel-inner {
                    position: relative;
                    width: 100%;
                    overflow: hidden;
                    height: 30vh;
                }
            }
            
            #heading {
                color: #FF0000;
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
</head>

<body>

     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

<div class="container">
    <a class="navbar-brand" href="home_page.php"><img src="logo.png" alt="Logo" style="width: 130px; left:10%;" ></a>
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

            <a>
                <div id="profileImage"> </div>
            </a>

            <li class="nav-item dropdown profile-link">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">



                    <?php  $name = $_SESSION['username'] ?>





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
                    <!-- <a class="dropdown-item" href="#">Edit Profile</a> -->
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



    <div class="jumbotron text-center" style="border-radius: 12px; margin-top:40px">
        <div class="col-lg-12 col-md-12 col-sm-12" style="background-color: greenyellow;">
            <h3>Topics</h3>
            <p>Topic help you to select the accurate content as you want </p>
        </div>
    </div>



    <div class="jumbotron">
        <div class="container">

            <div class="panel-group">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align: center;">Topic of Fundamental of C++ languages
                        </h3>
                    </div>
                    <div class="panel-body">
                        <!----  <h4 class="shadow">Fundamental of C programming language</h4> -->
                        <div class="row">

                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="cards">
                                    <a href="videopage.php">
                                        <center><img class="b-lazy img-responsive" id="fadein" style="width:250px; height: 220px;" src="https://drive.google.com/uc?export=download&id=1c2ZDwha2lQg_W_WBy-6yq9WSLRSq2mLM" alt="Basci of C">
                                            <div class="overlay">
                                                <div class="text01">
                                                    <ul>Basic of C++
                                                        <li>keywords</l>
                                                            <li>Indentifier</li>
                                                            <li>Operator</li>
                                                            <li>variable</li>
                                                            <li>Many more..</li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </center>

                                        <h4 id="heading">Basic Element of C++</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="cards">
                                    <a href="videopage.php">
                                        <center><img class="b-lazy img-responsive" style="width:250px; height: 220px;" src="https://drive.google.com/uc?export=download&id=1qtxkMSE8bwPt9oNY97A--OQit4cEBecK" alt="">
                                            <div class="overlay">
                                                <div class="text01">
                                                    <ul>Hello world program/implementation</ul>
                                                </div>
                                            </div>
                                        </center>
                                        <h4 id="heading">Hello World Program</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="cards">
                                    <a href="videopage.php">
                                        <center>
                                            <div class="overlay">
                                                <div class="text01">
                                                    <ul>Take input of all type like

                                                        <li>Integer</li>
                                                        <li>character</li>
                                                        <li>Float</li>
                                                        <li>String</li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <img class="b-lazy img-responsive" style="width:250px; height: 220px;" src="https://drive.google.com/uc?export=download&id=1zYUDphgeqTxaro0DjjnUSNy_M_qmh6V6" alt=""></center>
                                        <h4 id="heading">Input/Output</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="cards">
                                    <a href="videopage.php">
                                        <center>
                                            <div class="overlay">
                                                <div class="text01">
                                                    <ul>Conditions statement in C++
                                                        <li>keywords</l>
                                                            <li>If</li>
                                                            <li>Else</li>
                                                            <li>Else if</li>


                                                    </ul>
                                                </div>
                                            </div>
                                            <img class="b-lazy img-responsive" style="width:250px; height: 220px;" src="https://drive.google.com/uc?export=download&id=1s7XIvn9JhE--tND8AvLu0W6lCXO6buJH" alt=""></center>
                                        <h4 id="heading">Conditional Statement</h4>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="cards">
                                    <a href="videopage.php">
                                        <center>
                                            <div class="overlay">
                                                <div class="text01">
                                                    <ul>Loop concept in C++
                                                        <li>For</l>
                                                            <li>While</li>
                                                            <li>Do while</li>


                                                    </ul>
                                                </div>
                                            </div><img class="b-lazy img-responsive" style="width:250px; height: 220px;" src="https://drive.google.com/uc?export=download&id=1JKN1TmHRmqYr1B6bj4sqAAcJ8qg7uYCv" alt=""></center>
                                        <h4 id="heading"> Loop Concept</h4>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="cards">
                                    <a href="videopage.php">
                                        <center>
                                            <div class="overlay">
                                                <div class="text01">
                                                    <ul>conditional operaotr
                                                        <li>For</l>
                                                            <li>:</li>
                                                            <li>?</li>


                                                    </ul>
                                                </div>
                                            </div><img class="b-lazy img-responsive" style="width:250px; height: 220px;" src="cppconditionaloperator.jpg" alt=""></center>
                                        <h4 id="heading"> conditional operator</h4>
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="cards">
                                    <a href="videopage.php">
                                        <center>
                                            <div class="overlay">
                                                <div class="text01">
                                                    <ul>switch case
                                                        <li>character</l>
                                                            <li>integer</li>
                                                            


                                                    </ul>
                                                </div>
                                            </div><img class="b-lazy img-responsive" style="width:250px; height: 220px;" src="https://drive.google.com/uc?export=download&id=1rYO_j2iF47b7PHFXHYYX89ydCtQX7tL_" alt=""></center>
                                        <h4 id="heading"> switch case</h4>
                                </div>
                            </div>

                            



                        </div>
                        <hr>
                        <!--------other are commnet-->
                        <!---<h4 class="shadow">Bachelor of Technology</h4>
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="cards">
                                    <a href="https://my.rkgitlms.in/course/index.php?categoryid=3">
                                        <center><img class="b-lazy img-responsive" style="width:270px" src="lmsg/cse.jpg" alt="B-TECH"></center>
                                        Computer Science &amp; Engineering</a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="cards">
                                    <a href="https://my.rkgitlms.in/course/index.php?categoryid=25">
                                        <center><img class="b-lazy img-responsive" style="width:300px" src="lmsg/it.jpg" alt="M-TECH"></center>
                                        Information Technology</a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="cards">
                                    <a href="https://my.rkgitlms.in/course/index.php?categoryid=13">
                                        <center><img class="b-lazy img-responsive" style="width:270px" src="lmsg/ece.jpg" alt=""></center>
                                        Electronics &amp; Communication Engineering</a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="cards">
                                    <a href="https://my.rkgitlms.in/course/index.php?categoryid=9">
                                        <center><img class="b-lazy img-responsive" style="width:300px" src="lmsg/eee.jpg" alt="B-TECH"></center>
                                        Electrical Electronics Engineering</a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="cards">
                                    <a href="https://my.rkgitlms.in/course/index.php?categoryid=19">
                                        <center><img class="b-lazy img-responsive" style="width:300px" src="lmsg/me.jpg" alt="M-TECH"></center>
                                        Mechanical Engineering</a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="cards">
                                    <a href="https://my.rkgitlms.in/course/index.php?categoryid=21">
                                        <center><img class="b-lazy img-responsive" style="width:300px" src="lmsg/ce.jpg" alt=""></center>
                                        Civil Engineering</a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="cards">
                                    <center><img class="b-lazy img-responsive" style="width:300px" src="lmsg/a&h.jpg" alt=""></center>
                                    Applied Sciences &amp; Humanities
                                </div>
                            </div>



                        </div>
                        
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="shadow">Master of Technology</h4>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="cards">
                                            <center><img class="b-lazy img-responsive" style="width:300px" src="lmsg/ece1.jpg" alt=""> </center>
                                            Electronics &amp; Communication Engineering
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="shadow">Master of Business Administration</h4>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="cards">
                                            <a href="https://my.rkgitlms.in/course/index.php?categoryid=17">
                                                <center><img class="b-lazy img-responsive" style="width:300px" src="lmsg/mba.jpg" alt=""> </center>
                                                Master of Business Administration</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <hr>
                        ---------->






                    </div>

                </div>
            </div>
        </div>

    </div>


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






</body>

</html>