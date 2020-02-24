<?php
    //update is also doing inser but it changes value as we want
	ob_start();
    include('header.php');
	if(isset($_GET['id']))
    {
        try
        {
    		$id = $_GET['id'];
    		$sql = "SELECT * FROM aboutus WHERE id=$id";
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
      $heading = $_POST['heading'];
      $des = $_POST['des'];
      $status = $_POST['status'];
      $sql = "UPDATE aboutus SET heading='$heading',des='$des',status='$status' WHERE id= '$id'";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $_SESSION['message'] = "This data is updated successfully";
      header("Location:aboutus.php");
      
    } catch (PDOException $e){
      $_SESSION['msg_err'] = "Something went wrong";
      header("Location:editaboutus.php");
      }
  }
 
    ?>
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Edit aboutus Page.
        </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Admin</a></li>
          <li class="active">Edit aboutus</li>
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
    <a class="waves-effect waves-light btn" href="aboutus.php">View aboutus</a>
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-action">
                           Basic Form Elements
                        </div>
                        <div class="card-content">
                           <form class="col s12" method="POST" name="addaboutus" action="">
                              <div class="row">
                                 <div class="input-field col s6">
                                    <input  id="menu_name" name="heading" type="text" class="validate" value="<?=$result[0]['heading']?>" require>
                                    <input type="hidden" name="hidden" value="<?=$result[0]['id']?>">
                                 </div>
                                 <div class="input-field col s6">
                                    <input id="last_name" type="text" name="des" class="validate" value="<?=$result[0]['des']?>" require>
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