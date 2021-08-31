<?php 
include 'Conn.php';
if(isset($_POST['btnaddpro'])){
     $catid=$_POST['catid'];
     $proid=$_POST['proid'];
     $proname=$_POST['proname'];
     $duration=$_POST['duration'];
     $fee=$_POST['fee'];
     $description=$_POST['description'];
     $query=mysqli_query($con,"INSERT INTO course_program(program_id, program_name, program_description, duration, coursefee, course_id) VALUES ('$proid','$proname','$description','$duration','$fee','$catid')");
     if(mysqli_affected_rows($con)>0){
       header('location:showprogrames.php');
     }
     else{
         echo 'Fail to Insert '.mysqli_error($con);
     }
}
else if(isset($_POST['btneditpro'])){
  $catid=$_POST['catid'];
     $proid=$_POST['proid'];
     $proname=$_POST['proname'];
     $duration=$_POST['duration'];
     $fee=$_POST['fee'];
     $description=$_POST['description'];
  $query=mysqli_query($con,"UPDATE course_program SET program_name='$proname',program_description='$description',duration='$duration',coursefee='$fee',course_id='$catid' WHERE program_id='$proid'");
  if(mysqli_affected_rows($con)>0){
    header('location:showprogrames.php');
  }
  else{
      echo 'Fail to Update '.mysqli_error($con);
  }

}

else if(isset($_GET['proid'])){
  $proid=$_GET['proid'];
  $query=mysqli_query($con,"delete from course_program where program_Id='$proid'");
 
  if(mysqli_affected_rows($con)>0){
   header('location:showprogrames.php');
}
else{
   echo 'Fail to Delete'.mysqli_error($con);
}
}
?>