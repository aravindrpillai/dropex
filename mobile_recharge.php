
<div id='close_all' onclick="on_load_login();"> <img src="images/close.png" height="22px" width="70px"> &nbsp;&nbsp;&nbsp;</div>
<div id="left_content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src='images/recharge.jpg' height='330px' width='170px'></div>
<div id="right_content">

<img src="images/mobile.png" width='43x' height="43px" class="box_img">
<br>
<font size="+2"><b>E - Recharge</b></font>  
<br><br><br>
<table>

<tr>
<td class='td_edit'>Mobile No</td>
<td><input class='add_new_field' onchange='recharge("number",<?php echo $slno; ?>);' type="text" id='recharge_no'></td>
<td id='recharge_no_msg'></td>
</tr>

<tr>
<td class='td_edit'>Service Provider &nbsp;&nbsp;</td>
<td><select class='add_new_field' id='recharge_service_provider'>
<option> SELECT </option>
<option> AIRTEL </option>
<option> VODAFONE </option>
<option> AIRCEL </option>
<option> DOCOMO </option>
<option> BSNL </option>
<option> RELIANCE </option>
</select></td>
<td id='recharge_amount_msg'></td>
</tr>

<tr>
<td class='td_edit'>Amount</td>
<td><input class='add_new_field' onchange='recharge("amount",<?php echo $slno; ?>);' id='recharge_amount' type="text"></td>
<td id='recharge_amount_msg'></td>
</tr>

<tr><td><br /></td><td><br /></td><td></td></tr>

<tr>
<td></td>
<td><center><img src="images/recharge.png" width="150px" height="40px" onClick='recharge("submit",<?php echo $slno; ?>);'></center></td>
<td></td></tr>
</table> 
   
<br />
<center><font color='red' size='2'><div id='recharge_error'></div></font></center>



</div><!--end of right content-->

    
<div style=" clear:both;"></div>
