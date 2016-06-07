<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Planet Green | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="assets_admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets_admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets_admin/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets_admin/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets_admin/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets_admin/css/style.css" rel="stylesheet">
    <link href="assets_admin/css/style-responsive.css" rel="stylesheet">

    <script src="assets_admin/js/chart-master/Chart.js"></script>
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo base_url(); ?>" ><b class="logo" ><img src="assets/images/logo.png" alt="Planet Green Bikes" title="Planet Green Bikes" /></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <!-- <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                      
                        </ul>
                    </li> -->
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <!-- <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            
                        </ul>
                    </li> -->
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url(); ?>logout">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html">
                  <img src="assets_admin/img/user-icon.png" class="" width="65">
                  </a></p>
              	 <?php $session_data = $this->session->userdata('admin'); 
                      
                              
                       $username = $session_data['name'];

                       if(!empty($username)){
                        ?>
                          <h5 class="centered"><?php echo strtoupper($username); ?></h5>
                          <?php
                             }
                          else{
                            ?>
                            <h5 class="centered">Hello</h5>
                            <?php
                              }
                             ?>
                    	  	
                  <li class="mt">
                        <a class="active" href="<?php echo base_url(); ?>dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                          <li><a href="<?php echo base_url(); ?>dashboard/allusers">All Users</a></li>
                          <li><a href="buttons.html">Add New</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
					
					<div class="row mt">
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          <h3>Green Customers</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
					</div><!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
               

                    <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
          
                                        
                      <!-- First Action -->
                      <div class="desc">
                      
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                      	
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                      	
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                      	
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                      	
                      </div>

                      <!-- First Member -->
                      <div class="desc">
                      	
                      </div>
                      <!-- Second Member -->
                      <div class="desc">
                      	
                      </div>
                      <!-- Third Member -->
                      <div class="desc">
                      	
                      </div>
                      <!-- Fourth Member -->
                      <div class="desc">
                      	
                      </div>
                      <!-- Fifth Member -->
                      <div class="desc">
                      	
                      </div>

                        
                      
                  </div><!-- /col-lg-3 -->
              </div><!--/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - Planet Green Bikes
              <a href="<?php echo base_url(); ?>" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets_admin/js/jquery.js"></script>
    <script src="assets_admin/js/jquery-1.8.3.min.js"></script>
    <script src="assets_admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets_admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets_admin/js/jquery.scrollTo.min.js"></script>
    <script src="assets_admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets_admin/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets_admin/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets_admin/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets_admin/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets_admin/js/sparkline-chart.js"></script>    
	<script src="assets_admin/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Planet Green!',
            // (string | mandatory) the text inside the notification
            text: 'Welcome to Planet Green!',
            // (string | optional) the image to display on the left
            image: '',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
