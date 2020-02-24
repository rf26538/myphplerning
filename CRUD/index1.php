<!DOCTYPE html>
	<html lang="en">

 <head>
 	 <title>Show Table</title>
 	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	 </head>
<body>
  <!--  -->
	<?php
		session_start();
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
	<div class="container mt-3">
		<div class="row">
		<div class="col-sm-3">
	<form action="add.php" method="POST" enctype="multipart/form-data">

	<div class="form-group">
	<input type="text" class="form-control" name="firstname" placeholder="Enter your firstname">
	</div>

	<div class="form-group">
	<input type="text" class="form-control" name="lastname" placeholder="Enter your lastname">
	</div>

<div class="form-group">
	<input type="text" class="form-control" name="email" placeholder="Enter your email">
</div>
	 <div class="custom-control custom-radio custom-control-inline">
      	<input type="radio" class="custom-control-input" id="male" name="gender" value="male">
      	<label class="custom-control-label" for="male">male</label>
    </div>
     <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="female" name="gender" value="female">
      <label class="custom-control-label" for="female">female</label>
    </div>
     <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="other" name="gender" value="other">
      <label class="custom-control-label" for="other">other</label>
    </div>
        <div class="form-group">
          <label>SelectProfilePic</label>
      <input type="file" name="fileToUpload" class="form-control" required="" accept=*/image>
      </div>
	<br>
	<button type="submit" class="btn btn-primary" name="submit">submit</button>
	</form>
</div>
 <div class="col-sm-9">
       <table class="table table-bordered">
        <thead>
          <tr>
          <th>id</th>
          <th>firstname</th>
          <th>lastname</th>
          <th>email</th>
          <th>gender</th>
          <th>image</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          <?php
include 'conn.php';

  try
  {
    $stmt = $conn->prepare("SELECT * FROM students");
  
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $k =>$v)  {
      // for allinghment always use pre tag
      // echo "<pre>";
      // print_r($v);
  ?>
          <tr>
          <td><?=$v['id']?></td>
          <td><?=$v['firstname']?></td>
          <td><?=$v['lastname']?></td>
          <td><?=$v['email']?></td>
          <td><?=$v['gender']?></td>
          <td><img src="../uploads/<?=$v['image']?>" class="rounded" alt="Cinque Terre" width="60" height="60">
          </td>
          <td>
            <a href="edit.php?id=<?php echo $v['id'];?>" class="btn btn-info btn-sm">Edit</a>
            <a href="delete.php?id=<?=$v['id']?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
  <?php
    }
  }catch(PDOException $e)
  {
    echo "error".$e->getMessage();
  }
?>
        </tbody>
      </table>
    </div>
</div>
</div>
</body>
</html>