<?php 
include('header.php');
$id = $_GET['id'];
  $stmt = $conn->prepare("SELECT * FROM services WHERE id='$id'");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // print_r($result);die();
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
            Services Page <small>all Services.</small>
        </h1>
		<ol class="breadcrumb">
    	  <li><a href="dashboard.php">Home</a></li>
    	  <li class="active">Services </li>
	    </ol> 
	</div>
	<div id="page-inner"> 
	<a class="waves-effect waves-light btn" href="services.php">View Services</a>
	    <div class="row">
	        <div class="col-md-12">
                      <div class="card">
                        <div class="card-action">
                           Basic Form Elements
                        </div>
                        <div class="card-content">
                           <form class="col s12" method="POST" name="addMenu" action="insertservicescontent.php">
                              <div class="row">
                                <div class="input-field col s6">
                                    <input  id="services_name" value="<?= $result[0]['name'];?>" name="menu_name" type="text" class="validate valid" readonly>
                                    <input type="hidden" name="services_id" value="<?= $result[0]['id'];?>">
                                    <label for="first_name" class="active">Services Name</label>
                                  </div>
                                  <div class="input-field col s6">
                                    <input  id="menu_name" name="menu_name" type="text" class="validate" require>
                                    <label for="first_name">Header</label>
                                  </div>
                              </div>
                              <div class="row">
                                 <div class="input-field col s12">
                                    <!-- <input id="last_name" type="text" name="menu_link" class="validate" require> -->
                                    <textarea name="menu_link" id="services" class="form-control"></textarea>
                                    <label for="last_name">Description</label>
                                 </div>
                                 <br>
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                      <select name="status" class="validate form-control" require>
                                          <option value="">--Select Status--</option>
                                          <option value="1">Active</option>
                                          <option value="0">Inactive</option>
                                      </select>
                                  </div>
                              </div>
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