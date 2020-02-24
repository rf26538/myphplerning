<?php 
include('header.php');
$id = $_GET['id'];
//$sql = "SELECT * FROM services_content WHERE services_id='$id'";
$sql = "SELECT services.*,services_content.* FROM services INNER JOIN services_content ON services_content.services_id=services.id WHERE services_content.services_id= $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
session_start();
?>
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Services Page Content <small>Services Content.</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active">Services page content</li>
        </ol> 
    </div>
    <div id="page-inner"> 
    <a class="waves-effect waves-light btn" href="addservicescontent.php?id=<?php echo $id;?>">Add Services Page Content</a>
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
                         Advanced Tables
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Services Name</th>
                                        <th>Content Heading</th>
                                        <th>Content Description</th>
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
                                        <td><?php echo $row['name']?></td>
                                        <td><?php echo $row['heading']?></td>
                                        <td><?=$row['des']?></td>
                                        <td class="center">
                                            <?php if($row['status'] == '1'){
                                                echo "<span class='badge green'>Active</span>";
                                            }else{
                                                echo "<span class='badge red'>Inactive</span>";
                                            }?>
                                        </td>
                                        <td>
                                            <a href="editpagecontent.php?id=<?=$row['id']?>">Edit</a> <a href="deletepagecontent.php?id=<?=$row['id']?>" onclick="return confirm('Are you sure to delete this item')">Delete</a>
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

<?php include('footer.php');?>