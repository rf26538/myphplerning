<?php 
include('header.php');
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
            Add Banner Page <small>add banner.</small>
        </h1>
		<ol class="breadcrumb">
    	  <li><a href="dashboard.php">Home</a></li>
    	  <li class="active">Banners</li>
	    </ol> 
	</div>
	<div id="page-inner"> 
	<a class="waves-effect waves-light btn" href="banners.php">View Banners</a>
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
                           Banners Form Elements
                        </div>
                        <div class="card-content">
                           <form class="col s12" method="POST" name="addMenu" action="insertbanners.php" enctype="multipart/form-data">
                              <div class="row">
                                  <label for="last_name">Image</label><br>
                                  <div class="input-field col s6">
                                    <input id="last_name" type="file" name="images" class="validate" required>
                                 </div>
                                 <div class="input-field col s6">
                                    <input  id="menu_name" name="heading" type="text" class="validate" required>
                                    <label for="first_name">Heading</label>
                                 </div>
                                 
                              </div>
                              <div class="row">
                                  <div class="input-field col s6">
                                    <input id="last_name" type="text" name="des" class="validate" required>
                                    <label for="last_name">Description</label>
                                 </div>
                                  <div class="input-field col s6">
                                      <select name="status" class="validate form-control" required>
                                          <option value="">--Select Status--</option>
                                          <option value="1">Active</option>
                                          <option value="0">Inactive</option>
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