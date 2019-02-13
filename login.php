
<?php require_once('header.php'); ?>
<script> window.onload = function() { on_load_login(); }; </script>

<?php


@ $username = trim($_REQUEST['username']);
@ $password = trim($_REQUEST['password']);
if( ($username == '') || ($password == '') ) { header('Location:index.php?msg=unfilled_login_field'); exit; }
		
$query = "SELECT * FROM bank_register WHERE username=\"$username\" AND password=\"$password\" ";
$result = mysql_query($query); if(!$result)  { header('Location:index.php?msg=db_error'); exit; }

$rows=mysql_fetch_array($result);
if($rows['slno'] == '') { header('Location:index.php?msg=no_account_found'); exit; }

$slno 			= isset($rows['slno'])?$rows['slno']				:'0';

$fullname 		= isset($rows['full_name'])?$rows['full_name']		:'Demo';
$email_id 	  	= isset($rows['email_id'])?$rows['email_id']		:'Demo@gmail.com';
$contact_no 	= isset($rows['contact_no'])?$rows['contact_no']	:'9447-Demo-0';
$nationality 	= isset($rows['nationality'])?$rows['nationality']	:'Pakisthan';
$address 		= isset($rows['address'])?$rows['address']			:'House No 12 A, Banglore';
$dob 			= isset($rows['dob'])?$rows['dob']					:'19 May, 1992';
$username 		= isset($rows['username'])?$rows['username']		:'demo_user';
$password 		= isset($rows['password'])?$rows['password']		:'demo_pass';
$balance 		= isset($rows['acc_balance'])?$rows['acc_balance']	:'234';

?>
<!----------------------------------------------------------------------------------------------->

<body>
<div id="main_container">
	<div id="header">
    	<div id="logo"><a href="home.html"><img src="images/title.png" width='400px' height="80px" border="0"></a></div>
        
        <div id="menu">
            <ul>                                        
                <li><a class="current"  onclick='on_load_login();' title="">home</a></li>
                <li><a href='#'>Advertisements</a></li>
                <li><a onclick='transactions(<?php echo $slno ?>);'>My Transactions</a></li>
                <li><a onclick='contact_us();'>Contact Us</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </div>
        
    </div>
    
    <div class="green_box">
    	<div class="clock"><img src="images/welcome2.png" height='200px' weight='120px'></div>
        
        
        <div class="text_content">
        <br><h1>Welcome <?php echo @ $fullname.','; ?></h1>
        <p class="green">
        
<table>
<tr><td class="table_login_details">Email 			</td><td class="table_login_details">:</td><td class="table_login_details"> <?php echo @ $email_id; ?> 	</td></tr>
<tr><td class="table_login_details">Contact No 		</td><td class="table_login_details">:</td><td class="table_login_details"> <?php echo @ $contact_no; ?> </td></tr>
<tr><td class="table_login_details">Address 		</td><td class="table_login_details">:</td><td class="table_login_details"> <?php echo @ $address; ?> 	</td></tr>
<tr></td><td><td></td><td></td></tr>

<tr><td class="table_login_details">Date Of Birth 	</td><td class="table_login_details">:</td><td class="table_login_details"> <?php echo @ $dob; ?> 		</td></tr>
<tr><td class="table_login_details">Nationality 	</td><td class="table_login_details">:</td><td class="table_login_details"> <?php echo @ $nationality; ?></td></tr>
<tr><td></td><td></td></td><td></tr>

<tr><td class="table_login_details_bal"><b>Balance	</b></td>
<td class="table_login_details_bal" >:</td><td id='disp_balance' class="table_login_details_bal">&nbsp;<b><?php echo '$'.@ $balance; ?></b></td></tr>

</table>
        </p>
    
   
        </div>
        
        
<div id="right_nav">

    <ul>                                        
        
<br><br>
        <li><h3><a onclick='make_payment("dropex");'>> To Another Dropex Account</a></h3></li>
        <li><h3><a onclick='make_payment("bank");'>> To A Bank Account</a></h3></li>
        <li><h3><a onclick='make_payment("recharge");'>> Recharge Mobile</a></h3></li>
		 <li><h3><a onclick='transactions(<?php echo $slno ?>);'>> My Transactions</a></h3></li>
		 <li><h3><a onclick='make_payment("edit");'>> Edit My Account</a></h3></li>
		
        
    </ul>

</div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------------------->


<div class="main_content" id='transfer_to_dropex'><?php include('transfer_to_dropex_account.php'); ?> </div>
<div class="main_content" id='edit_account'><?php include('edit_account.php'); ?> </div>
<div class="main_content" id='list_transactions'><?php include('list_transactions.php'); ?> </div>
<div class="main_content" id='mobile_recharge'><?php include('mobile_recharge.php'); ?> </div>
<div class="main_content" id='bank_transfer'><?php include('transfer_to_bank.php'); ?> </div>

<!-------------------------------------------------------------------------------------------------------------------------------------->   
 

<div class="main_content" id='transfer_to_dropex'><?php  require_once('footer.php');  ?></div>
   

</div> <!--end of main container-->
</body>
</html>