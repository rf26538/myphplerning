<?php 
include('header.php');
//or i can use * for both tables
$sql = "SELECT menu.id,menu.menu_name,sub_menu.id,sub_menu.sub_menu_name,sub_menu.sub_menu_link,sub_menu.menu_id,sub_menu.status FROM menu INNER JOIN sub_menu ON sub_menu.menu_id=menu.id";
$stmt = $conn->prepare($sql);
$stmt->execute();
session_start();
?>


<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Sub Menu Page <small>sub menu.</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active">sub menu</li>
        </ol> 
    </div>
    <div id="page-inner"> 
    <a class="waves-effect waves-light btn" href="addsubmenu.php">Add Sub Menu</a>
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
                                        <th>Main Menu</th>
                                        <th>Sub Menu Name</th>
                                        <th>Sub Menu Link</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Page content</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
                                    <tr class="odd gradeX">
                                        
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $row['menu_name'];?></td>
                                        <td><?php echo $row['sub_menu_name']?></td>
                                        <td><?php echo $row['sub_menu_link']?></td>
                                        <td class="center">
                                            <?php if($row['status'] == '1'){
                                                echo "<span class='badge green'>Active</span>";
                                            }else{
                                                echo "<span class='badge red'>Inactive</span>";
                                            }?>
                                        </td>
                                        <td>
                                            <a href="editsubmenu.php?id=<?=$row['id']?>">Edit</a> <a href="deletesubmenu.php?id=<?=$row['id']?>" onclick="return confirm('Are you sure to delete this item')">Delete</a>
                                        </td>
                                        <td>
                                            <a href="submenucontent.php?id=<?= $row['id']?>">Add Page Content</a>
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