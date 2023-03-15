<?php
	//include our connection
	include 'dbconfig.php';
 
	//delete the row of selected id
	$sql = "DELETE FROM images_table WHERE rowid = '".$_GET['id']."'";
	$db->query($sql);
 
	echo unlink("files/".$_GET['image_path']);
	header('location: index.php?id='.$_GET['old_id']);
?>