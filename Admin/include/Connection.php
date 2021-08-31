<?php 

$con=mysqli_connect("localhost","root","","utw_lmsv1");
if(!$con){
    echo 'Fail to Establised Connection '.mysqli_error($con);
}
?>