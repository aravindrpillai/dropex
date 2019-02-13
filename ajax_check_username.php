
<?php
include_once('db.php');
$username = $_POST['username'];
$flag = 0;
$query = 'SELECT username FROM bank_register ORDER BY slno DESC';
$result = mysql_query($query); 
if(!$result) echo '2'; // db_error;
else
{
while($rows= mysql_fetch_array($result))
if($rows['username'] == $username) { $flag=1; break;}
}

if($flag == 0) echo '0'; // No such username
else echo '1'; //Username exists 

?>