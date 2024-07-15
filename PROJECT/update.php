<?php
    ob_start(); 
    session_start();
?>
<!DOCTYPE html>

<html>

<head>

<title>  Registration Form </title>

<?php
    include 'link.php';
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

<style>
h1{
    text-align: center;
    border-bottom: 2px solid green;
}

 body{
    background-color: #e4ebe6;
}

.input-group-addon{color:#ff0000; background-color: #fff;}



</style>

</head>

<body>
<div class="container">

<br>

<h1 class="text-success">
    Update Form
</h1>

<br>

<?php

include 'connection.php';


$ids = isset($_GET['id']) ? $_GET['id'] : '';

$showquery = "select * from registration_deatils where id='$ids' ";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_assoc($showdata);


if(isset($_POST['submit']))
        {

    
  $name =  $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $dob = $_POST['dob'];

        
                $query = "update registration_deatils set name='$name', email='$email', phone='$phone', dob='$dob' where email='$email' ";



                $res = mysqli_query($con,$query);
            
                if($res){
                    
                    
                    ?>

                    <script>
                        alert('Data Updated Successfully');
                    </script>

                   
                    
                        <?php

header ("Location: logout.php");



                    
                    
                }
        
                else{
                    ?>
        
                    <script>
                        alert('Data Not Updated Successfully');
                    </script>
        
                    <?php
                } 
            }
        

    
    

    



?>


<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
    
    <div class="form-group">
        <label for="user"> Enter Your Name </label>
        <input type="text" name="name" id="user" class="form-control" placeholder="Enter Name" value="<?php echo $arrdata['name']; ?>" required>
    </div>




    <div class="form-group">
        <label for="email"> Enter Your Email </label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email"  value="<?php echo $arrdata['email']; ?>" required>
    </div>


    <div class="form-group">
        <label for="phone"> Enter Your Mobile No. </label>
        <input type="phone" name="phone" id="phone" class="form-control" placeholder="Enter Your Mobile No." value="<?php echo $arrdata['phone']; ?>"  required>
    </div>

    

    <div class="form-group">
    <label for="dob"> Enter Your D.O.B </label>
    <br>
    <input type="date" id="dob" name="dob"  value="<?php echo $arrdata['dob']; ?>" required>
    </div>

    <button type="submit" name="submit" class="btn btn-primary btn-lg" data-toggle="button" > Update  </button>

    <br>
    <br>


</form>



</div>


</body>



</html>

