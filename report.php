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
        <link href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel='stylesheet' type='text/css' />
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
                                <li class="active">Reports</li>
                            </ol>
                        </div>   
                        <!--/sub-heard-part-->	
                        <!--/forms-->
                        <div class="forms-main">
                            <h2 class="inner-tittle">Search Employee Details</h2>
                            <div class="graph-form">
                                <div class="form-body">
                                    <div data-example-id="simple-form-inline">
                                        <form class="form-inline" >
                                            <div class="form-group"> 
                                                <input type="text" class="form-control element-margin" name="empname"  id="empname" placeholder="Employee name">
                                            </div>
                                             <div class="form-group"> 
                                                <select class="form-control element-margin" name="deptdrp" id="deptdrp" >
                                                    <option value="" selected>Select department....</option>
                                                    <?php echo $dep_drp; ?>
                                                </select>
                                            </div>
                                            <div class="form-group"> 
                                                <select class="form-control element-margin" name="statedrp" id="statedrp">
                                                    <option value="" selected>Select State....</option>
                                                    <?php echo $state_drp; ?>
                                                </select>
                                            </div>
                                            <div class="form-group"> 
                                                <select class="form-control element-margin" name="citydrp" id="citydrp" >
                                                    <option value="" selected>Select City....</option>
                                                    <?php echo $city_drp; ?>
                                                </select>
                                            </div>

                                            <button type="button" id="search" class="btn btn-default">Search</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="graph-form">
                                <table id="example" class="display" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending">Employee Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Department Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Salary</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Gender</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">City Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">State Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Address</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tblbody">
                                        <?php echo $report_data; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div> 
                        <!--//forms-->	
                        <table id="example" class="display" width="100%"></table>
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
        <script src="custom-js/report.js"></script>
        <script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    </body>
</html>
