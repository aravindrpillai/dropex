
<div id='close_all' onclick="on_load_index();"> <img src="images/close.png" height="22px" width="70px"> &nbsp;&nbsp;&nbsp;</div>
<div id="left_content"><img src='images/doller.jpg' height='420px' width='320px'></div>
<div id="right_content">

<img src="images/d.png" width='43x' height="43px" class="box_img">
<br>
<font size="+2"><b>Welcome To Dropex</b></font>  
<br><br>
<table>
<tr><td class='td_edit'>Full Name</td><td><input class='add_new_field' onchange='validate("fullname");' type="text" id='fullname' class="new_user_form"></td><td id='fullname_msg'></td></tr>
<tr><td class='td_edit'>Email Id</td><td><input class='add_new_field' onchange='validate("email");' type="email" id='email' class="new_user_form"></td><td id='email_msg'></td></tr>
<tr><td class='td_edit'>Contact No</td><td><input class='add_new_field' onchange='validate("contact_no");' id='contact_no' type="text" class="new_user_form"></td><td id='contact_no_msg'></td></tr>
<tr><td class='td_edit'>Date Of Birth &nbsp;&nbsp;</td><td><input class='add_new_field' onchange='validate("dob");' id='dob' type="date" class="new_user_form"></td><td id='dob_msg'></td></tr>
<tr><td class='td_edit'>Nationality</td><td><input class='add_new_field' onchange='validate("nationality");' id='nationality' type="text" class="new_user_form"></td><td id='nationality_msg'></td></tr>
<tr><td class='td_edit'>Address</td><td><input class='add_new_field' onchange='validate("address");' id='address' type="text" class="new_user_form"></td><td id='address_msg'></td></tr>
<tr><td><br /></td><td><br /></td></tr>
<tr><td class='td_edit'>Username</td><td><input class='add_new_field' onchange='validate("username");' id='username' type="text" class="new_user_form"></td><td id='username_msg'></td></tr>
<tr><td class='td_edit'>Password</td><td><input class='add_new_field' onchange='validate("password1");' id='password1' type="password" class="new_user_form"></td><td id='password1_msg'></td></tr>
<tr><td class='td_edit'>Re Password</td><td><input class='add_new_field' onchange='validate("password2");' id='password2' type="password" class="new_user_form"></td><td id='password2_msg'></td></tr>
<tr><td><br /></td><td><br /></td></tr>
<tr><td></td><td><input type="submit" id='submit' class='new_user_submit' onclick='validate("submit");' ><input type="reset" class='new_user_reset'></td></tr>
</table>    
<br />
<center><font color='red' size='2'><div id='registration_error'></div></font></center>



</div><!--end of right content-->

    
<div style=" clear:both;"></div>
