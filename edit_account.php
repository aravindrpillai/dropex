
<div id='close_all' onclick="on_load_login();"> <img src="images/close.png" height="22px" width="70px"> &nbsp;&nbsp;&nbsp;</div>
<div id="left_content"><img src='images/login_side_pic_for_edit.png' height='430px' width='300px'></div>
<div id="right_content">
<br><br>
<img src="images/edit.png" width='32px' height="32px" class="box_img">

<h2>Edit My Profile Details</h2>  
<br><br>

<table>
<tr><td class='td_edit'>Full Name</td><td><input class='edit_field' onchange='update("fullname","<?php echo $slno ?>");' type="text" value='<?php echo $fullname ?>' id='fullname' class="new_user_form"></td><td id='fullname_msg'></td></tr>
<tr><td class='td_edit'>Email Id</td><td><input class='edit_field' onchange='update("email","<?php echo $slno ?>");' type="email" id='email' value='<?php echo $email_id ?>' class="new_user_form"></td><td id='email_msg'></td></tr>
<tr><td class='td_edit'>Contact No</td><td><input class='edit_field' onchange='update("contact_no","<?php echo $slno ?>");' id='contact_no' value='<?php echo $contact_no ?>' type="text" class="new_user_form"></td><td id='contact_no_msg'></td></tr>
<tr><td class='td_edit'>Date Of Birth</td><td><input class='edit_field' onchange='update("dob","<?php echo $slno ?>");' id='dob' type="date" value='<?php echo $dob ?>' class="new_user_form"></td><td id='dob_msg'></td></tr>
<tr><td class='td_edit'>Nationality</td><td><input class='edit_field' onchange='update("nationality","<?php echo $slno ?>");' id='nationality' value='<?php echo $nationality ?>' type="text" class="new_user_form"></td><td id='nationality_msg'></td></tr>
<tr><td class='td_edit'>Address</td><td><input class='edit_field' onchange='update("address","<?php echo $slno ?>");' id='address' type="text" value='<?php echo $address ?>' class="new_user_form"></td><td id='address_msg'></td></tr>
<tr><td><br /></td><td><br /></td></tr>
<tr><td class='td_edit'>Username</td><td><input class='edit_field' onchange='update("username","<?php echo $slno ?>");' id='username' type="text" value='<?php echo $username ?>' class="new_user_form"></td><td id='username_msg'></td></tr>
<tr><td class='td_edit' >Password</td><td><input class='edit_field' onchange='update("password","<?php echo $slno ?>");' id='password' type="text" value='<?php echo $password ?>' class="new_user_form"></td><td id='password1_msg'></td></tr>
</table>    



</div><!--end of right content-->

    
<div style=" clear:both;"></div>
