<?php
include 'Conn.php';
if (isset($_POST['btnaddtopic'])) {
	$proid=$_POST['progid'];
	$topic=$_POST['topid'];
	$topicname=$_POST['topicname'];
	$topicdetails=$_POST['topicdetails'];
	$query=mysqli_query($con,"INSERT INTO `topic_details`(TopicDetailId, TopicName, Topic_Details, programid, created_date) VALUES ('$topic','$topicname','$topicdetails','$proid',now())");
	if (mysqli_affected_rows($con)>0) {
		header('location:showtopic.php');	} else {
		echo 'Fail to insert'.mysqli_error($con);
	}
	} else if (isset($_POST['btnupdtopic'])) {
		$proid=$_POST['progid'];
		$topic=$_POST['topid'];
		$topicname=$_POST['topicname'];
		$topicdetails=$_POST['topicdetails'];
		$query=mysqli_query($con,"UPDATE topic_details SET TopicName='$topicname',Topic_Details='$topicdetails',programid='$proid', created_date= now() WHERE TopicDetailId='$topic'");

	if (mysqli_affected_rows($con)>0) {
		header('location:showtopic.php');
	} else {
		echo 'Fail to insert'.mysqli_error($con);
	}

} else if (isset($_GET['catid'])) {
	$catid=$_GET['catid'];
	$query=mysqli_query($con,"delete from course_category where categoryId='$catid'");

	if (mysqli_affected_rows($con)>0) {
		header('location:showcategory.php');
	} else {
		echo 'Fail to Delete'.mysqli_error($con);
	}
} else {
	echo 'Data not Posted';
}
?>