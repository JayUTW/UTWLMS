<?php 
include 'include/sidebar.php';
include 'include/Header.php';
?>
    <div class="container-fluid">
    <!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">View Programs
		<a href="addprograms.php" style="float:right;font-size:15px;">Add Program</a></h1>
	<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>S.No</th>
					<th>Program Id</th>
					<th>Program Name</th>
					<th>Description</th>
					<th>Duration</th>
					<th>Fee</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
	$query=mysqli_query($con,"select * from Program");
	if (mysqli_affected_rows($con)>0) {
		$i=1;
		while ($row=mysqli_fetch_array($query)) {

	?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo substr($row[2],0,75).'... Read More'; ?></td>
					<td><?php echo $row[4]; ?></td>
					<td><?php echo $row[5]; ?></td>
					<td><img src="<?php echo $row[3]; ?>" class="img-thumbnail" width="100px"></td>
					<td>
						<a href="editprogram.php?proid=<?php echo $row[0]; ?>">
							<i class='fas fa-edit'></i></a> |
						<a href="CRUD_Program.php?proid=<?php echo $row[0]; ?>">
						<i class='fas fa-trash'></i></a></td>

				</tr>
				<?php
	$i++;
				}

				} else {
	echo 'Data Not Found';
				}
	?>
			</tbody>
		</table>
	</div>
    </div>
<?php
    include 'include/Footer.php';
?>