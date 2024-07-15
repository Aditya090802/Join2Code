<!DOCTYPE html>

<html>

<head>

<?php
echo "<link rel='stylesheet' type='text/css' href='style/style.css'>";
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

</head>

<body>
<div class="main-div">
    <h1> List Of Registered Students  </h1>

<div class="center-div">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th> Id </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> D.O.B </th>
                    <th> Mobile No. </th>
                    <th colspan="2"> Opeartion </th>
                </tr>
            </thead>

            <tbody>

                <?php
                    include 'connection.php';
    
                    $select_query = "select * from registration_deatils";
                    $query = mysqli_query($con,$select_query);
                    while($res = mysqli_fetch_array($query)){
                        echo"
                            <tr>
                                <td>  ". $res['id'] ."  </td>
                                <td>  ". $res['name'] ." </td>
                                
                                <td> <span class='email-style'> ".$res['email'] ." </span> </td>


                                <td> ". $res['dob'] ." </td>
                                
                                <td> ".$res['phone'] ." </td>

                                <td> <a href='update.php? id= $res[id]' data-toggle='tooltip' data-placement='top' title='UPDATE'><i class='fa fa-edit' aria-hidden='true'></i> </a></td>
                                <td> <a href='delete.php?idth= $res[id] ' data-toggle='tooltip' data-placement='top' title='DELETE'><i class='fa fa-trash' aria-hidden='true'></a></i> </td>

                            </tr>
                            ";
                    }





                ?>


            </tbody>

        </table>
    </div>

</div>


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>


</html>

<?
include 'connection.php';

?>