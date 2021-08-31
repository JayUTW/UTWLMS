<?php 
session_start();
    include 'include/Connection.php';
    if(isset($_POST['btnlogin'])){
        $userid= $_POST['username'];
        $password= $_POST['password'];
        $query=mysqli_query($con,"select * from admin_tbl where emailid='$userid' and password ='$password'");
        if(mysqli_affected_rows($con)>0){
          $query1=mysqli_query($con,"update admin_tbl set login_status=1 where emailid='$userid'");
           if(mysqli_affected_rows($con)>0){
               $_SESSION['username']=$userid;
              header('location:Dashboard.php');
           }
           else{
               echo ' You have Already Login to Other System';
           }
        }
        else{
            echo 'Fail to Login '.mysqli_error($con);
        }
    }
?>