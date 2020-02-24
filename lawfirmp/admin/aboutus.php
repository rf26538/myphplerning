<?php 
include('header.php');
$sql = "SELECT * FROM aboutus";
$stmt = $conn->prepare($sql);
$stmt->execute();
// session_start();
$sql = "SELECT * FROM team";
$team = $conn->prepare($sql);
$team->execute();

?>


<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            About Us Page <small>About us/Team.</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active">about us/ team</li>
        </ol> 
    </div>
    <div id="page-inner"> 
    <a class="waves-effect waves-light btn" href="addaboutus.php">Add About Us Content</a>
        <div class="row">
            <div class="col-md-12">
               <!-- Advanced Tables -->
                <div class="card">
                    <?php
                        if(!empty($_SESSION['message'])){
                    ?>
                        <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <?=$_SESSION['message']?>
                        </div>
                    <?php
                        unset($_SESSION['message']);
                        }
                    ?>
                    <div class="card-action">
                         About Us Data
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Header</th>
                                        <th>Content</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $row['heading']?></td>
                                        <td><?php echo $row['des']?></td>
                                        <td class="center">
                                            <?php if($row['status'] == '1'){
                                                echo "<span class='badge green'>Active</span>";
                                            }else{
                                                echo "<span class='badge red'>Inactive</span>";
                                            }?>
                                        </td>
                                        <td>
                                            <a href="editaboutus.php?id=<?=$row['id']?>">Edit</a> <a href="deleteaboutus.php?id=<?=$row['id']?>" onclick="return confirm('Are you sure to delete this item')">Delete</a>
                                        </td>
                                    </tr>
                                    <?php $i++; }?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
        <h2><strong>Team</strong></h2>
        <p></p>
        <a class="waves-effect waves-light btn" href="addteam.php">Add Team</a>
        <div class="row">
            <div class="col-md-12">
               <!-- Advanced Tables -->
                <div class="card">
                    <?php
                        if(!empty($_SESSION['message'])){
                    ?>
                        <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <?=$_SESSION['message']?>
                        </div>
                    <?php
                        unset($_SESSION['message']);
                        }
                    ?>
                    <div class="card-action">
                         Team Data
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example-team">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Post</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while($row = $team->fetch(PDO::FETCH_ASSOC)){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i;?></td>
                                        <td><img src="../images/<?php echo $row['image']?>" width="70px" height="70px"></td>
                                        <td><?php echo $row['name']?></td>
                                        <td><?php echo $row['post']?></td>
                                        <td><?php echo $row['des']?></td>
                                        <td class="center">
                                            <?php if($row['status'] == '1'){
                                                echo "<span class='badge green'>Active</span>";
                                            }else{
                                                echo "<span class='badge red'>Inactive</span>";
                                            }?>
                                        </td>
                                        <td>
                                            <a href="editteam.php?id=<?=$row['id']?>">Edit</a> <a href="deleteteam.php?id=<?=$row['id']?>" onclick="return confirm('Are you sure to delete this item')">Delete</a>
                                        </td>
                                    </tr>
                                    <?php $i++; }?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>
</div>

<!--team Section-->

<?php include('footer.php');?>