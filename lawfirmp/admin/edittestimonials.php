<?php 
include('header.php');

$id = $_GET['id'];
$sql = "SELECT * FROM testimonials WHERE id='".$id."'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
session_start();
?>
<div id="page-wrapper">
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
    <div class="header"> 
        <h1 class="page-header">
            Edit Testimonial Page <small>edit testimonial.</small>
        </h1>
		<ol class="breadcrumb">
    	  <li><a href="dashboard.php">Home</a></li>
    	  <li class="active">Testimonial</li>
	    </ol> 
	</div>
	<div id="page-inner"> 
	<a class="waves-effect waves-light btn" href="testimonials.php">View Testimonial</a>
	<?php
        if(!empty($_SESSION['err_msg'])){
    ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?=$_SESSION['err_msg']?>
        </div>
    <?php
        unset($_SESSION['err_msg']);
        }
    ?>
	    <div class="row">
	        <div class="col-md-12">
                      <div class="card">
                        <div class="card-action">
                           Testimonial Form Elements
                        </div>
                        <div class="card-content">
                           <form class="col s12" method="POST" name="addMenu" action="updatetestimonials.php" enctype="multipart/form-data">
                              <div class="row">
                                  <label for="last_name">Image</label><br>
                                  <div class="input-field col s4">
                                    <input id="last_name" type="file" name="images" class="validate">
                                    <br>
                                    <img src="../images/<?= $result[0]['image']?>" width="200px" height="200px">
                                 </div>
                                 <div class="input-field col s4">
                                    <input  id="menu_name" name="heading" type="text" class="validate valid" required value="<?= $result[0]['name']?>">
                                    <label for="first_name" class="active">Name</label>
                                    <input type="hidden" name="id" value="<?= $result[0]['id']?>">
                                 </div>
                                 <div class="input-field col s4">
                                    <input  id="menu_name" name="post" type="text" class="validate valid" required value="<?= $result[0]['post']?>">
                                    <label for="first_name" class="active">Post</label>
                                    <input type="hidden" name="id" value="<?= $result[0]['id']?>">
                                 </div>
                                 
                              </div>
                              <div class="row">
                                  <div class="input-field col s6">
                                    <input id="last_name" type="text" name="des" class="validate valid" required value="<?= $result[0]['des']?>">
                                    <label for="last_name" class="active">Description</label>
                                 </div>
                                  <div class="input-field col s6">
                                      <select name="status" class="validate form-control" required>
                                          <option value="">--Select Status--</option>
                                          <option value="1" <?php if(1== $result[0]['status']){ echo "selected";} ?>>Active</option>
                                          <option value="0" <?php if(0 == $result[0]['status']){ echo "selected";} ?>>Inactive</option>
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