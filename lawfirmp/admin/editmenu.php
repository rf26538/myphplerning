<?php
    //update is also doing inser but it changes value as we want
    include('header.php');
	if(isset($_GET['id']))
    {
        try
        {
    		$id = $_GET['id'];
    		$sql = "SELECT * FROM menu WHERE id=$id";
    		$stmt = $conn->prepare($sql);
    		$stmt->execute();
    		$stmt->setFetchMode(PDO::FETCH_ASSOC);
    		$result = $stmt->fetchAll();
    		// print_r($result);
      //       die();
    	}catch(PDOException $e){
    		echo "error".$e->getMessage();
    	}
    }
 
    ?>
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Edit Menu Page.
        </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Admin</a></li>
          <li class="active">Edit menu</li>
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
    <a class="waves-effect waves-light btn" href="menu.php">View Menu</a>
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-action">
                           Basic Form Elements
                        </div>
                        <div class="card-content">
                           <form class="col s12" method="POST" name="addMenu" action="updatemenu.php">
                              <div class="row">
                                 <div class="input-field col s6">
                                    <input  id="menu_name" name="menu_name" type="text" class="validate" value="<?=$result[0]['menu_name']?>" require>
                                    <input type="hidden" name="hidden" value="<?=$result[0]['id']?>">
                                 </div>
                                 <div class="input-field col s6">
                                    <input id="last_name" type="text" name="menu_link" class="validate" value="<?=$result[0]['menu_link']?>" require>
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