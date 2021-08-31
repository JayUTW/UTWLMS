<?php

include 'include/Connection.php';

if (isset($_POST['btnTopic'])) {
		$TopicID=$_POST['TopicID'];
		$ProgramId=$_POST['ProgramId'];
		$TopicName=$_POST['TopicName'];
		$Topic_Description=$_POST['Topic_Description'];
		$query=mysqli_query($con,"INSERT INTO topic(TopicId, TopicName, TopicDescription, CreatedDate, ProgramID) VALUES ('$TopicID','$TopicName','$Topic_Description',now(),'$ProgramId')");
		if (mysqli_affected_rows($con)>0) {
			header('location:viewtopic.php');
		}
		else {
			echo 'Fail to Insert '.mysqli_error($con);
		}
} else {
	echo 'Fail to Post Data';
}
if (isset($_POST['updateTopic'])) {
	$TopicID=$_POST['TopicID'];
	$ProgramId=$_POST['ProgramId'];
	$TopicName=$_POST['TopicName'];
	$Topic_Description=$_POST['Topic_Description'];
	$query=mysqli_query($con,"update topic set TopicName='$TopicName', TopicDescription='$Topic_Description', CreatedDate=now(), ProgramID='$ProgramId' where TopicId='$TopicID'");
	if (mysqli_affected_rows($con)>0) {
		header('location:viewtopic.php');
	} else {
		echo 'Fail to Insert '.mysqli_error($con);
	}
} else {
	echo 'Fail to Post Data';
}
if (isset($_GET['topid'])) {
	$topid=$_GET['topid'];

	$query=mysqli_query($con,"delete from topic where TopicId='$topid'");

	if (mysqli_affected_rows($con)>0) {
		header('location:viewtopic.php');
	} else {
		echo 'Fail to Insert '.mysqli_error($con);
	}
}
?>