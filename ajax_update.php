


<?php
include_once('db.php');
$field = $_REQUEST['field'];
$value = $_REQUEST['value'];
$slno = $_REQUEST['slno'];

$query = "UPDATE bank_register SET $field  = \"$value\" WHERE slno = \"$slno\"";
$result = mysql_query($query); 
if(!$result) echo '1';
else echo '0';


?>
