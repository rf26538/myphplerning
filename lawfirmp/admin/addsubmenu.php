<?php 
include('header.php');
$sql = "SELECT * FROM menu";
$stmt = $conn->prepare($sql);
$stmt->execute();
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
            Sub Menu Page <small>sub menu.</small>
        </h1>
		<ol class="breadcrumb">
    	  <li><a href="dashboard.php">Home</a></li>
    	  <li class="active">sub menu</li>
	    </ol> 
	</div>
	<div id="page-inner"> 
	<a class="waves-effect waves-light btn" href="submenu.php">View Sub Menu</a>
	    <div class="row">
	        <div class="col-md-12">
                      <div class="card">
                        <div class="card-action">
                           Basic Form Elements
                        </div>
                        <div class="card-content">
                           <form class="col s12" method="POST" name="addSubMenu" action="insertsubmenu.php">
                              <div class="row">
                                <div class="input-field col s6">
                                    <select name="main_menu" class="validate form-control" require>
                                          <option value="">--Select Main Menu--</option>
                                          <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
                                          <option value="<?= $row['id']?>"><?= $row['menu_name']?></option>
                                        <?php }?>
                                      </select>
                                 </div>
                                 <div class="input-field col s6">
                                    <input  id="menu_name" name="sub_menu_name" type="text" class="validate" require>
                                    <label for="first_name">Sub Menu Name</label>
                                 </div>
                                 
                              </div>
                              <div class="row">
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" name="sub_menu_link" class="validate" require>
                                    <label for="last_name">Sub Menu Link</label>
                                 </div>
                                  <div class="input-field col s6">
                                      <select name="status" class="validate form-control" require>
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