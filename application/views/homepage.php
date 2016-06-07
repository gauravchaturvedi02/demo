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
  <div class="slider">
    <div>
      <h3><img src="assets/images/banner1.jpg" alt="Planet Green Bikes" /></h3>
    </div>
    <div>
      <h3><img src="assets/images/banner2.jpg" alt="Planet Green Bikes" /></h3>
    </div>
    <div>
      <h3><img src="assets/images/banner3.jpg" alt="Planet Green Bikes" /></h3>
    </div>
    
  </div>
  <div class="container">
    <div class="master">
      <div class="logomain">
        <div class="logo"><a href="index.html"><img src="assets/images/logo.png" alt="Planet Green Bikes" title="Planet Green Bikes" /></a></div>
        
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
                  
        </ul>
      </div>

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
      <div class="formVertical">
        <div class="formMiddle">
          <h3>Rent a Bike From the nearest PGB docking station</h3>
          <h4>Save money, meet awesome people, and consume less</h4>
          <div class="searchBlock">
            
            <select class="texttype">
            	<option selected="selected">Where would you like to rent a bike?</option>
            	<option>Barakhamba metro station</option>
<option>Patel chowk metro station</option>
<option>Mandi house metro station</option>
<option>Kohat metro station</option>
<option>Rithala metro station</option>
<option>Sainik farm crossing ambedkar nagar brt</option>
<option>Sheikh sarai crossing brt road</option>
<option>Chirag delhi crossing brt road</option>
<option>Sirifort crossing brt road</option>
<option>Lajpat nagar brt road</option>
<option>Defence colony crossing brt road</option>
<option>Near moolchand flyover brt road</option>
<option>Jangpura outside metro station brt road</option>
<option>Near high court mathura road sher shah road 
brt crossing</option>
            </select>
            <input class="texttype" name="time" type="text" value="Start Time" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
            <input class="texttype" name="date" type="text" value="Start Date" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
            <input class="searchButton" name="searchbutton" type="button" value="Search Bike" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="top benefitsMain">
  <div class="container">
    <div class="master">
      <h2>Benefits</h2>
      <ul class="benefits">
        <li><img src="assets/images/last-mile-connectivity.png" alt="Last mile connectivity" class="borderRed" />
          <h4>Last mile<br />
            connectivity</h4>
        </li>
        <li><img src="assets/images/air-pollution.png" alt="Reduction of air pollution" class="borderGreen" />
          <h4>Reduction <br />
            of air pollution</h4>
        </li>
        <li><img src="assets/images/traffic-congestion.png" alt="Reduction of traffic congestion" class="borderBlue" />
          <h4>Reduction <br />
            of traffic congestion</h4>
        </li>
        <li><img src="assets/images/noise-pollution.png" alt="Reduction of noise pollution" class="borderPurple" />
          <h4>Reduction of noise <br />
            pollution</h4>
        </li>
        <li><img src="assets/images/easier-parking.png" alt="Easier Parking" class="borderYellow" />
          <h4>Easier <br />
            Parking</h4>
        </li>
        <li><img src="assets/images/fatalities.png" alt="Lower Likelihood of Causing Fatalities" class="borderPink" />
          <h4>Lower Likelihood of <br />
            Causing Fatalities</h4>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="top map">
  <div class="container">
    <div class="master">
    	<div class="selectLocation">
        <img src="assets/images/left-shadow.png" alt="" class="leftshadow" />
        <img src="assets/images/bottom-shadow.png" alt="" class="bottomshadow" />
<h4>Select Location</h4>
<ul id="myform">
<li><input type="radio" name="map" lat="28.6303582" checked="checked" long="77.2212742" value="Barakhamba metro station"/> Barakhamba metro station</li>
<li><input type="radio" name="map"lat="28.6233" long="77.2145" value="Patel chowk metro station" /> Patel chowk metro station</li>
<li><input type="radio" name="map" lat="28.6259" long="77.2343" value="Mandi house metro station"/> Mandi house metro station</li>
<li><input type="radio" name="map" lat="28.6980" long="77.1405" value="Kohat metro station"/> Kohat metro station</li>
<li><input type="radio" name="map" lat="28.7208" long="77.1071" value="Rithala metro station" /> Rithala metro station</li>
<li><input type="radio" name="map" lat="28.5208" long="77.2326" value="Sainik farm crossing ambedkar nagar brt"/> Sainik farm crossing ambedkar nagar brt</li>
<li><input type="radio" name="map" lat="28.5216351" long="77.2266206" value="Sheikh sarai crossing brt road"/> Sheikh sarai crossing brt road</li>
<li><input type="radio" name="map" lat="28.5400979" long="77.2267123" value="Chirag delhi crossing brt road"/> Chirag delhi crossing brt road</li>
<li><input type="radio" name="map" lat="28.5553494" long="77.2199512" value="Sirifort crossing brt road"/> Sirifort crossing brt road</li>
<li><input type="radio" name="map" lat="28.5677" long="77.2433" value="Lajpat nagar brt road" /> Lajpat nagar brt road</li>
<li><input type="radio" name="map" lat="28.5726" long="77.2325" value="Defence colony crossing brt road" /> Defence colony crossing brt road</li>
<li><input type="radio" name="map" lat="28.568366" long="77.1999314" value="Near moolchand flyover brt road"/> Near moolchand flyover brt road</li>
<li><input type="radio" name="map" lat="28.6090529" long="77.2010867" value="Jangpura outside metro station brt road"/> Jangpura outside metro station brt road</li>
<li><input type="radio" name="map" lat="28.6089774" long="77.2339177" value=" Near high court mathura road sher shah road brt crossing"/> Near high court mathura road sher shah road brt crossing</li>
  </ul>
 <!--<div class="directions">
    <form action="http://maps.google.com/maps" method="get" target="_blank">
       <input type="hidden" name="saddr" class="dir-input" value="" />
       <input type="hidden" name="daddr" class="from" value="" />
       <input type="submit" value="Get directions" class="dir-button button" />
    </form>
  </div>-->
</div>
    
    </div>
  </div>
</div>



  <?php 
if($this->session->flashdata())
{
echo '<div class="success-msg" style="color: green;font-size: 17px;">';
echo $this->session->flashdata('success');
echo '</div>';

echo '<div class="error-msg" style="color: red;font-size: 17px;">';
echo $this->session->flashdata('error');
echo '</div>';
}
?>



<!--Home Banner js--> 
<script src="assets/slickjs/jquery.min.js"></script> 
<script type="text/javascript" src="assets/slickjs/slick.min.js"></script> 
<script>
      $(document).ready(function(){
        $('.slider').slick({
          centerMode: true,
          centerPadding: '0px',
          dots: false,
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
		  autoplay:true
        });
		
		  
      });
</script>
<script >
$(document).ready(function() {
function getLocation() {
  if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(showPosition);
  } else {
  alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
  var lat = position.coords.latitude;
  var lng = position.coords.longitude;
  //map.setCenter(new google.maps.LatLng(lat, lng));
  console.log(position);
  console.log(lat+''+lng);
  $('.dir-input').attr('value', lat+','+lng);
}
getLocation();
    

      var lat = $("#myform input[type='radio'][name='map']:checked").attr("lat");
      var long = $("#myform input[type='radio'][name='map']:checked").attr("long");

      $("#myform input[type='radio'][name='map']").change(function () {
          
           var lat = $("#myform input[type='radio'][name='map']:checked").attr("lat");
           var long = $("#myform input[type='radio'][name='map']:checked").attr("long");

           var val = $("#myform input[type='radio'][name='map']:checked").val();
          $('.from').attr('value', lat+','+long);
         // getLocation();
    
          if ($('iframe').length > 0) {
            
                $('iframe').remove();
               
            }
         
            setTimeout(create_map(lat,long), 2000);
        });





function create_map(lat,long){
  var iframe = document.createElement("iframe");
  iframe.onload = function() {
   var doc = iframe.contentDocument;

   iframe.contentWindow.showNewMap = function() {
    var mapContainer =  doc.createElement('div');

    mapContainer.setAttribute('style',"width: 100%; height: 100%");
     iframe.style.height = '100%';
     iframe.style.width = '100%';
    doc.body.appendChild(mapContainer);

    var mapOptions = {
        center: new this.google.maps.LatLng(lat,long),
        zoom:17,
        mapTypeId: this.google.maps.MapTypeId.ROADMAP
    }

    var map = new this.google.maps.Map(mapContainer,mapOptions);
}

var script = document.createElement('script');
script.type = 'text/javascript';
script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&' + 'callback=showNewMap';
iframe.contentDocument.getElementsByTagName('head')[0].appendChild(script); };

 $('.map').append(iframe);


}

create_map(lat,long);

});

 </script>

