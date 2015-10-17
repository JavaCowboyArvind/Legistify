function checkForm() {
// Fetching values from all input fields and storing them in variables.
var fname = document.getElementById("input_fn").value;
var lname = document.getElementById("input_ln").value;
var email = document.getElementById("input_m").value;
var password = document.getElementById("input_p").value;
//Check input Fields Should not be blanks.
if (fname == '' || lname == '' || email == '' || password == '') {
alert("Fill All Fields");
} else {
//Notifying error fields
var fname1 = document.getElementById("namef");
var lname1 = document.getElementById("namel");
var email1 = document.getElementById("inmail");
var password1 = document.getElementById("inpass");
//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
if (fname1.innerHTML == 'Short! Please add more letters' || lname1.innerHTML == 'Short! Please add more letters'|| password1.innerHTML == 'Choose another Password' || email1.innerHTML == 'Invalid email') {
//alert("Fill Valid Information");
} else {
//Submit Form When All values are valid.

//document.getElementById("signup_form").submit();
}
}
}

// AJAX code to check input field values when onblur event triggerd.
function validate(field, query) {
var xmlhttp;
if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else { // for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState != 4 && xmlhttp.status == 200) { //not completed
document.getElementById(field).innerHTML = "Validating..";
} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { //complete and success
document.getElementById(field).innerHTML = xmlhttp.responseText;
} else { //not success when completed
document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
}
}
xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
xmlhttp.send();
}
