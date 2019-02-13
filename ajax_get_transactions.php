


<?php
@ require_once('db.php');
$slno = $_REQUEST['slno'];

$query = "SELECT slno FROM transaction WHERE (a_slno=\"$slno\") OR (b_slno=\"$slno\")";
$result = mysql_query($query); if(!$result) echo "<font color='red' size='3'>Data Fetching Error. ".mysql_error()."</font>";
$count = mysql_num_rows($result);


if($count > 0)
{
$query = "SELECT * FROM transaction WHERE (a_slno=\"$slno\") OR (b_slno=\"$slno\") ORDER BY slno DESC";
$result = mysql_query($query); if(!$result) echo "<font color='red' size='3'>Data Fetching Error. ".mysql_error()."</font>";

$response = "<br><table>";
while($rows=mysql_fetch_array($result))
{
if($rows['a_slno']==$slno)
	{
		$row_a = '<tr><td><font color="blue" size="2">You Transferred </td><td><font color="blue" size="2"><b>&nbsp;&nbsp;&nbsp;$'.$rows['amount']. '</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td><td><font color="blue" size="2"> to '.$rows['b_name']. ' / ' .$rows['b_email'].'</td><td><font color="blue" size="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; On <b>'. $rows['date_time'].  '</b></td></tr>';
		$response = $response.$row_a;
	}

if($rows['b_slno']==$slno)
	{
		$row_b = '<tr><td><font color="green" size="2">You Received </td><td><font color="green" size="2"><b>&nbsp;&nbsp;&nbsp;$'.$rows['amount']. '</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td><td><font color="green" size="2"> from '.$rows['a_name']. ' / ' .$rows['a_email'].'</td><td><font color="green" size="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; On <b>'.$rows['date_time'].  '</b></td></tr>';
		$response = $response.$row_b;
	}
}

$response = $response.'</table>';

echo $response;
}

else
echo "<font size='3'>No Transactions Yet</font>";

?>