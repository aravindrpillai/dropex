
<div id='close_all' onclick="on_load_login();"> <img src="images/close.png" height="22px" width="70px"> &nbsp;&nbsp;&nbsp;</div>
<div id="left_content"><img src='images/login_side_pic_for_dropex.jpg' height='420px' width='320px'></div>
<div id="right_content">
<br><br>
<img src="images/transfer.png" width='32px' height="32px" class="box_img">

<h2>Trasfer to another dropex account</h2>  
<br><br>
<table>

<tr>
<td class='transfer_table'> Dropex Email Id </td>
<td> <input type="text" id='dropex_email' class="dropex_transfer_field"> </td>
<td id='dropex_email_status'></td>
</tr>

<tr>
<td class='transfer_table'> Amount </td>
<td> <input type="text" class="dropex_transfer_field"  id='dropex_amount'> </td>
<td id='dropex_amount_status'></td>
</tr>

<tr>
<td class='transfer_table'> Transaction Comment &nbsp;&nbsp;</td>
<td> <input type="text" id='dropex_comment' class="dropex_transfer_field"> </td>
<td> Not Mandatory </td>
</tr>

<tr><td><br></td><td><br></td><td><br></td></tr>

<tr>
<td>  </td>
<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<a id='transfer_button' onClick="transfer_to_dropex(<?php echo $slno ?>,<?php echo $balance ?>);">
<img src="images/transfer_amount.png" width="170px" height="40px" border="0" style="border-radius:8px;">
</a> 
</td>
<td></td>
</tr>

</table>

<br><br><center><div id='transfer_status_1'></div></center>
<br><center><div id='transfer_status_2'></div></center>
</div><!--end of right content-->

    
<div style=" clear:both;"></div>
