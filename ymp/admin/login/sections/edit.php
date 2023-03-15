<?php
	//include our connection
	include 'dbconfig.php';
 
 
	//get the row of selected id
	$sql = "SELECT rowid, * FROM departments WHERE rowid ='".$_GET['id']."'   ";
	$query = $db->query($sql);
	$row = $query->fetchArray();
 
?>

<!DOCTYPE html>
<html>
<head>
<?php

include '../header.php';
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
        <input type="text" class="form-control" id="fname" placeholder="Department name" name="department_name" value="<?php echo $row['department_name']; ?>" required>
    </div>

	<div class="form-group">
        <label for="fname" class="control-label">   حالة القسم</label>


		<label for="cars"></label>

<select name="department_state" id="cars">
<option value="<?php echo $row['department_state']; ?>"><?php echo $row['department_state']; ?></option>
  <option value="1">1</option>
  <option value="0">0</option>
 
</select>








    </div>
    
    <button type="submit" class="btn btn-default" name="save" value="Save">حفظ</button>
</form>













<?php
	if(isset($_POST['save'])){
		$department_name = $_POST['department_name'];
		$department_state = $_POST['department_state'];
 
 
		//update our table
		$sql = "UPDATE departments SET department_name = '$department_name', department_state = '$department_state' WHERE rowid = '".$_GET['id']."'";
		$db->exec($sql);
 
		header('location: index.php');
	}
?>
</body>
</html>