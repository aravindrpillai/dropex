<?php
include_once('db.php');
$email = trim($_REQUEST['email']);
$my_slno = $_REQUEST['my_slno'];

$query = "SELECT slno FROM bank_register WHERE email_id = \"$email\" ";
$result = mysql_query($query); 
if(!$result) echo mysql_error();
else
{
	$rows = mysql_fetch_array($result);
	$slno = $rows['slno'];
	if($slno == '') 			echo '2'; 
	elseif($slno == $my_slno)   echo '0	'; 
	else 						echo '1';
}



?>