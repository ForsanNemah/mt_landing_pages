<?php
	//include our connection
	include 'dbconfig.php';
 
	//get the row of selected id
	$sql = "SELECT rowid, * FROM images_table  WHERE rowid ='".$_GET['id']."'   ";
	$query = $db->query($sql);
	$row = $query->fetchArray();
 
?>

<!DOCTYPE html>
<html>
<head>
<?php

include '../../header.php';
?>
</head>
<body>
 
 






<form method="POST" class="col-md-offset-3 col-md-6">
<br>
<br>

<a href="index.php">
<button  type="button" class="btn btn-primary">

 عودة


</button>
</a>


<br>
<br>
    <div class="form-group">
        <label for="fname" class="control-label">  اسم القسم</label>
        <input type="text" class="form-control" id="fname" placeholder="Department name" name="image_des" value="<?php echo $row['image_des']; ?>" required>
    </div>

	 
    
    <button type="submit" class="btn btn-default" name="save" value="Save">حفظ</button>
</form>













<?php
	if(isset($_POST['save'])){
		$image_des = $_POST['image_des'];
	 
 
 
		//update our table
		$sql = "UPDATE images_table SET image_des = '$image_des' WHERE rowid = '".$_GET['id']."'";
		$db->exec($sql);
 
		header('location: index.php?id='.$_GET['department_id']);
	}
?>
</body>
</html>
 