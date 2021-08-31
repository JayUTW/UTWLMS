<?php 
include 'include/sidebar.php';
include 'include/Header.php';
?>
    <div class="container-fluid">
    <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Home Page Setting</h1>
        
	<form class="user" method="post" action="WebSetting.php">
		<div class="form-group row">
			<div class="col-sm-6 mb-3 mb-sm-0">
				<input type="text" class="form-control " name="slogan" placeholder="Your Slogan">
			</div>
			<div class="col-sm-6">

				<input type="text" class="form-control " name="SloganText" placeholder="Your Text">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4 mb-3 mb-sm-0">
				<input type="text" class="form-control " name="desc1" placeholder="Description1">
			</div>
			<div class="col-sm-8">

				<input type="text" class="form-control " name="descText1" placeholder="Write about your COmpnay">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4 mb-3 mb-sm-0">
				<input type="text" class="form-control " name="desc2" placeholder="Description1">
			</div>
			<div class="col-sm-8">

				<input type="text" class="form-control " name="descText2" placeholder="Write about your COmpnay">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4 mb-3 mb-sm-0">
				<input type="text" class="form-control " name="desc3" placeholder="Description1">
			</div>
			<div class="col-sm-8">

				<input type="text" class="form-control " name="descText3" placeholder="Write about your COmpnay">
			</div>
		</div>
		<!--<div class="form-group row">
			<div class="col-sm-12 mb-3 mb-sm-0">
				<input type="text" class="form-control"
				name="TopicName" placeholder="Program Name" required>
			</div>

		</div>
		<div class="form-group">
			<textarea class="form-control" name="Topic_Description" id="description"
			placeholder="Write about Your Course" required></textarea>
			<script>
	CKEDITOR.replace("description");
	</script>
		</div>-->
		<button type="submit" name="btnHomeAbout" class="btn btn-primary btn-user btn-block">
			Home Page Setting
		</button>
		<hr>

	</form>
<?php 

	if (isset($_GET['res'])) {
		$res=$_GET['res'];
		 if($res==1){
		 	?>
	<div class ="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Data has Been Updated SUccessfully !!</strong>
	</div>
		 	<?php
		 }
		 else {
		 	?>
	<div class ="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
Fail to Update Data !!</strong>
	</div>
		 	<?php
		 }
	}?>
    </div>
<?php
    include 'include/Footer.php';
?>  