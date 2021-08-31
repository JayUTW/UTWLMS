<?php 
include 'include/sidebar.php';
include 'include/Header.php';
?>
    <div class="container-fluid">
    <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Add Course</h1>

        <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="CRUD_Category.php" >
                                <div class="form-group">
                                <?php 
                                $catid="";
                                    $query=mysqli_query($con,"select * from category order by category_id desc limit 1");
                                     if(mysqli_affected_rows($con)>0){
                                        $row=mysqli_fetch_array($query);
                                        $cid=$row[0];
                                        $part1=substr($cid,0,6);
                                        $part2=substr($cid,6);
                                        if($part2<9){
                                            $part2++;
                                            $catid=$part1.'000'.$part2;
                                        }
                                        else if($part2<99){
                                            $part2++;
                                            $catid=$part1.'00'.$part2;
                                        }
                                        else if($part2<999){
                                            $part2++;
                                            $catid=$part1.'0'.$part2;
                                        }
                                     }
                                     else{
                                        $catid="UTWCAT0001";
                                     }
                                ?>
                                    <input type="text" class="form-control form-control-user" name ="catid" value="<?php echo $catid;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name ="CategoryName" placeholder="Category Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name ="CategoryCode" placeholder="Category Code" required>
                                </div>
                                <button type="submit" name="addcourse" class="btn btn-primary btn-user btn-block">
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