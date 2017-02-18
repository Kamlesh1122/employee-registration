<?php
include_once('load_data.php');
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Employee Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
        <!-- lined-icons -->
        <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
        <!-- //lined-icons -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <!--clock init-->
        <script src="js/css3clock.js"></script>
        <!--Easy Pie Chart-->
        <!--skycons-icons-->
        <script src="js/skycons.js"></script>
        <!--//skycons-icons-->
    </head> 
    <body>
        <div class="page-container">
            <!--/content-inner-->
            <div class="left-content">
                <div class="inner-content">
                    <!-- header-starts -->
                    <div class="header-section">
                        <!--menu-right-->
                        <div class="top_menu">
                           
                            <div class="profile_details_left">
                             
                            </div>
                            <div class="clearfix"></div>	
                            <!--//profile_details-->
                        </div>
                        <!--//menu-right-->
                        <div class="clearfix"></div>
                    </div>

                    <!-- //header-ends -->
                    <!--//outer-wp-->
                    <div class="outter-wp">
                        <!--/sub-heard-part-->
                        <div class="sub-heard-part">
                            <ol class="breadcrumb m-b-0">
                                <li><a href="dashboard.php">Home</a></li>
                                <li class="active">Registration</li>
                            </ol>
                        </div>   
                        <!--/sub-heard-part-->	
                        <!--/forms-->
                        <div class="forms-main">
                            <h2 class="inner-tittle">Employee Details</h2>
                            <div class="graph-form">
                                <div class="form-body">
                                    <form class="form-horizontal" name="regfrm">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Employee Name</label> 
                                                <div class="col-sm-4"> 
                                                    <input type="text" class="form-control" id="empname" placeholder="Employee Name"> 
                                                </div> 
                                            </div> 
                                            <div class="form-group">
                                                    <label for="checkbox" class="col-sm-3 control-label">Gender</label>
                                                    <div class="col-sm-4">
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio" value="Male" checked>Male</label>
                                                              </div>
                                                              <div class="radio">
                                                                <label><input type="radio" name="optradio" value="Female">Female</label>
                                                              </div>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Department</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" id="deptdrp" placeholder="select deartment">
                                                        <option value="" selected hidden>Select department....</option>
                                                        <?php echo $dep_drp; ?>
                                                    </select>
                                                  </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-sm-3 control-label">Salary</label> 
                                                <div class="col-sm-4"> 
                                                    <input type="text" class="form-control" id="salary" placeholder="Salary per month"> 
                                                </div> 
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Street Address</label> 
                                                <div class="col-sm-4"> 
                                                    <textarea class="form-control" rows="5"id="address" placeholder="Street Address"></textarea>
                                                </div> 
                                            </div> 
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">State</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" id="deptstate">
                                                      <option value="" selected hidden>Select State....</option>
                                                      <?php echo $state_drp; ?>
                                                    </select>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">City</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" id="deptcity" >
                                                      <option value="" selected hidden>Select City....</option>
                                                      <?php echo $city_drp; ?>
                                                    </select>
                                                  </div>
                                            </div>
                                            
                                            <div class="col-sm-offset-3"> 
                                                <button type="button" id="regsub" class="btn btn-default">Register</button> 
                                            </div>
                                        
                                        </form> 
                                </div>

                            </div>
                            <!--/forms-inner-->
                            <div class="forms-inner">
                               
                              
                            </div>
                            <!--//forms-inner-->
                        </div> 
                        <!--//forms-->											   
                    </div>
                    <!--//outer-wp-->
                    <!--footer section start-->
                    <footer>
                        <p>&copy 2017 All Rights Reserved | Design by Kamlesh Savaliya</p>
                    </footer>
                    <!--footer section end-->
                </div>
            </div>
            <!--//content-inner-->
            <!--/sidebar-menu-->
            <div class="sidebar-menu">
                <header class="logo">
                    <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="dashboard.php"> <span id="logo"> <h1>Employee Management</h1></span> 
                        <!--<img id="logo" src="" alt="Logo"/>--> 
                    </a> 
                </header>
                <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
              
                 <?php include('footer.php'); ?>
            </div>
            <div class="clearfix"></div>		
        </div>
        <script>
            var toggle = true;

            $(".sidebar-icon").click(function () {
                if (toggle)
                {
                    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                    $("#menu span").css({"position": "absolute"});
                } else
                {
                    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                    setTimeout(function () {
                        $("#menu span").css({"position": "relative"});
                    }, 400);
                }

                toggle = !toggle;
            });
        </script>
        <!--js -->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="custom-js/dashboard.js"></script>
    </body>
</html>