<?php
$courseret=mysqli_query($con,"select * from program order by fee desc limit 8");
 if(mysqli_affected_rows($con)>0){
 	while($data=mysqli_fetch_row($courseret)){
 		?>
 <div class="col-lg-3 col-md-6">
	<div class="single_course">
		<div class="course_head overlay">
			<img class="img-fluid w-100" src="Admin/<?php echo $data[3]; ?>" alt="">
			<div class="authr_meta">
				<img src="Asset/img/logo4.jpeg" alt="" class="img-responsive" style="width:50px; border-radius:50%">
				<span>Jay</span>
			</div>
		</div>
		<div class="course_content">
			<h4>
				<a href="coursedetail.php"><?php echo $data[1]; ?></a>
			</h4>
			<p><?php echo substr($data[2],0,80).'. . . . Read More'; ?></p>
			<div class="course_meta d-flex justify-content-between">
				<div>
					<span class="meta_info">
						<a href="#">
							<?php echo $data[4]; ?>
						</a>
					</span>
				</div>
				<div>
					<span class="price"><?php echo $data[5]; ?>/-</span>
				</div>
			</div>
		</div>
	</div>
</div>
 		<?php
 	}
 }
?>