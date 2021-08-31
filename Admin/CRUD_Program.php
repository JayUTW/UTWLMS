<?php

include 'include/Connection.php';

if (isset($_POST['btnProgram'])) {
	if (isset($_FILES['proimage']))
	{
		 $filename=$_FILES['proimage']['name'];
		 $CourseId=$_POST['CourseId'];
		 $ProgramId=$_POST['Program_ID'];
		 $ProgramName=$_POST['Program_Name'];
		 $Program_Duration=$_POST['Program_Duration'];
		 $Program_Fee=$_POST['Program_Fee'];
		 $ProgramDescription=$_POST['Program_Description'];
		 $filename='Assets/Program/'.$filename;
		 $tmpname=$_FILES['proimage']['tmp_name'];
		  if (move_uploaded_file($tmpname,$filename)) {

			  $query= mysqli_query($con,"INSERT INTO program(ProgramId, Program_Name, Program_Description, Program_Image,Duration,fee, CreatedDate, Category_id) VALUES ('$ProgramId','$ProgramName','$ProgramDescription','$filename','$Program_Duration','$Program_Fee',now(),'$CourseId')");
			   if (mysqli_affected_rows($con)>0) {
				   header('location:viewprograms.php');
			   }
			   else {
				   echo 'Fail to insert'.mysqli_error($con);
			   }
		  }
		  else {
			  echo 'Can not Move file to Folder';
		  }
	}
	else {
		echo 'Cant Post Imae';
	}
}
else if (isset($_POST['updateProgram'])) {
	if (isset($_FILES['proimage'])) {
		$filename=$_FILES['proimage']['name'];
		$CourseId=$_POST['CourseId'];
		$ProgramId=$_POST['Program_ID'];
		$ProgramName=$_POST['Program_Name'];
		$ProgramDescription=$_POST['Program_Description'];
		$filename='Assets/Program/'.$filename;
		$tmpname=$_FILES['proimage']['tmp_name'];
		if (move_uploaded_file($tmpname,$filename)) {

			$query= mysqli_query($con,"update program set Program_Name='$ProgramName', Program_Description='$ProgramDescription', Program_Image='$filename', CreatedDate=now(), Category_id='$CourseId' where ProgramId='$ProgramId'");
			if (mysqli_affected_rows($con)>0) {
				header('location:viewprograms.php');
				//echo 'Data Updated Successfully ';
			} else {
				echo 'Fail to insert'.mysqli_error($con);
			}
		} else {
			echo 'Can not Move file to Folder';
		}
	} else {
		echo 'Cant Post Imae';
	}
} 
else if (isset($_GET['proid'])) {
	$proid=$_GET['proid'];
	$query= mysqli_query($con,"delete from program where ProgramId='$proid'");
	if (mysqli_affected_rows($con)>0) {
		header('location:viewprograms.php');
		//echo 'Data Updated Successfully ';
	} else {
		echo 'Fail to insert'.mysqli_error($con);
	}
	} 
else {
	echo 'Fail to Post Data';
}
 
?>