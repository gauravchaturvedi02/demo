<?php
date_default_timezone_set('Asia/Calcutta');
$current_url = current_url();
$page_name = uri_string();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Planet Green Bikes</title>
<link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/slickjs/slick.css"/>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
</head>
<body>
<div class="top fullbanner">
  <div class="innerBanner"><img src="assets/images/inner-banner.jpg" alt=""/></div>
  <div class="container">
    <div class="master">
      <div class="logomain">
        <div class="logo"><a href="<?php echo base_url(); ?>"><img src="assets/images/logo.png" alt="Planet Green Bikes" title="Planet Green Bikes" /></a></div>
          <ul id="navmenu-h">
           <?php $session_data = $this->session->userdata('users'); 
                 $username = $session_data['name'];
                 if(!empty($username)){
                  ?>
              <li><a href="<?php echo base_url(); ?>#">Hello, <?php echo $username; ?></a></li>
               <li><a href="<?php echo base_url(); ?>logout">Logout</a></li>
              <?php
                 }
              else{
                ?>
                <li><a href="<?php echo base_url(); ?>register">Sign up</a></li>
              <li><a href="<?php echo base_url(); ?>login">Sign in</a></li>
              <li><a href="<?php echo base_url(); ?>rentabike">Rent a bike</a></li>
            <?php
              }
             ?>
               <li><a href="<?php echo base_url(); ?>howitworks">How it works</a></li>
              
        </ul>
      </div>
      <div class="formVertical">
        <div class="formMiddle">
          <h3>Rent a Bike From the nearest PGB docking station</h3>
          <h4>Save money, meet awesome people, and consume less</h4>
          
        </div>
      </div>
    </div>
  </div>
</div>
<div class="top benefitsMain contactus">
  <div class="container">
    <div class="master">
      <h2>FAQs</h2>
   
    </div>
  </div>
</div>