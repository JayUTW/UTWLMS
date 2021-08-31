<?php 
include 'include/Connection.php';

 if(isset($_POST['addcourse'])){
     $catid=$_POST['catid'];
     $categoryName=strtoupper( $_POST['CategoryName']);
     $categoryCode=$_POST['CategoryCode'];

     $query=mysqli_query($con,"INSERT INTO category(Category_Id, Category_Name, Category_Code) VALUES ('$catid','$categoryName','$categoryCode')");

     if(mysqli_affected_rows($con)>0){
        header('location:viewcourse.php');
     }
     else{
         echo 'Fail to Insert '.mysqli_error($con);
     }
 }
 if(isset($_POST['updatecourse']))
 {
	 $catid=$_POST['catid'];
	 $categoryName=$_POST['CategoryName'];
	 $categoryCode=$_POST['CategoryCode'];
	 $query=mysqli_query($con,"update  category set  Category_Name ='$categoryName', Category_Code ='$categoryCode' where Category_Id='$catid'");

	 if (mysqli_affected_rows($con)>0) {
		 header('location:viewcourse.php');
	 } else {
		 echo 'Fail to Insert '.mysqli_error($con);
	 }
 }
if(isset($_GET['catid']))
{
	$catid=$_GET['catid'];
	
	$query=mysqli_query($con,"delete from  category where Category_Id='$catid'");

	if (mysqli_affected_rows($con)>0) {
		header('location:viewcourse.php');
	} else {
		echo 'Fail to Insert '.mysqli_error($con);
	}
}
?>