

<?php
// Start the session
session_start();


 //$_SESSION["project_path"]=" http://localhost:8081/mt_landing_pages/ymp";
 $_SESSION["project_path"]="http://mtlp.masagoo.com/ymp";

if($_SESSION["loged_in"]=="1"){

	
	}
	else{
	  echo " not ok";
	  header('location: http://localhost:8081/mt_landing_pages/ymp/admin/login/');
	
	}
?>

<meta charset="utf-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"  >لوحة التحكم</a>
    </div>
    <ul class="nav navbar-nav">
      





	  <li class=""><a href="
	  <?php

echo $_SESSION["project_path"]."/admin/";
?>
 
	  
	 
	 
	 
	  ">الاقسام</a></li>







	  <li class="active"><a href="
	  
 
	  
	 
	  <?php

echo $_SESSION["project_path"]."/admin/login/";
?>
 
	 
	  ">تسجيل خروج </a></li>







     
    </ul>
  </div>
</nav>