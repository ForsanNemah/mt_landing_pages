<!DOCTYPE html>
<html>
<head>
<?php

include '../../header.php';
?>
</head>
<body>

<h>


<?php

//echo $_GET['id']."final_id" ;
?>

</h>








<form method="POST" enctype="multipart/form-data" class="col-md-offset-3 col-md-6">

    <div class="form-group">
        <label for="fname" class="control-label"> وصف الصورة</label>
        <input type="text" class="form-control" id="fname" placeholder="image_des" name="image_des" required>
    </div>


	<div class="form-group">
        <label for="fname" class="control-label">ملف الصورة </label>
        <input type="file" class="form-control" id="fname" placeholder="image_path" name="image_path" required>
    </div>
	 
    
    <button type="submit" class="btn btn-default" name="save" value="Save">حفظ</button>
</form>





























<?php
	if(isset($_POST['save'])){
		//include our connection
		include 'dbconfig.php';
 











		$file_tmp = $_FILES['image_path']['tmp_name'];
		$file_name = rand(1, 1000).$_FILES['image_path']['name'];
		$file_destination = getcwd() . "/files/". $file_name;



		move_uploaded_file($file_tmp, $file_destination);













		
		//insert query
		$sql = "INSERT INTO images_table (department_id,image_des,image_path) VALUES ('".$_GET['id']."', '".$_POST['image_des']."','". $file_name."')";
		echo $db->exec($sql);
 
		header('location: index.php?id='.$_GET['id']);


		
 
	}
?>
</body>
</html>