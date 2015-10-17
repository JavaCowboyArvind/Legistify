<?php
error_reporting(0);
$value= $_GET['query'];
$formfield= $_GET['field']; 
if($formfield == "namef") {
if(strlen($value) < 4) {
echo "Short! Please add more letters";
}else {
 echo "<span class='sp'> Great! </span>";
}
}if($formfield == "namel") {
if(strlen($value) < 4) {
     echo "Short! Please add more letters";
}else{
echo "<span class='sp'> Great! </span>";
}
} 
if($formfield == "inpass") { 
if(strlen($value)<6){
echo "Choose another Password";
} else if((preg_match("#[0-9]+#",$value)) && (preg_match("#[a-z]+#",$value)) && (preg_match("#[A-Z]+#",$value))){
		echo "<span class='sp'> Feels Good </span>";
} else if((preg_match("#[0-9]+#",$value)) || (preg_match("#[a-z]+#",$value))){
		echo "<span class='sp1'> Weak </span>";
}
} 
 
if($formfield == "inmail") {
if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$value)) {
echo "Invalid email";
} else {
echo "<span class='sp'> Looks Nice! </span>";
}
} 
?>