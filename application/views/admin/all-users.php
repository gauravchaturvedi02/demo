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
    <link href="<?php echo base_url(); ?>assets_admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets_admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_admin/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_admin/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_admin/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets_admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets_admin/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets_admin/js/chart-master/Chart.js"></script>
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
            <a href="<?php echo base_url(); ?>" ><b class="logo" ><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Planet Green Bikes" title="Planet Green Bikes" /></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                  <!--   <li class="dropdown">
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
                  <!--   <li id="header_inbox_bar" class="dropdown">
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
                  <img src="<?php echo base_url(); ?>assets_admin/img/user-icon.png" class="" width="65">
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
                      <a  href="<?php echo base_url(); ?>dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                          <li><a href="<?php echo base_url(); ?>dashboard/allusers">All Users</a></li>
                          <li><a href="<?php echo base_url(); ?>dashboard/addnew">Add New</a></li>
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
            <h3><!-- <i class="fa fa-angle-right"></i>Planet Green Customers --></h3>
            </br>
    <?php 
      foreach($user_data as $data)
      {
      $name = $data['name'];
      $plan = $data['plan'];
      }
      ?>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> All Users</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th>Id</th>
                                  <th><i class="fa fa-user"></i> Name</th>
                                  <th ><i class="fa fa-info"></i> Selected Plan</th>
                                  <th><i class="fa fa-envelope"></i> Email</th>
                                  <th><i class="fa fa-envelope"></i> Phone Number</th>
                                  <th><i class=" fa fa-cog"></i> Status</th>
                                  <th><i class=" fa fa-edit"></i> Actions</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                               <?php 
                                foreach($user_data as $data)
                                  {
                                    $id = $data['id'];
                                    $name = $data['name'];
                                    $plan = $data['plan'];
                                    $email = $data['email'];
                                    $status = $data['status'];
                                    $phone = $data['phone'];
                                    ?>
                               
                                <tr id="<?php echo $id; ?>">
                                <td><?php echo $id; ?></td>
                                  <td> <a data-toggle="modal" href="#customerinfo" class="tooltips" data-placement="bottom" data-original-title="click to view full info"><?php echo $name;  ?></a>
                                   </td>
                                  <td class="hidden-phone"><?php echo $plan; ?></td>
                                  <td class="hidden-phone"><?php echo $email; ?></td>
                        
                                  <?php if(!empty($phone)){ 
                                  ?>
                                   <td><?php echo $phone; ?></td>
                                    
                                   <?php 
                                   }
                                   else{
                                   ?>
                                    <td>
                                     N.A.</td>
                                     <?php
                                      }
                                    ?>
                                 
                                  <?php if($status == 1){ 
                                  ?>
                                   <td><span class="label label-success label-mini">
                                   Active 
                                   <?php 
                                   }
                                   else{
                                   ?>
                                    <td><span class="label label-danger label-mini">
                                     Inactive
                                     <?php }
                                     ?>
                                   </span></td>
                                  <td>

                                  <?php if($status == 1){ 
                                  ?>
                                  <!--  <button disabled class="btn btn-success btn-xs" ><i class="fa fa-check"></i>
                                      </button> -->
                                      <button class="btn btn-primary btn-xs" data-toggle="modal" id="edit" ><i class="fa fa-pencil"></i>
                                      </button>
                                      <button class="btn btn-danger btn-xs" data-toggle="modal"  href="#customerdelete"><i class="fa fa-trash-o "></i></button>
                               
                               
                                   <?php 
                                   }
                                   else{
                                   ?>
                                     <!-- <button disabled class="btn btn-danger btn-xs" ><i class="fa fa-ban"></i>
                                      </button> -->
                                      <button class="btn btn-primary btn-xs" data-toggle="modal" href="#customerinfo" ><i class="fa fa-pencil"></i>
                                      </button>
                                      <button disabled class="btn btn-danger btn-xs" data-toggle="modal" href="#customerdelete"><i class="fa fa-trash-o "></i></button>
                                  
                                     <?php }
                                     ?>
                                     
                                  </td>
                                   
                              </tr>
                               <?php
                                  }
                                ?>
                              
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->

                               <!-- Modal -->
                      <div aria-hidden="true" aria-labelledby="customerinfoLabel" role="dialog" tabindex="-1" id="customerinfo" class="modal fade">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    
                                  </div>
                                  <div class="modal-body">
                                      <p><strong>Customer Details</strong></p>
                                        <table class="table table-striped table-advance table-hover">
                             <?php 
                                foreach($user_data as $data)
                                  {     $id= $data['id'];
                                        $name = $data['name'];
                                        $plan = $data['plan']; 
                                        $email= $data['email'];
                                        $phone= $data['phone'];
                                        $address = $data['address'];
                                        $city = $data['city'];
                                        $pincode= $data['pincode'];
                                        $country= $data['country']; }
                                    
                                    ?>
                              <thead>
                              <tr>
                                  <th>Id</th>
                                  <td class="hidden-phone"><?php echo $id; ?></td>
                              </tr>
                               <tr>
                                  <th>Name</th>
                                  <td class="hidden-phone"><?php echo $name; ?></td>
                              </tr>
                               <tr>
                                  <th>Plan</th>
                                  <td class="hidden-phone"><?php echo $plan; ?></td>
                              </tr>
                               <tr>
                                  <th>Email</th>
                                  <td class="hidden-phone"><?php echo $email; ?></td>
                              </tr>
                               <tr>
                                  <th>Phone</th>
                                  <td class="hidden-phone"><?php echo $phone; ?></td>
                              </tr>
                               <tr>
                                  <th>Address</th>
                                  <td class="hidden-phone"><?php echo $address; ?></td>
                              </tr>
                               <tr>
                                  <th>City</th>
                                  <td class="hidden-phone"><?php echo $city; ?></td>
                              </tr>
                               <tr>
                                  <th>Pincode</th>
                                  <td class="hidden-phone"><?php echo $pincode; ?></td>
                              </tr>
                               <tr>
                                  <th>Country</th>
                                  <td class="hidden-phone"><?php echo $country; ?></td>
                              </tr>
                              </thead>
                                  
                                        </table>
                                  <div class="modal-footer">
                                      <button data-dismiss="modal" class="btn btn-default" type="button" >Cancel</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                     

                      <div aria-hidden="true" aria-labelledby="customerdeleteLabel" role="dialog" tabindex="-1" id="customerdelete" class="modal fade">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title">DELETE USER!!!!</h4>
                                  </div>
                                  <div class="modal-body">
                                      <p>Are You sure you want to delete <?php echo $name;?> </p>
            
                                  </div>
                                  <div class="modal-footer">
                                      <a href="admin/all-" >Delete</a>
                                     

                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- modal -->

                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
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
    <script src="<?php echo base_url(); ?>assets_admin/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets_admin/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets_admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets_admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets_admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets_admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets_admin/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets_admin/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets_admin/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets_admin/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url(); ?>assets_admin/js/sparkline-chart.js"></script>    
    <script src="<?php echo base_url(); ?>assets_admin/js/zabuto_calendar.js"></script>  

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
        function  getId(element) {
    
             alert("Do YOu really want to delete the user ?????");
             if(element.parentNode.cellIndex == 6){
             var row = document.getElementById(element.parentNode.parentNode.rowIndex);
              row.parentNode.removeChild(row);
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js">
          $(document).ready(function(){
          $(#edit).click(function(){
          $.get("dashboard/viewuser", function($id){
            alert("ID: " + $id);
        });
    });
});
           
       
      }
       }
       
   </script>
  

  </body>
</html>
