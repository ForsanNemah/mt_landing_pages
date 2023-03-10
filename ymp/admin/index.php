<!DOCTYPE html>
<html>
<head>
<?php

include 'header.php';
?>
</head>
<body  dir="rtl">




 





















	<br>
	<br>
<a href="add.php">
<button  type="button" class="btn btn-primary">
اضافة قسم 


</button>
</a>
<br>
<br>

 







<table class="table table-bordered" dir="rtl">
  <thead>
    <tr>
      <th class='text-center' scope="col">#</th>
      <th class='text-center' scope="col">  اسم القسم</th>
      <th class='text-center' scope="col">الحالة</th>
	  <th class='text-center' scope="col"> </th>
  
    </tr>
  </thead>
  <tbody>














  <?php
			//include our connection
			include 'dbconfig.php';
 
			//query from the table that we create
			$sql = "SELECT rowid, * FROM departments";
			$query = $db->query($sql);
 
			while($row = $query->fetchArray()){
				echo "
					<tr>
						<td class='text-center'>".$row['rowid']."</td>
						<td class='text-center'>".$row['department_name']."</td>
						<td class='text-center'>".$row['department_state']."</td>
					 
						<td >
							<a href='edit.php?id=".$row['rowid']."'>
							
							
						 
							
							
							<button type='button' class='btn btn-primary'>


							<i class='bi bi-pen'></i>
							
							
							</button>
							
							
							
							
							
							
							
							
							</a>


						
							




							 



							<a href='delete.php?id=".$row['rowid']."'  >
							
							<button type='button' class='btn btn-danger'  onclick='return confirm('Are you sure?')'  >


							<i class='bi bi-trash'></i>
							</button>
							
						
							
							</a>






                            <a href='images/index.php?id=".$row['rowid']." '>
							
							
							
					 
							<button type='button' class='btn btn-primary'>


							<i class='bi bi-eye'></i>
							
							
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






 
<script>


function a(  url) {


 
if (confirm("Press a button!") == true) {
	window.location = url;
} else {
 
}

}


</script>










</html>