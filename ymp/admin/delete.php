<?php
	//include our connection
	include 'dbconfig.php';




	$sql0 = "SELECT rowid, * FROM images_table where department_id=".$_GET['id'];
	$query0 = $db->query($sql0);

	while($row0 = $query0->fetchArray()){

echo $row0['image_path'];
$file_name=$row0['image_path'];

//echo unlink("images/files/".$file_name);

		 
	}





	$sql1 = "DELETE FROM images_table WHERE department_id = '".$_GET['id']."'";
	$db->query($sql1);



	$sql3 = "DELETE FROM  departments WHERE rowid = '".$_GET['id']."'";
	$db->query($sql3);


	header('location: index.php');


 
	/*
	//delete the row of selected id
	$sql = "DELETE FROM  departments WHERE rowid = '".$_GET['id']."'";
	$db->query($sql);


	$sql2 = "DELETE FROM images_table WHERE department_id = '".$_GET['id']."'";
	$db->query($sq2);
	header('location: index.php');

	*/
?>