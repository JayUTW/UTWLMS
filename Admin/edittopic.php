<?php
include 'include/sidebar.php';
include 'include/Header.php';
?>
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Add Topic</h1>

	<form class="user" method="post" action="CRUD_Topic.php">
		<div class="form-group row">
			<div class="col-sm-6 mb-3 mb-sm-0">
				<select name="ProgramId"  class="form-control ">
					<?php
					$query1=mysqli_query($con,"select * from program");
					if (mysqli_affected_rows($con)>0) {
						while ($row=mysqli_fetch_array($query1)) {
							echo '<option value="'.$row[0].'">'.$row[1].'</option>';
						}
					} else {
						echo '<option> No Data Found</option>';
					}
					?>
				</select>
			</div>
			<div class="col-sm-6">
				<?php
				$topid=$_GET['topid'];
				$query=mysqli_query($con,"select * from topic where topicid ='$topid'");
				if (mysqli_affected_rows($con)>0) {
					$row=mysqli_fetch_array($query);
					
					}
				?>
				<input type="text" class="form-control " name="TopicID" value="<?php echo $topid; ?>" readonly>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-12 mb-3 mb-sm-0">
				<input type="text" class="form-control"
				name="TopicName" value="<?php echo $row[1]; ?>" required>
			</div>

		</div>
		<div class="form-group">
			<textarea class="form-control" name="Topic_Description" id="description"
		 required> <?php echo $row[2]; ?></textarea>
			<script>
				CKEDITOR.replace("description");
			</script>
		</div>
		<button type="submit" name="updateTopic" class="btn btn-primary btn-user btn-block">
			Add Topics
		</button>
		<hr>

	</form>
</div>
<?php
include 'include/Footer.php';
?>