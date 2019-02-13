<?php
include_once('db.php');
$slno = $_REQUEST['slno'];
$amount = $_REQUEST['amount'];

$query = "SELECT acc_balance FROM bank_register WHERE slno=\"$slno\" ";
$result = mysql_query($query); 
if(!$result) echo mysql_error();
else 
{
$rows = mysql_fetch_array($result);
$my_balance = $rows['acc_balance'];

if($my_balance < $amount) echo '0';
else echo '1';

}

?>