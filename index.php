

<?php  require_once('header.php');  ?>

<body  onLoad="on_load_index();">
<div id="main_container">
	<div id="header">
    	<div id="logo"><a href="home.html"><img src="images/title.png" width='400px' height="80px" border="0"></a></div>
        
        <div id="menu">
            <ul>                                        
                <li><a class="current" onclick='on_load_index();' >home</a></li>
                <li><a href="#" onclick='advertisements();'>Advertisements</a></li>
                <li><a href="#" onclick='add_new_account();' title="">New Registration</a></li>
                <li><a href="#" onclick='contact_us();' >Contact Us</a></li>
                </ul>
        </div>
        
    </div>
    
    <div class="green_box">
    	<div class="clock"><img src="images/welcome2.png" height='200px' weight='120px'></div>
        
        
        <div class="text_content">
<h1>Dropex Money Transfer</h1>
<p class="green"><font size="2">
    We are an international e-commerce business allowing payments and money transfers to be made through the Internet. Online money transfers serve as electronic 					
    alternatives to paying with traditional paper methods, such as cheques and money orders. 
    Dropex is an acquirer, performing payment processing for online vendors, auction sites, and other commercial users, for which it charges a fee. The fee depends 
    on what currency or payments the seller is using.
</font></p>
</div>

        
             
<div id="right_nav">
<form action="login.php" method="post">
<ul>                                        
        <li><h3><a>&nbsp;&nbsp;&nbsp;&nbsp;Login To Your Account</a></h3></li>
        <li><a> <input type='text' name='username' placeholder=' Enter Username'  class='textbox'/></a></li>
        <li><a> <input type='password' name='password' placeholder=' Enter Password'  class='textbox'/></a></li>
        <li><a><input type='submit' class='submit'/> &nbsp;&nbsp;<input type='reset' class='reset'/> </a></li>
        <li><a> &nbsp;&nbsp;&nbsp;Need Help, Forgot Password ?</a></li>
        
		<?php 
		if((isset($_REQUEST['msg'])) && ($_REQUEST['msg']== 'unfilled_login_field')) 
		echo '<li><a><font color="#FFF" size="2">&nbsp;&nbsp;&nbsp;<b> Unfilled Login Field </b></font></a></li>';
				
		if((isset($_REQUEST['msg'])) && ($_REQUEST['msg']== 'db_error')) 
		echo '<li><a><font color="#FFF" size="2"><b> Data Fetching Error Occured </b></font></a></li>';
		
		if((isset($_REQUEST['msg'])) && ($_REQUEST['msg']== 'no_account_found')) 
		echo '<li><a><font color="#FFF" size="2">&nbsp;<b> No Such Account Exists </b></font></a></li>';
		?>
        
        
        
</ul>
</form>
</div>
</div>

<!-------------------------------------------------------------------------------------------------------------------------------------->
<div class="main_content" id='create_account'><?php include('create_account.php'); ?> </div>
<!-------------------------------------------------------------------------------	------------------------------------------------------->    

<div class="main_content" id='transfer_to_dropex'><?php  require_once('footer.php');  ?></div>

</div> <!--end of main container-->
</body>
</html>