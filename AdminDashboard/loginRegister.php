<?php 
session_start();
include 'Conn.php';
if(isset($_POST['btnreg'])){
     $pics=$_FILES['pics']['name'];
     $uname =$_POST['uname'];
     $phone =$_POST['phone'];
     $email =$_POST['email'];
     $password =md5($_POST['password']);
     $cpassword =md5($_POST['cpassword']);
     $otp=round(rand(100000,999999));
     if($password==$cpassword){
        $pics='Assets/images/'.$pics;
        $tmpname=$_FILES['pics']['tmp_name'];
        if(move_uploaded_file($tmpname,$pics)){
            $query=mysqli_query($con,"insert into admin_tbl(Admin_Name, Admin_Password, Admin_Email, Picture, Created_Date, Updated_Date, OTP, Login_Status, PhoneNo) values('$uname','$password','$email','$pics',now(),now(),'$otp','0','$phone')");
            if(mysqli_affected_rows($con)>0){
               header('location:index.php');
            }
            else{
                echo mysqli_error($con);
            }
        } 
     }
     else{
         echo 'Password Didnt Match';
     }

}
else if(isset($_POST['btnlogin'])){
 $email_phn=$_POST['user'];
 $password=md5($_POST['password']);
$query=mysqli_query($con,"select * from admin_tbl where (admin_email='$email_phn' and admin_password='$password') or (phoneno='$email_phn' and admin_password='$password')");
echo $r=mysqli_num_rows($query);
if(mysqli_affected_rows($con)>0){ 
    $_SESSION['user']=$email_phn;
    header('location:dashboard.php');
}
else{
header('location:index.php');
    echo 'Fail to Login'.mysqli_error($con);
}
}
else{
    echo ' Data not posted';
}
?>