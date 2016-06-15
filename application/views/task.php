<form method="post">
    <p>Name:</p>
    <input type="text" value=""id="name" name="name" placeholder="enter ur name here">
    <p>Mobile:</p>
    <input type="number" name="mobile"id="mobile" maxlength="10">
    <p>E-mail:</p>
    <input type="email"  name="email" id="email" placeholder="enter a valid email address">
    <p>Message:</p>
    <textarea name="message" id="message">
    <button id="submit" value="submit">Save</button>
</form>
<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
var name = $("#name").val();
var email = $("#email").val();
var mobile = $("#mobile").val();
var message =$("#message").val();
if(name==''||email==''||mobile==''||message=='')
{
alert("Please Fill All Fields");
}
else
{

$.ajax({
type: "POST",
url: "<?php base_url()?>task/submit",
data: dataString,
success: function(result){
alert(result);
}
});
}
return false;
});
});
</script>