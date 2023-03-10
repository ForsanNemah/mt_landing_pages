 





  <?php
			//include our connection
			include 'dbconfig.php';
 
			//query from the table that we create
			$sql = "SELECT rowid, * FROM departments";
			$query = $db->query($sql);
 
			while($row = $query->fetchArray()){
				echo $row['rowid']."<br>";
				//echo $row['department_name'];

			 

				$sql_in = "SELECT rowid, * FROM images_table where department_id=".$row['rowid']."";
				//echo 	$sql_in."<br>"; 
				$query_in = $db->query($sql_in);
				//echo $query_in->fetchArray()."wwe_before";
				while($row_in = $query_in->fetchArray()){

					echo $row_in['image_path']."<br>"."wwe";


				}















				//echo $row['department_state'];
				 
					 
					 
			}
		?>






 