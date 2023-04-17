<!DOCTYPE html>
<html>
<head>
<?php

include '../../header.php';
?>
</head>
<body dir="rtl">
 
 <br>
 <br>
<?php

//echo $_GET['id'] ;
 


echo "


<a href='add.php?id=".$_GET['id']."' >


<button   type='button' class='btn btn-primary'>
اضافة صورة 
</button>

</a>

 


";






echo "


<a href='../index.php' >


<button   type='button' class='btn btn-primary'>
عودة
</button>

</a>

 


";



?>


 

<br>
<br>



























<table class="table table-bordered">
  <thead>
    <tr>
      <th class='text-center' scope="col" hidden>#</th>
      <th class='text-center' scope="col">   وصف الصورة</th>
      <th class='text-center' scope="col">   الصورة</th>
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
 $department_id=$_GET['id'];
			while($row = $query->fetchArray()){
				echo "
					<tr>
				 
						<td class='text-center' hidden> ".$row['department_id']."</td>
						<td class='text-center'>".$row['image_des']."</td>
						<td hidden ".$row['image_path']."</td>
						<td class='text-center'>
						 
						<img src='files/".$row['image_path']."' width='200' height='200'>
						</td>
					
						<td class='text-center'>
							 
							<a href='delete.php?id=".$row['rowid']."&old_id=".$_GET['id']."&old_file=".$row['image_path']."' onclick='a()' >
							
							
							
							<button type='button' class='btn btn-danger'>


							<i class='bi bi-trash'></i>
							
							
							</button>
							
							
							
							</a>


							<a href='edit.php?id=".$row['rowid']."&department_id=".$department_id."'>
						
							
							<button type='button' class='btn btn-primary'>


							<i class='bi bi-pen'></i>
							
							
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


<script>


function a( ) {


	if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};
 

}


</script>
