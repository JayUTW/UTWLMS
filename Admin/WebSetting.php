<?php 
include 'include/Connection.php';
if (isset($_POST['btnHomeAbout']))
{
	echo $slogan=$_POST['slogan'];
	echo $SloganText=$_POST['SloganText'];
	echo $desc1=$_POST['desc1'];
	echo $descText1=$_POST['descText1'];
	echo $desc2=$_POST['desc2'];
	echo $descText2=$_POST['descText2'];
	echo $desc3=$_POST['desc3'];
	echo $descText3=$_POST['descText3'];
	$query=mysqli_query($con,"update home_setting set slogan='$slogan', slogantext='$SloganText', desc1='$desc1', desc1text='$descText1', desc2='$desc2', desc2text='$descText2', desc3='$desc3', desc3text='$descText3' where id='1'");
	if (mysqli_affected_rows($con)>0) {
		header('location:home.php?res=1');
	}
	else {
		//header('location:home.php?res=0');
		echo mysqli_error($con);
	}
}
?>