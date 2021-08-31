<?php 

include 'Conn.php';


if(isset($_POST['btnAddpro'])){

     $cat_id = $_POST['catid'];
     $pro_id = $_POST['pro_id'];
     $pro_name =$_POST['pro_name'];
    $pro_code =$_POST['pro_code'];
    $query= mysqli_query($con,"INSERT INTO course_programes(Course_Program_Id, Course_Program_Name, CategoryId, Program_Details) VALUES ('$pro_id','$pro_name','$cat_id','$pro_code')");
    if(mysqli_affected_rows($con)>0){
        header('location:showprogrames.php');
    }
    else{
        echo 'Fail to Insert';
    }
}
?>