<?php
$connection = mysql_connect("localhost", "", ""); // Establishing Connection with Server..
 //create db if not exist
$query=mysql_query("
CREATE DATABASE IF NOT EXISTS mydba;
CREATE TABLE  IF NOT EXISTS form_element(
id int(10) NOT NULL AUTO_INCREMENT,
input_f varchar(255) NOT NULL,
input_l varchar(255) NOT NULL,
input_m varchar(255) NOT NULL,
input_p varchar(255) NOT NULL,
PRIMARY KEY (id)
)");
$db = mysql_select_db("mydba", $connection); // Selecting Database
//Fetching Values from URL
$name2=$_POST['name1'];
$name22=$_POST['name12'];
$email2=$_POST['email1'];
$password2=$_POST['password1'];
///Insert query
$query = mysql_query("insert into form_element(input_fn,input_ln,input_m,input_p) values ('$name2','$name22', '$email2', '$password2')");
echo "Fetching Data...  
User Entered This data:  
First Name: " ,  $name2 , " ,
Last Name: " , $name22 , " ,
Email: " , $email2 ," , 
Password: " , $password2,
"  ";
 
mysql_close($connection); // Connection Closed
?>
