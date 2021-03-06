<?php 
include('header.php');
//or i can use * for both tables
$id = $_GET['id'];
$sql = "SELECT * FROM menu INNER JOIN sub_menu ON sub_menu.menu_id=menu.id WHERE sub_menu.id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
session_start();
?>
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Edit Sub Menu Page.
        </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Admin</a></li>
          <li class="active">Edit SubMenu</li>
        </ol> 
    </div>
    <div id="page-inner"> 
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
    <a class="waves-effect waves-light btn" href="submenu.php">View Sub Menu</a>
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-action">
                           Basic Form Elements
                        </div>
                        <div class="card-content">
                           <form class="col s12" method="POST" name="updateSubMenu" action="updatesubmenu.php">
                              <div class="row">
                                <div class="input-field col s6">
                                    <select name="main_menu" class="validate form-control" require>
                                          <option value="<?= $row['menu_id']?>"><?= $row['menu_name']?></option>
                                      </select>
                                 </div>
                                 <div class="input-field col s6">
                                    <input  id="menu_name" name="sub_menu_name" type="text" class="validate" value="<?=$row['sub_menu_name']?>" require>
                                    <input type="hidden" name="id" value="<?=$row['id']?>">
                                 </div>
                                 <div class="input-field col s6">
                                    <input id="last_name" type="text" name="sub_menu_link" class="validate" value="<?=$row['sub_menu_link']?>" require>
                                 </div>
                              </div>
                              <div class="row">
                                  <div class="input-field col s6">
                                      <select name="status" class="validate form-control" require>
                                        <!--   <option value="">--Select Status--</option> -->
                                          <option <?php if($row['status'] == 1) { echo "selected";}?> value="1">Active</option> 
                                           <option <?php if($row['status'] == 0) { echo "selected";}?> value="0">Inactive</option>

                                      </select>
                                  </div>
                              </div>
                              <br>
                              <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                           </form>
                           <div class="clearBoth"></div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>