
<div id='close_all' onclick="on_load_login();"> <img src="images/close.png" height="22px" width="70px"> &nbsp;&nbsp;&nbsp;</div>
<div id="left_content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src='images/bank.png' height='330px' width='190px'></div>
<div id="right_content">

<img src="images/bank1.png" width='43x' height="43px" class="box_img">
<br>
<font size="+2"><b>Bank Transfer</b></font>  
<br><br><br>
<table>

<tr>
<td class='td_edit'>Bank Name</td>
<td><input class='add_new_field' id='bank_name' type="text"></td>
<td id='_msg'></td>
</tr>

<tr>
<td class='td_edit'>Country</td>
<td><input class='add_new_field' id='bank_country' type="text" value='<?php echo $nationality ?>'</td>
<td id='_msg'></td>
</tr>

<tr>
<td class='td_edit'>Area</td>
<td><input class='add_new_field' id='bank_area' type="text"></td>
<td id='_msg'></td>
</tr>

<tr>
<td class='td_edit'>Bank Identification Code &nbsp;&nbsp;&nbsp;</td>
<td><input class='add_new_field' id='bank_bic' type="text"></td>
<td id='_msg'></td>
</tr>
<tr>
<td class='td_edit'>Area Code</td>
<td><input class='add_new_field' id='bank_area_code' type="text"></td>
<td id='_msg'></td>
</tr>

<tr>
<td class='td_edit'>Account No</td>
<td><input class='add_new_field' id='bank_accno' type="text"></td>
<td id='_msg'></td>
</tr>

<tr>
<td class='td_edit'>Amount</td>
<td><input class='add_new_field' id='bank_amount' type="text"></td>
<td id='_msg'></td>
</tr>


<tr>
<td class='td_edit'>Comment</td>
<td><input class='add_new_field' id='bank_comment' type="text"></td>
<td id='_msg'></td>
</tr>


<tr><td><br /></td><td><br /></td><td></td></tr>

<tr>
<td></td>
<td><center><img src="images/bank_transfer_button.png" width="150px" height="40px" onClick='transfer_to_bank();'></center></td>
<td></td></tr>
</table> 
   
<br />
<center><font color='red' size='2'><div id='recharge_error'></div></font></center>



</div><!--end of right content-->

    
<div style=" clear:both;"></div>
