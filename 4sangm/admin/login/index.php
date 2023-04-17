<!DOCTYPE html>


<?php

session_start();
$_SESSION["loged_in"] = "0";



?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>دخول</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body dir="">
      <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url(bg.img);
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

    <!-- Navbar -->
  
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form class="bg-white rounded shadow-5-strong p-5" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form1Example1" class="form-control" name="user" />
                  <label class="form-label" for="form1Example1">   اسم المستخدم </label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example2" class="form-control" name="pass" />
                  <label class="form-label" for="form1Example2">كلمة المرور </label>
                </div>

                <!-- 2 column grid layout for inline styling -->
             

                <!-- Submit button -->
                <button type="submit"  name="save" class="btn btn-primary btn-block">تسجيل دخول</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Footer-->
   
  <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>




    <?php
	if(isset($_POST['save'])){
		//include our connection
	// echo "posted";



//echo $_POST['user'];

   if($_POST['user']=="4san" and    $_POST['pass']=="123" ){

    $_SESSION["loged_in"] = "1";
    header('location: sections/index.php');


   }
 
	}
?>











</body>
</html>