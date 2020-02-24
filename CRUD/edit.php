<?php
    //update is also doing inser but it changes value as we want
    	include 'conn.php';
    	if(isset($_GET['id'])){
    	try
    	{
    		$id = $_GET['id'];
    		$sql = "SELECT * FROM students WHERE id=$id";
    		$stmt = $conn->prepare($sql);
    		$stmt->execute();
    		$stmt->setFetchMode(PDO::FETCH_ASSOC);
    		$result = $stmt->fetchAll();
    		// print_r($result);
    	}catch(PDOException $e){
    		echo "error".$e->getMessage();
    	}
    }
 
    ?>
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
                <div class="col-sm-4">
                    <form action="update.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$result['0']['id']?>">
                        <div class="form-group">
                            <input type="text" class="form-control" name="firstname" placeholder="Enter your firstname" value="<?=$result['0']['firstname']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="lastname" placeholder="Enter your lastname" value="<?=$result['0']['lastname']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter your email" value="<?=$result['0']['email']?>">
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="male" name="gender" value="male" <?php if (isset($result['0']['gender']) && $result['0']['gender'] == "male") echo "checked";?>>
                            <label class="custom-control-label" for="male">male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="female" name="gender" value="female" <?php if (isset($result['0']['gender']) && $result['0']['gender'] == "female") echo "checked";?>>
                            <label class="custom-control-label" for="female">female</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="other" name="gender" value="other" <?php if (isset($result['0']['gender']) && $result['0']['gender'] == "other") echo "checked";?>>
                            <label class="custom-control-label" for="other">other</label>
                        </div>
                        <div class="form-group">
                            <label>change profilepic</label>
                            <input type="file" name="fileToUpload" class="form-control">
                            <input type="hidden" name="pre_fileToUpload" class="form-control" value="<?=$result[0]['image']?>">
                        </div>
                        <br>
                        <button type="submit" name="update" class="btn btn-primary" value="update" >Update</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>