<?php
    //update is also doing inser but it changes value as we want
    include('header.php');
	if(isset($_GET['id']))
    {
        try
        {
    		$id = $_GET['id'];
    		$sql = "SELECT * FROM services WHERE id=$id";
    		$stmt = $conn->prepare($sql);
    		$stmt->execute();
    		$stmt->setFetchMode(PDO::FETCH_ASSOC);
    		$result = $stmt->fetchAll();
    	}catch(PDOException $e){
    		echo "error".$e->getMessage();
    	}
    }

    if(isset($_POST["update"])){
    try
    {
      $id = $_GET['id'];
      $menuname = $_POST['menu_name'];
      $menulink = $_POST['menu_link'];
      $iconclass = $_POST['icon'];
      $status = $_POST['status'];
      $sql = "UPDATE services SET name='$menuname',link='$menulink',icon_class='$iconclass',status='$status' WHERE id= '$id'";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $_SESSION['message'] = "This data is updated successfully";
      header("Location:services.php");
      
    } catch (PDOException $e){
      $_SESSION['msg_err'] = "Something went wrong";
      header("Location:editservices.php");
      }
  }
 
    ?>
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Edit services Page.
        </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Admin</a></li>
          <li class="active">Edit services</li>
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
    <a class="waves-effect waves-light btn" href="services.php">View services</a>
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-action">
                           Basic Form Elements
                        </div>
                        <div class="card-content">
                           <form class="col s12" method="POST" name="addMenu" action="">
                              <div class="row">
                                 <div class="input-field col s6">
                                    <input  id="menu_name" name="menu_name" type="text" class="validate" value="<?=$result[0]['name']?>" require>
                                    <input type="hidden" name="hidden" value="<?=$result[0]['id']?>">
                                 </div>
                                 <div class="input-field col s6">
                                    <input id="last_name" type="text" name="menu_link" class="validate" value="<?=$result[0]['link']?>" require>
                                 </div>
                                  <div class="input-field col s6">
                                    <input id="last_name" type="text" name="icon" class="validate" value="<?=$result[0]['icon_class']?>" require>
                                 </div>
                              </div>
                              <div class="row">
                                  <div class="input-field col s6">
                                      <select name="status" class="validate form-control" require>
                                        <!--   <option value="">--Select Status--</option> -->
                                          <option <?php if($result[0]['status'] == 1) { echo "selected";}?> value="1">Active</option> 
                                           <option <?php if($result[0]['status'] == 0) { echo "selected";}?> value="0">Inactive</option>

                                      </select>
                                  </div>
                              </div>
                              <br>
                              <input type="submit" name="update" value="Update" class="btn btn-primary">
                           </form>
                           <div class="clearBoth"></div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>