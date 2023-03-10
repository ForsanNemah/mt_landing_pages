 


  
<?php
			//include our connection
			include 'dbconfig.php';
 
			//query from the table that we create
			$sql = "SELECT rowid, * FROM departments";
			$query = $db->query($sql);
 
			while($row = $query->fetchArray()){
				//echo $row['rowid']."<br>";
			








$department_name= $row['department_name'];
$department_id= $row['rowid'];


echo "

<br>
<br>

<h2> $department_name </h2>
<br>
 

<div id='$department_id' class='carousel slide' data-ride='carousel'  >
    <!-- Indicators -->
    <ol class='carousel-indicators'>
      <li data-target='#$department_id' data-slide-to='0' class='active'></li>
      <li data-target='#$department_id' data-slide-to='1'></li>
      <li data-target='#$department_id' data-slide-to='2'></li>
    </ol>

 
    <div class='carousel-inner' >

	
      
    


      


";

























			 

				$sql_in = "SELECT rowid, * FROM images_table where department_id=".$row['rowid']."";
				//echo 	$sql_in."<br>"; 
				$query_in = $db->query($sql_in);
				//echo $query_in->fetchArray()."wwe_before";
        
        $counter=0;
				while($row_in = $query_in->fetchArray()){

					//echo $row_in['image_path']."<br>"."wwe";

          $entry=$row_in['image_path'];
          if( $counter==0){

 
            echo "<div class='item  active '>
            
            <img src='admin/images/files/$entry' class='img-responsive' alt='Responsive image'   >
          
            </div>
            ";
            echo " ";
            echo "";
          
          
          }
          else{
          
            
             
            echo "<div class='item '>
            
            <img src='admin/images/files/$entry' class='img-responsive' alt='Responsive image'   >
          
            </div>
            ";
            echo " ";
            echo "";
            
          
          }
          $counter++;




				}
        //end of inner loop




        echo "
        
        
        
        
        
        
        
 
    <a class='left carousel-control' href='#$department_id' data-slide='prev'>
      <span class='glyphicon glyphicon-chevron-left'></span>
      <span class='sr-only'>Previous</span>
    </a>
    <a class='right carousel-control' href='#$department_id' data-slide='next'>
      <span class='glyphicon glyphicon-chevron-right'></span>
      <span class='sr-only'>Next</span>
    </a>

  </div>
  
  </div>
 
        
        
        
        <br>
        <br>
        
        
        
        
        
        
        ";














 
				 
					 
					 
			}
      //end of outer loop 





      
		?>