<?php
// session_start();
$user_logged_id="no";
if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {
    $user_logged_id="yes";
    // print_r($_SESSION);
}
// echo $user_logged_id;
// exit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Booktique| Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/logo.ico"> 

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>
<?php
// $user_logged_id = "no";
// if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {
  // $user_logged_id = "yes";
  // $_SESSION['u_fnm'] = $user_name;
// print_r($_POST);
// exit();
// }
?>
<body>
   

	

    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area">
		
            <!-- Top Header Area Start -->
    <div class="top_header_area">
   <div class="container h-100">
   <div class="row h-100 align-items-center justify-content-end">

       <div class="col-12 col-lg-7">
    <div class="top_single_area d-flex align-items-center">
      <!-- Logo Area -->
        <div class="top_logo"  >
          <a href="#"><img src="img/core-img/logo.png"  alt=""></a>
		  
     </div>
      		 

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!-- Header Social Area -->
                            
                       <?php 
include('includes/nav.php');
					   ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** Header Area End ****** -->

  