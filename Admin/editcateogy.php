<?php
include 'include/sidebar.php';
include 'include/Header.php';
?>
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Course Category</h1>

	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div class="p-5">
				<div class="text-center">
					
				</div>
				<form class="user" method="post" action="CRUD_Category.php" >
					<div class="form-group">
						<?php
						$catid=$_GET['catid'];
						$query=mysqli_query($con,"select * from category where category_id ='$catid'");
						if (mysqli_affected_rows($con)>0) {
							$row=mysqli_fetch_array($query);
						}
						?>
						<input type="text" class="form-control form-control-user" name ="catid" value="<?php echo $catid; ?>" readonly>
					</div>
					<div class="form-group">
						<input type="text" class="form-control form-control-user" name ="CategoryName" value="<?php echo $row[1]; ?>" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control form-control-user" name ="CategoryCode" value="<?php echo $row[2]; ?>" required>
					</div>
					<button type="submit" name="updatecourse" class="btn btn-primary btn-user btn-block">
						Add Course
					</button>
					<hr>

				</form>
			</div>
		</div>
		<div class="col-lg-1"></div>
	</div>
</div>
<?php
include 'include/Footer.php';
?>