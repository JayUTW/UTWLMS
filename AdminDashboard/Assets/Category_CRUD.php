<?php
include 'Conn.php';

if(isset($_POST['btnAddCat'])){
    $catid=$_POST['cat_id'];
   $catname=$_POST['cat_name'];
    $catcode= $_POST['cat_code'];
$query=mysqli_query($con,"insert into course_category(CategoryId, Category_Name, Category_Code) VALUES ('$catid','$catname','$catcode')");
if(mysqli_affected_rows($con)>0){
    header('location:showcategory.php');
}
else{
    echo ' fail to insert'.myqli_error($con);
}
}
?>