<?php
    //update is also doing inser but it changes value as we want
	ob_start();
    include('header.php');
	if(isset($_GET['id']))
    {
        try
        {
    		$id = $_GET['id'];
    		$sql = "SELECT * FROM team WHERE id=$id";
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
      $name = $_POST['name'];
      $post = $_POST['post'];
      $des = $_POST['des'];
      $image = $_FILES['images']['name'];
      $fblink = $_POST['fb_link'];
      $instalink = $_POST['insta_link'];
      $status = $_POST['status'];
      $target_dir = "../images/";
      $target_file = $target_dir . basename($_FILES["images"]["name"]);

      if ($image == "") {
        $image = $_POST["pre_images"];
      }

      move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);
      $sql = "UPDATE team SET name='$name',post='$post',des='$des',image='$image',fb_link='$fblink',insta_link='$instalink',status='$status' WHERE id= '$id'";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $_SESSION['message'] = "This data is updated successfully";
      header("Location:aboutus.php");
    } catch (PDOException $e){
      $_SESSION['msg_err'] = "Something went wrong";
      header("Location:editteam.php");
    }
  }
 
    ?>
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Edit Team Page.
        </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Admin</a></li>
          <li class="active">Edit about Us</li>
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
    <a class="waves-effect waves-light btn" href="editteam.php">View aboutus</a>
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-action">
                           Basic Form Elements
                        </div>
                        <div class="card-content">
                           <form class="col s12" method="POST" name="addaboutus" action="" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="input-field col s6">
                                    <input  id="menu_name" name="name" type="text" class="validate" value="<?=$result[0]['name']?>" require>
                                    <input type="hidden" name="hidden" value="<?=$result[0]['id']?>">
                                 </div>
                                 <div class="input-field col s6">
                                    <input id="last_name" type="text" name="post" class="validate" value="<?=$result[0]['post']?>" require>
                                 </div>
                                 <div class="input-field col s6">
                                    <input id="last_name" type="text" name="des" class="validate" value="<?=$result[0]['des']?>" require>
                                 </div>
                                 <div class="input-field col s6">
                                    <input id="last_name" type="text" name="fb_link" class="validate" value="<?=$result[0]['fb_link']?>" require>
                                 </div>
                                 <div class="input-field col s6">
                                    <input id="last_name" type="text" name="insta_link" class="validate" value="<?=$result[0]['insta_link']?>" require>
                                 </div>
                                 <div class="input-field col s6">
                                    <input type="file" name="images" class="form-control">
                                    <input type="hidden" name="pre_image" class="form-control" value="<?=$result[0]['image']?>">
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