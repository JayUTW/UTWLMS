<?php
include 'Admin/include/Connection.php';
	if (isset($_POST['btncontact']))
		{
			$email = $_POST['email'];
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$message =$_POST['message'];
			$query=mysqli_query($con,"insert into customer_query(cname,email,phone,message) values('$name','$email','$phone','$message')");
			if (mysqli_affected_rows($con)>0) {
				header('location:contact.php?res=1');
			}
			else {
				echo 'Fail to Insert'.mysqli_error($con);
			}
		}
    

   

?>