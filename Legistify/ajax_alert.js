$(document).ready(function(){
$("#input_submit").click(function(){
var namef = $("#input_fn").val();
var namel = $("#input_ln").val();
var email = $("#input_m").val();
var password = $("#input_p").val(); 
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ namef + '&name12=' + namel + '&email1='+ email + '&password1='+ password;
if(namef==''||namel==''||email==''||password=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsubmit.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
 result.preventDefault();
}
return false;
});
});