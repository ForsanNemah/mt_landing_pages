<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php

include 'header.php';
?>
</head>
<body>
 






<form class="col-md-offset-3 col-md-6" method="post">

<br>
<a href="index.php">


<a href='index.php' >


<button   type='button' class='btn btn-primary'>
عودة
</button>

<br>

<br>

</a>





 

    <div class="form-group">
        <label for="fname" class="control-label">  اسم القسم</label>
        <input type="text" class="form-control" id="fname" placeholder="Department name" name="department_name" required>
    </div>

	<div class="form-group">
        <label for="fname" class="control-label">   حالة القسم</label>


		<label for="cars"> :</label>

<select name="department_state" id="cars">
  <option value="1">1</option>
  <option value="0">0</option>
 
</select>








    </div>
    
    <button type="submit" class="btn btn-default" name="save" value="Save">حفظ</button>
</form>























<?php
	if(isset($_POST['save'])){
		//include our connection
		include 'dbconfig.php';
 
		//insert query
		$sql = "INSERT INTO departments (department_name, department_state) VALUES ('".$_POST['department_name']."', '".$_POST['department_state']."')";
		echo $db->exec($sql);
 
		header('location: index.php');
 
	}
?>
</body>
</html>