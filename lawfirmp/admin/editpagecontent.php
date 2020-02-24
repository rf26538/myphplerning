<?php 
include('header.php');
//or i can use * for both tables
$id = $_GET['id'];
$sql = "SELECT * FROM services INNER JOIN services_content ON services_content.services_id=services.id WHERE services_content.id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

  if(isset($_POST["submit"])){
    try
    {
      $id = $_GET['id'];
      $header = $_POST['header'];
      $description = $_POST['des'];
      $status = $_POST['status'];
      $sql = "UPDATE services_content SET header='$header',des='$description',status='$status' WHERE id='$id'";
      $stmte = $conn->prepare($sql);
      $stmte->execute();
      $_SESSION['message'] = "This data is updated successfully";
      header("Location:servicespagecontent.php?id=$id");
      
    } catch (PDOException $e){
      $_SESSION['msg_err'] = "Something went wrong";
      header("Location:editpagecontent.php");
      }
  }

?>
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Edit Page Content.
        </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Admin</a></li>
          <li class="active">Edit Page content</li>
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
    <a class="waves-effect waves-light btn" href="servicescontent.php">View Page content</a>
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-action">
                           Basic Form Elements
                        </div>
                        <div class="card-content">
                           <form class="col s12" method="POST" name="updateSubMenu" action="">
                              <div class="row">
                                <div class="input-field col s6">
                                    <select name="main_menu" class="validate form-control" require>
                                          <option value="<?= $row['services_id']?>"><?= $row['name']?></option>
                                      </select>
                                 </div>
                                 <div class="input-field col s6">
                                    <input  id="menu_name" name="header" type="text" class="validate" value="<?=$row['header']?>" require>
                                    <input type="hidden" name="id" value="<?=$row['id']?>">
                                 </div>
                                 <div class="input-field col s6">
                                    <input id="last_name" type="text" name="des" class="validate" value="<?=$row['des']?>" require>
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