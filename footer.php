

<!-----------------------------------FOOTER OPEN----------------------------------------------------------------------->
<div id="footer">
<div class="copyright"><font size='2'><b>Dropex E-Money Transfer</b></font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php

$query = "SELECT * FROM db_test WHERE id=\"1\"";
$row = @ mysql_fetch_array(mysql_query($query));
$message = ($row['message'] != '')?'<font color="white"><b>'.$row['message'].'</b></font>':'<font color="red"><b>DB Not Linked</b></font>';


echo 'Message : '.$message;
?>

</div>


<div class="footer_links"> 
    <a href="#">About us</a>
    <a href="facebook.com">Facebook</a> 
    <a href="twitter.com">Twitter </a>
    <a href="http://money.rediff.com/">NSC / BSC </a>
</div>
</div>  
<!-----------------------------------FOOTER CLOSED--------------------------------------------------------------------->
 

