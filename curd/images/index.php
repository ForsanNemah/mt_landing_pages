<!DOCTYPE html>
<html>
<head>
<?php

include '../header.php';
?>
</head>
<body>
 
 <br>
 <br>
<?php

//echo $_GET['id'] ;
 


echo "


<a href='add.php?id=".$_GET['id']."' >


<button   type='button' class='btn btn-primary'>
Add
</button>

</a>

 


";






echo "


<a href='../index.php' >


<button   type='button' class='btn btn-primary'>
Back
</button>

</a>

 


";



?>


 

<br>
<br>



























<table class="table table-bordered">
  <thead>
    <tr>
      <th class='text-center' scope="col">#</th>
      <th class='text-center' scope="col">Image Des</th>
      <th class='text-center' scope="col">Image File</th>
	  <th class='text-center' scope="col"> </th>
  
    </tr>
  </thead>
  <tbody>












  <?php
			//include our connection
			include 'dbconfig.php';
 
			//query from the table that we create
			$sql = "SELECT rowid, * FROM images_table where department_id=".$_GET['id'];
			$query = $db->query($sql);
 
			while($row = $query->fetchArray()){
				echo "
					<tr>
						<td class='text-center'>".$row['department_id']."</td>
						<td class='text-center'>".$row['image_des']."</td>
						<td hidden ".$row['image_path']."</td>
						<td class='text-center'>
						 
						<img src='files/".$row['image_path']."' width='200' height='200'>
						</td>
					
						<td class='text-center'>
							 
							<a href='delete.php?id=".$row['rowid']."&old_id=".$_GET['id']."&old_file=".$row['image_path']."'>
							
							
							
							<button type='button' class='btn btn-danger'>


							<i class='bi bi-trash'></i>
							
							
							</button>
							
							
							
							</a>
                            
						</td>
					</tr>
				";
			}
		?>



 





    
    
     
  </tbody>
</table>









</body>
</html>