<?php 
$host="localhost";
$user="root";
$password="";
$dbname="utw_elearningmgmtsys";
$con=mysqli_connect($host,$user,$password,$dbname);
if(!$con){
    echo mysqli_error($con);
}
?>