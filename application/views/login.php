<?php
date_default_timezone_set('Asia/Calcutta');
$current_url = current_url();
$page_name = uri_string();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login | Planet Green Bikes</title>
<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet" type="text/css" />
 <link href="assets_admin/css/bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
<script src="assets_admin/js/bootstrap.min.js"></script>
</head>
<body>
<div class="top fullbanner">
  <div class="innerBanner"><img src="<?php echo base_url(); ?>assets/images/inner-banner.jpg" alt=""/></div>
  <div class="container">
    <div class="master">
      <div class="logomain">
        <div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Planet Green Bikes" title="Planet Green Bikes" /></a></div>
          <ul id="navmenu-h">
          <li><a href="<?php echo base_url(); ?>howitworks">How it works</a></li>
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
<div class="top howitworksMain">
  <div class="top innerPage">
  <div class="container">
    <div class="master">
      <h2>Login</h2>

        <?php 
        if($this->session->flashdata())
        {
          echo '<div class="success-msg" style="color: green;font-size: 17px;">';
          echo $this->session->flashdata('success_msg');
          echo '</div>';

          echo '<div class="error-msg" style="color: red;font-size: 17px;">';
          echo $this->session->flashdata('error_msg');
          echo '</div>';
        }
        ?>
      <div class="registerForm">
      <?php echo form_open_multipart(base_url('login/save'), array( 'id' => 'login_form' , 'class' => 'registerForm'));?>
    
          <div class="column1">
            <input onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" type="text" class="email form-control" autocomplete="off" name="email" value="" placeholder="Email" data-container="body" data-toggle="popover" data-placement="top" data-content="Please Enter a Valid Email id!"/>
         
          </div>
          <div class="column1">
            <input onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" type="password" value="" class="password form-control" autocomplete="off" name="password" placeholder="Please Enter Your Passowrd" data-container="body" data-toggle="popover" data-placement="top" data-content="Password is Required!"/>
         
          </div>
          <div class="column1">
            <button type="submit" name="submit" class="continue save_button" id="save_button" value="Continue">Continue</button>
          </div>
    
        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">

$(document).ready(function() {
jQuery('[data-toggle="tooltip"]').tooltip();

  function isValidEmailAddress(emailAddress) 
  {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
      return pattern.test(emailAddress);
      //console.log(pattern.test(emailAddress));
  } 

  $('.email').focusout(function(event) {
    var email = $(".email").val();
    if( !isValidEmailAddress(email) ) {    
       $('.email').popover('show');
     }

  });



    jQuery(".form-control").keyup(function(e) {
    if(e.which != 13)
    {
      jQuery(this).parent().removeClass('has-error');
      jQuery(this).popover('destroy');
    }
    else{
      return false;
    }
  });

  $("#save_button").click(function() {

    flag = 1;

    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  if( $(".email").val() == "" )
    {    
      $(".email").parent().addClass('has-error');
      $(".email").focus();
      $(".email").popover('show');
      flag = 0;
      return false;
    }
    else if( $(".password").val() == "" )
    {   
      $(".password").parent().addClass('has-error');
      $(".password").focus();
      $(".password").popover('show');
      flag = 0;
      return false;
    }

     if(flag == 1 )
    {
      jQuery(this).removeAttr('id');
      jQuery("#login_form").submit();     

    }
   
  });

 
});

</script>