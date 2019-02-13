<?php

include_once('db.php');

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$contact_no = $_POST['contact_no'];
$dob = $_POST['dob'];
$nationality = $_POST['nationality'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO bank_register (full_name,email_id,contact_no,dob,nationality, address,username,password) VALUES (\"$fullname\",\"$email\",\"$contact_no\",\"$dob\",\"$nationality\",\"$address\",\"$username\",\"$password\")";

$result = mysql_query($query);
if(!$result) echo mysql_error();
else 
{
$header = "From:mail4creators@gmail.com \r\n";
$msg = "Welcome to Dropex MOney Transfer Network. <br> Your Username : $username <br> Your Password : $password";
mail($email, 'Welcome To Dropex',$msg, $header);
echo '1';
}

?>