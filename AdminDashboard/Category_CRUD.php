<?php
include 'Conn.php';
    if(isset($_POST['btnaddcat'])){
       $catid=$_POST['catid'];
         $catname=$_POST['catname'];
        $catcode=$_POST['catcode'];
        $query=mysqli_query($con,"INSERT INTO course_category(CategoryId, Category_Name, Category_Code) VALUES ('$catid', '$catname', '$catcode')");
        if(mysqli_affected_rows($con)>0){
           header('location:showcategory.php');
        }
       else{
           echo 'Fail to insert'.mysqli_error($con);
       }
    }
    else if(isset($_POST['btnupdcat'])){
        $catid=$_POST['catid'];
        $catname=$_POST['catname'];
       $catcode=$_POST['catcode'];
        $query=mysqli_query($con,"UPDATE course_category SET Category_Name='$catname',Category_Code='$catcode' WHERE CategoryId='$catid'");

        if(mysqli_affected_rows($con)>0){
            header('location:showcategory.php');
         }
        else{
            echo 'Fail to insert'.mysqli_error($con);
        }

    }
    else if(isset($_GET['catid'])){
       $catid=$_GET['catid'];
       $query=mysqli_query($con,"delete from course_category where categoryId='$catid'");
      
       if(mysqli_affected_rows($con)>0){
        header('location:showcategory.php');
     }
    else{
        echo 'Fail to Delete'.mysqli_error($con);
    }
    }
    else
    {
        echo 'Data not Posted';
    }
?>