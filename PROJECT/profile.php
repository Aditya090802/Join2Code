<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        include 'link.php';
        include 'connection.php';
    ?>

    <title>J2C Profile</title>

<style>
    html{
      scroll-behavior:smooth;
    }


    body {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        }
        
        .emp-profile {
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
        
        .profile-img {
            text-align: center;
        }
        
        .profile-img img {
            width: 70%;
            height: 100%;
        }
        
        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }
        
        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }
        
        .profile-head h5 {
            color: #333;
        }
        
        .profile-head h6 {
            color: #0062cc;
        }
        
        .profile-edit-btn {
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }
        
        .proile-rating {
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }
        
        .proile-rating span {
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }
        
        .profile-head .nav-tabs {
            margin-bottom: 5%;
        }
        
        .profile-head .nav-tabs .nav-link {
            font-weight: 600;
            border: none;
        }
        
        .profile-head .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 2px solid #0062cc;
        }
        
        .profile-work {
            padding: 14%;
            margin-top: -15%;
        }
        
        .profile-work p {
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }
        
        .profile-work a {
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }
        
        .profile-work ul {
            list-style: none;
        }
        
        .profile-tab label {
            font-weight: 600;
        }
        
        .profile-tab p {
            font-weight: 600;
            color: #0062cc;
        }


        #profileImage{
    background-color:#fff;
    border:2px solid white;    
    height:70px;
    border-radius:50%;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
    width:70px;
    padding-top:14px;
    color: white;
    background-color: green;
    font-size: 25px;
    margin-left: 40px;
}




</style>

</head>

<body>



<br>
<br>

<h1 style="text-align: center; color: antiquewhite;"><script> document.write("Welcome  "+sessionStorage.getItem("name")); </script> </h1>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img" id="profile_pic">
                        
                    <a> <div id="profileImage"> </div> </a>

        


        
         
        

      
    
    
      <script type="text/javascript">
        $(document).ready(function() {
            var firstName = sessionStorage.getItem("name");

            var matches = firstName.match(/\b(\w)/g);
            var acronym = matches.join('');

            var profileImage = $('#profileImage').text(acronym);
            
        });
    </script>



                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5 id=user_name>
                        
                       

                        <script>
                        document.write(sessionStorage.getItem("name"));
                        </script>
                      
                        </h5>
                      
                        <br>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About You</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <p>Useful link</p>
                        <a href="home_page.php">Home Page</a><br/>
                        <p>We Also Provides Courses Like</p>
                        <a href="c_course.php">C Language </a><br/>
                        <a href="">C++ Language </a><br/><br/>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p id="username"> <script> document.write(sessionStorage.getItem("name")); </script> </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p id="Email"> <script> document.write(sessionStorage.getItem("email")); </script> </p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone No</label>
                                </div>
                                <div class="col-md-6">
                                    <p id="Email"> <script> document.write(sessionStorage.getItem("phoneno")); </script> </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label> D.O.B </label>
                                </div>
                                <div class="col-md-6">
                                    <p id="Email"> <script> document.write(sessionStorage.getItem("dob")); </script> </p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Current Courses</label>
                                </div>
                                <div class="col-md-6">
                                    <p id="course"> 
                                    
                                       
                                            <script> document.write(sessionStorage.getItem("course")+", "+sessionStorage.getItem("course1")); </script>
                                            
                                           
                                            

                                        

                                     </p>
                                </div>
                            </div>

                            <br>

                            <div class="row" style="text-align: center;">
                           
                           <?php
                           if(isset($_SESSION['id']))
                           $row=$_SESSION['id'];
                            else
                            $row=8;
                           
                          echo" <a href=' update.php? id=$row '>  ";
                            ?>
                                 <button type="button" class="btn btn-success btn-rounded ">Update Profile</button>
                            </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>








</body>



</html>