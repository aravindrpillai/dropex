<?php

@ include('db.php');

/*
person who transfer money -> a
person who receives money -> b
*/

$amount_transfered = $_POST['amount'];
$b_email = $_POST['email'];
$a_slno = $_POST['my_slno'];
$comment = $_POST['comment'];

if     (!empty($_SERVER['HTTP_CLIENT_IP']))       {$ip = $_SERVER['HTTP_CLIENT_IP'];} 
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];} 
else                                              {$ip = $_SERVER['REMOTE_ADDR'];}
$a_ip = $ip;

$result = mysql_query("SELECT slno,acc_balance,email_id,full_name FROM bank_register WHERE email_id=\"$b_email\"");
if(!$result) echo '<font color="red" size="3">'.mysql_error().'</font>';
$rows = mysql_fetch_array($result);
$b_balance =  $rows['acc_balance'];
$b_slno =  $rows['slno'];
$b_email =  $rows['email_id'];
$b_name =  $rows['full_name'];


$result = mysql_query("SELECT slno,acc_balance,email_id,full_name FROM bank_register WHERE slno=\"$a_slno\"");
if(!$result) echo '<font color="red" size="3">'.mysql_error().'</font>';
$rows = mysql_fetch_array($result);
$a_balance =  $rows['acc_balance'];
$a_slno =  $rows['slno'];
$a_email =  $rows['email_id'];
$a_name =  $rows['full_name'];

$b_new_balance = $b_balance + $amount_transfered; 
$a_new_balance = $a_balance - $amount_transfered;


$success_flag =1;

$query = "CREATE TABLE IF NOT EXISTS transaction 
(slno INT NOT NULL AUTO_INCREMENT, a_slno INT, a_name VARCHAR (30), a_email VARCHAR (70), b_slno INT, b_name VARCHAR (30), b_email VARCHAR (70), amount VARCHAR (10),  comment VARCHAR (200), date_time DATETIME,                      a_ip VARCHAR(17),PRIMARY KEY(slno))";
$result = mysql_query($query); if (!$result)  { echo"<font color='red' size='3'> Could'nt create new table</font>"; } 

$query = "INSERT INTO transaction (a_slno,a_name,a_email,b_slno,b_name,b_email,amount,comment,date_time,a_ip) VALUES 
(\"$a_slno\",\"$a_name\",\"$a_email\",\"$b_slno\",\"$b_name\",\"$b_email\",\"$amount_transfered\",\"$comment\",NOW(),\"$a_ip\")";
$result = mysql_query($query);  
if (!$result)  { echo "<font color='red' size='3'> Data Addition to transaction Error</font>"; } 
else
{
$success_flag =0;

$query = "UPDATE bank_register SET acc_balance=\"$b_new_balance\" WHERE slno=\"$b_slno\" ";
$result = mysql_query($query); if(!$result)  { echo "<font color='red' size='3'>Error in party B Addition</font>"; $success_flag =1;} 
													
$query = "UPDATE bank_register SET acc_balance=\"$a_new_balance\" WHERE slno=\"$a_slno\" ";
$result = mysql_query($query); if(!$result)  { echo "<font color='red' size='3'>Error in party A deduction</font>";  $success_flag =1;} 

}


if( $success_flag == 0)
echo "<font color='green' size='3'>Amount Successfully Transfered</font>";



?>