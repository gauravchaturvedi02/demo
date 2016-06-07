
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Planet Green Bikes | Admmin Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets_admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets_admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets_admin/css/style.css" rel="stylesheet">
    <link href="assets_admin/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 
  </head>

  <body>

    <div id="login-page">

      <div class="container">
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
           <div class="logo">
            <a href="<?php echo base_url(); ?>"><img src="assets/images/logo.png" alt="Planet Green Bikes" title="Planet Green Bikes" />
           </a>
           </div>
        <?php echo form_open_multipart(base_url('admin/login'), array( 'id' => 'login_form', 'class' => 'form-login'));?>

            <h2 class="form-login-heading">Login to Continue</h2>
            <div class="login-wrap">
                <input type="text" class="form-control username" name="username" placeholder="User Name" autofocus data-container="body" data-toggle="popover" data-placement="top" data-content="Username is Required!">
                <br>
                <input type="password" name="password" class="form-control password" placeholder="Password" data-container="body" data-toggle="popover" data-placement="top" data-content="Password is Required!">
                <label class="checkbox">
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
    
                    </span>
                </label>
                <input type="hidden" name="login_btn" value="success">
              <button class="btn btn-theme btn-block" name="submit" id="save_button" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
    
            </div>
    
              <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Forgot Password ?</h4>
                          </div>
                          <div class="modal-body">
                              <p>Enter your e-mail address below to reset your password.</p>
                              <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
    
                          </div>
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                              <button class="btn btn-theme" type="button">Submit</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- modal -->

               <?php echo form_close();?>
    
          <!-- </form> -->     
      
      </div>
    </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets_admin/js/jquery.js"></script>
    <script src="assets_admin/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets_admin/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/images/banner1.jpg", {speed: 500});
    </script>

    <script type="text/javascript">

$(document).ready(function() {
jQuery('[data-toggle="tooltip"]').tooltip();


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

  if( $(".username").val() == "" )
    {    
      $(".username").parent().addClass('has-error');
      $(".username").focus();
      $(".username").popover('show');
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


  </body>
</html>
