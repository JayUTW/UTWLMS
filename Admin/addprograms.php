<?php 
include 'include/sidebar.php';
include 'include/Header.php';
?>
    <div class="container-fluid">
    <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Add Programs</h1>
        
	<form class="user" method="post" action="CRUD_Program.php" enctype="multipart/form-data">
		<div class="form-group row">
			<div class="col-sm-6 mb-3 mb-sm-0">
				<select name="CourseId"  class="form-control ">
					<?php 
					$query1=mysqli_query($con,"select * from category");
					 if(mysqli_affected_rows($con)>0){
					 	while($row=mysqli_fetch_array($query1))
					 	{
							 echo '<option value="'.$row[0].'">'.$row[1].'</option>';
					 	}
					 }
					 else {
						 echo '<option> No Data Found</option>';
					 }
					?>
				</select>
			</div>
			<div class="col-sm-6">
				<?php
				$proid="";
				$query=mysqli_query($con,"select * from Program order by ProgramId desc limit 1");
				if (mysqli_affected_rows($con)>0) {
					$row=mysqli_fetch_array($query);
					$cid=$row[0];
					$part1=substr($cid,0,6);
					$part2=substr($cid,6);
					if ($part2<9) {
						$part2++;
						$proid=$part1.'000'.$part2;
					} else if ($part2<99) {
						$part2++;
						$proid=$part1.'00'.$part2;
					} else if ($part2<999) {
						$part2++;
						$proid=$part1.'0'.$part2;
					}
				} else {
					$proid="UTWPRO0001";
				}
				?>
				<input type="text" class="form-control " name="Program_ID" value="<?php echo $proid; ?>" readonly>
			</div>
		</div>
		
		<div class="form-group row">
			<div class="col-sm-6 mb-3 mb-sm-0">
				<input type="text" class="form-control"
				name="Program_Name" placeholder="Program Name" required>
			</div>
			<div class="col-sm-6">
				<input type="file" class="form-control" name="proimage"  required>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-6 mb-3 mb-sm-0">
				<input type="text" class="form-control"
				name="Program_Duration" placeholder="Program Duration" required>
			</div>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="Program_Fee" placeholder="Fee" required>
			</div>
		</div>
		<div class="form-group">
			<textarea class="form-control" name="Program_Description" id="description"
			placeholder="Write about Your Course" required></textarea>
			<script>
				CKEDITOR.replace("description");
			</script>
		</div>
		<button type="submit" name="btnProgram" class="btn btn-primary btn-user btn-block">
			Add Program
		</button>
		<hr>

	</form>
    </div>
<?php
    include 'include/Footer.php';
?>