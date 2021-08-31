<?php 
session_start();
echo $userid=$_SESSION['username'];
include 'include/Connection.php';
$query1=mysqli_query($con,"update admin_tbl set login_status=0 where emailid='$userid'");
if(mysqli_affected_rows($con)>0){
  session_destroy();
   header('location:index.php');
}
else{
    echo ' Fail to Destroy Dession '.mysqli_error($con);
}
?>