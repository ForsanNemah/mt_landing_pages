<?php
	//include our connection
	include 'dbconfig.php';
	error_reporting(E_ERROR | E_PARSE);
 
	//get the row of selected id
	$sql = "SELECT rowid, * FROM info  WHERE rowid =1    ";
	$query = $db->query($sql);
	$row = $query->fetchArray();
	//echo $row['end_date'];
 
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

<a href="../index.php">
<button  type="button" class="btn btn-primary">

 عودة


</button>
</a>


<br>
<br>
    <div class="form-group">
        <label for="fname" class="control-label">     تاريخ انتهاء العرض</label>
        <input type="text" class="form-control" id="fname"   name="end_date" value="<?php echo $row['end_date']; ?>" required>
    </div>

 
    
    <button type="submit" class="btn btn-default" name="save" value="Save">حفظ</button>
</form>













<?php
	if(isset($_POST['save'])){
		$end_date = $_POST['end_date'];
		 
 
 
		//update our table
		$sql = "delete from info";
		echo $db->exec($sql);



		$sql = "INSERT INTO info (end_date) VALUES ('".$_POST['end_date']."')";
		 echo $db->exec($sql);
 
		header('location: index.php');
	}
?>
</body>
</html>