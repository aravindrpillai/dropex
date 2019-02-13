function on_load_login()
{
	$('#transfer_to_dropex').hide();
	$('#edit_account').hide();
	$('#list_transactions').hide();
	$('#mobile_recharge').hide();
	$('#bank_transfer').hide();
}


function on_load_index()
{
	$('#create_account').hide();
//	$('#').hide();
}


function advertisements()
{
on_load_index();	
alert('Please Login To Add Advertisements');
}


function contact_us()
{
on_load_index();	
alert('\n\nWebsite : dropex.jeevaraksha.com \n\n Hosted By Jeevaraksha \n\n Contact No: 0040-2658-8045');
}

function redirect()
{ alert('redirect'); }

function transfer_to_bank()
{
var accno = $('#bank_accno').val();
var bank_name = $('#bank_name').val();
var bank_area = $('#bank_area').val();
var bank_country = $('#bank_country').val();
var bank_area_code = $('#bank_area_code').val();
var bic = $('#bank_bic').val();
var amount = $('#bank_amount').val();
var comment = $('#bank_comment').val();
var proceed = false;
var error_code = Math.random();

//alert ('\n Accno : '+ accno +'\n Bank NAme : '+ bank_name+'\n Bank Area : '+ bank_area +'\n BAnk Country : '+ bank_country+'\n BIC : '+ bic+'\n Bank Area Code: '+ bank_area_code +'\n Amount : '+amount +'\n Comment : '+comment );

error_code *= 1000000000000000000;

if( (accno == '')||(bank_name == '')||(amount == '') ||(bic == '') ||(bank_area == '') ||(bank_area_code == '')||(amount == '')  ) alert("Field Unfilled");
else proceed=confirm('Are you sure you want to continue? ');

if (proceed == true) alert('Sorry Transaction Failed. \n\n\n Reason: \n Transaction is rejected by bank. \n\nError Code : '+error_code+' \n\n');

}



function add_new_account()
{
$('#create_account').show(1000);
}

function recharge(field,slno)
{
if(field == 'submit')
alert('Server Busy : Error 581/AW/478 \n System : 14S/AD');
}


function validate(field)
{
	if(field == 'fullname') 	{ 	if($('#fullname').val()!='') $('#fullname_msg').html('<img src="images/tick.png" width="15px" height="15px">'); 
			else 						 $('#fullname_msg').html('<img src="images/cross.png" width="15px" height="15px">');  }
	if(field == 'email') 		{ 	if($('#email').val()!='') 	 $('#email_msg').html('<img src="images/tick.png" width="15px" height="15px">'); 
			else 						 $('#email_msg').html('<img src="images/cross.png" width="15px" height="15px">');  }
	if(field == 'contact_no') 	{ 	if($('#contact_no').val()!='') $('#contact_no_msg').html('<img src="images/tick.png" width="15px" height="15px">'); 
			else 						   $('#contact_no_msg').html('<img src="images/cross.png" width="15px" height="15px">');  }
	if(field == 'dob') 			{ 	if($('#dob').val()!='') 	 $('#dob_msg').html('<img src="images/tick.png" width="15px" height="15px">'); 
			else 						 $('#dob_msg').html('<img src="images/cross.png" width="15px" height="15px">');  }
	if(field == 'nationality') 	{ if($('#nationality').val()!='') $('#nationality_msg').html('<img src="images/tick.png" width="15px" height="15px">'); 
			else 						 	$('#nationality_msg').html('<img src="images/cross.png" width="15px" height="15px">');  }
	if(field == 'address') 		{ 		if($('#address').val()!='') 	$('#address_msg').html('<img src="images/tick.png" width="15px" height="15px">'); 
			else 						 	$('#address_msg').html('<img src="images/cross.png" width="15px" height="15px">'); 
	 }
	if(field == 'username') 	{ if($('#username').val() !='') $('#username_msg').html('<img src="images/tick.png" width="15px" height="15px">'); 
			else  $('#username_msg').html('<img src="images/cross.png" width="15px" height="15px">');  }
	if(field == 'password1') 	{ 	if($('#password1').val()!='')  $('#password1_msg').html('<img src="images/tick.png" width="15px" height="15px">'); 
			else 						   $('#password1_msg').html('<img src="images/cross.png" width="15px" height="15px">');  }
	if(field == 'password2') 	{  	var pw1= $('#password1').val(); var pw2= $('#password2').val();
			if((pw2 !='') && (pw1==pw2)) $('#password2_msg').html('<img src="images/tick.png" width="15px" height="15px">'); 
			else  $('#password2_msg').html('<img src="images/cross.png" width="15px" height="15px">');   }
	if(field == 'submit') 		{  var fullname = $('#fullname').val();
	var email = $('#email').val();
	var contact_no = $('#contact_no').val();
	var dob = $('#dob').val();
	var nationality = $('#nationality').val();
	var address = $('#address').val();
	var username = $('#username').val();
	var password1 = $('#password1').val();
	var password2 = $('#password2').val(); 
	var existing = 0;
			$.ajax({
			url: "ajax_check_username.php",
			type: "POST",
			data: ({'username':username}) ,
			success: function(data) 
			{
				if(data == 2) { existing = 1; alert('Database Error'); }
				if(data == 1) { existing = 1; $('#username_msg').html('<font color="red" size="1">Taken</font>'); } 
				if(data == 0) { existing = 0; $('#username_msg').html('<img src="images/tick.png" width="15px" height="15px">'); } 
			}
			});
	
	
if((fullname=='')||(email=='')||(contact_no=='')||(dob=='')||(nationality=='')||(address=='')||(username=='')||(password1=='')||(password1!=password2)||
 (existing == 1) ) $('#registration_error').html('Error in Filling Form');

else
{
$.ajax({
url: "ajax_new_registration.php",
type: "POST",
data: ({'fullname':fullname,'email':email,'contact_no':contact_no,'dob':dob,'nationality':nationality,'address':address,'username':username,'password':password1}) ,
success: function(data) 
	{
		if(data == 1) 
		{
			$('#registration_error').html('<font color="green" size="2">Successfully Registered</font>'); 
			alert('Successfully Registered. \n\n ');
		}
		else $('#registration_error').html('<font color="red" size="2">Error in Registration. '+data+'</font>');
		
	}
});

} }
}


//----------------------------------------------------------------------------------------------

function make_payment(method)
{
on_load_login(); 
if(method == 'dropex') 		{ $('#transfer_to_dropex').show(1000);}
if(method == 'bank') 		{ $('#bank_transfer').show(1000);}
if(method == 'recharge') 	{ $('#mobile_recharge').show(1000);}
if(method == 'transactions'){ $('#list_transactions').show(1000);}
if(method == 'edit') 		{ $('#edit_account').show(1000);}
}

function transactions(slno)
{
$.ajax({
		url: "ajax_get_transactions.php",
		type: "POST",
		data: {'slno':slno} ,
		success: function(data) 
		{ 
		$("#list_transactions_here").html(data); 
		make_payment('transactions');
		}
		});
	
}

function update(field,slno)
{
if(field == 'fullname') 
	  {
	  var value = $('#fullname').val();
	  if(value == '') { $('#fullname_msg').html('<img src="images/cross.png" width="15px" height="15px">'); return; }
	  var field = 'full_name';
	  $.ajax({
	  url: "ajax_update.php",
	  type: "POST",
	  data: ({'slno':slno,'field':field,'value':value}),
	  success: function(data) 
						  {
							  if(data == 0) $('#fullname_msg').html('<img src="images/tick.png"  width="15px" height="15px">'); 
							  else 		  $('#fullname_msg').html('<img src="images/cross.png" width="15px" height="15px">'); 
						  }
		  });
	  }

if(field == 'email') 
	  {
	  var value = $('#email').val();
	  if(value == '') { $('#email_msg').html('<img src="images/cross.png" width="15px" height="15px">'); return; }
	  var field = 'email_id';
	  $.ajax({
	  url: "ajax_update.php",
	  type: "POST",
	  data: ({'slno':slno,'field':field,'value':value}),
	  success: function(data) 
						  {
							  if(data == 0) $('#email_msg').html('<img src="images/tick.png"  width="15px" height="15px">'); 
							  else 		  $('#email_msg').html('<img src="images/cross.png" width="15px" height="15px">'); 
						  }
		  });
	 
	  }

	
if(field == 'contact_no') 
	  {
	  var value = $('#contact_no').val();
	  if(value == '') { $('#contact_no_msg').html('<img src="images/cross.png" width="15px" height="15px">'); return; }
	  var field = 'contact_no';
	  $.ajax({
	  url: "ajax_update.php",
	  type: "POST",
	  data: ({'slno':slno,'field':field,'value':value}),
	  success: function(data) 
						  {
							  if(data == 0) $('#contact_no_msg').html('<img src="images/tick.png"  width="15px" height="15px">'); 
							  else 		  $('#contact_no_msg').html('<img src="images/cross.png" width="15px" height="15px">'); 
						  }
		  });
	  }

	
	
if(field == 'nationality') 
	  {
	  var value = $('#nationality').val();
	  if(value == '') { $('#nationality_msg').html('<img src="images/cross.png" width="15px" height="15px">'); return; }
	  var field = 'nationality';
	  $.ajax({
	  url: "ajax_update.php",
	  type: "POST",
	  data: ({'slno':slno,'field':field,'value':value}),
	  success: function(data) 
						  {
							  if(data == 0) $('#nationality_msg').html('<img src="images/tick.png"  width="15px" height="15px">'); 
							  else 		  $('#nationality_msg').html('<img src="images/cross.png" width="15px" height="15px">'); 
						  }
		  });
	  }

	
	
if(field == 'address') 
	  {
	  var value = $('#address').val();
	  if(value == '') { $('#address_msg').html('<img src="images/cross.png" width="15px" height="15px">'); return; }
	  var field = 'address';
	  $.ajax({
	  url: "ajax_update.php",
	  type: "POST",
	  data: ({'slno':slno,'field':field,'value':value}),
	  success: function(data) 
						  {
							  if(data == 0) $('#address_msg').html('<img src="images/tick.png"  width="15px" height="15px">'); 
							  else 		  $('#address_msg').html('<img src="images/cross.png" width="15px" height="15px">'); 
						  }
		  });
	  }

	
	
	
if(field == 'dob') 
	  {
	  var value = $('#dob').val();
	  if(value == '') { $('#dob_msg').html('<img src="images/cross.png" width="15px" height="15px">'); return; }
	  var field = 'dob';
	  $.ajax({
	  url: "ajax_update.php",
	  type: "POST",
	  data: ({'slno':slno,'field':field,'value':value}),
	  success: function(data) 
						  {
							  if(data == 0) $('#dob_msg').html('<img src="images/tick.png"  width="15px" height="15px">'); 
							  else 		  $('#dob_msg').html('<img src="images/cross.png" width="15px" height="15px">'); 
						  }
		  });
	  }

	
	
	
	
if(field == 'username') 
	  {
	  var value = $('#username').val();
	  if(value == '') { $('#username_msg').html('<img src="images/cross.png" width="15px" height="15px">'); return; }
	  var field = 'username';
	  
	  $.ajax({
			url: "ajax_check_username.php",
			type: "POST",
			data: ({'username':value}) ,
			success: function(data) 
			{
				if(data == 1) { existing = 1; $('#username_msg').html('<font color="red" size="1">Taken</font>'); } 
				if(data == 0) { 
				
								  $.ajax({
								  url: "ajax_update.php",
								  type: "POST",
								  data: ({'slno':slno,'field':field,'value':value}),
								  success: function(data) 
													  {
														  if(data == 0) $('#username_msg').html('<img src="images/tick.png"  width="15px" height="15px">'); 
														  else 		  $('#username_msg').html('<img src="images/cross.png" width="15px" height="15px">'); 
													  }
									  });
							  } 
			}
			});
	  }



	
	
if(field == 'password') 
	  {
	  var value = $('#password').val();
	  if(value == '') { $('#password_msg').html('<img src="images/cross.png" width="15px" height="15px">'); return; }
	  var field = 'password';
	  $.ajax({
	  url: "ajax_update.php",
	  type: "POST",
	  data: ({'slno':slno,'field':field,'value':value}),
	  success: function(data) 
						  {
							  if(data == 0) $('#password_msg').html('<img src="images/tick.png"  width="15px" height="15px">'); 
							  else 		  $('#password_msg').html('<img src="images/cross.png" width="15px" height="15px">'); 
						  }
		  });
	  }

}


function transfer_to_dropex(my_slno,balance)
{
//$('#transfer_button').html('<img src="images/transfer_amount_white.png" width="170px" height="40px" border="0" style="border-radius:8px;">');
var allow_email = 2;
var allow_amount = 2;

var email = $('#dropex_email').val();
var amount = $('#dropex_amount').val();
var comment = $('#dropex_comment').val();
if(comment == '') comment = 'No Comment Added';


/*---------EMAIL PROCESSING-----------------------------------------------------------------------------------*/	
$.ajax({
	   url:'ajax_check_email.php',
	   type:'POST',
	   data:({'email':email,'my_slno':my_slno}),
		success: function(data) 
		{
			if(data == 0) 
						  {
							$('#transfer_status_1').html('<font color="red" size="3">Error. You entered your own email id.</font>'); 
							$('#dropex_email_status').html('<img src="images/cross.png" width="15px" height="15px">'); 
						  }
			else if(data == 1) 		
						 {
							allow_email = 0;
 							$('#transfer_status_1').html(''); 
							$('#dropex_email_status').html('<img src="images/tick.png" width="15px" height="15px">');
						 }
			else if(data == 2)
						{
 							$('#transfer_status_1').html('<font color="red" size="3">Enter A Valid Email For Transaction</font>'); 
						 	$('#dropex_email_status').html('<img src="images/cross.png" width="15px" height="15px">');
						}
			else 
						{
							$('#transfer_status_1').html('<font color="red" size="3">'+data+'</font>');
						}
		}
		});
/*-----------------------------------------------------------------------------------------------------------*/	


/*---------------AMOUNT PROCESSING----------------------------------------------------------------------*/	
if(amount > 0)
{
	
$.ajax({
	   url:'ajax_check_my_balance.php',
	   type:'POST',
	   data:({'amount':amount,'slno':my_slno}),
	   success: function(data) 
	   			{  
				if(data == 1) 		
						 {
							allow_amount = 0;
 							$('#transfer_status_2').html(''); 
							$('#dropex_amount_status').html('<img src="images/tick.png" width="15px" height="15px">');
						 } 
				else if(data == 0) 		
						 {
 							$('#transfer_status_2').html('<font color="red" size="3">Not Enough Fund With You</font>'); 
							$('#dropex_amount_status').html('<img src="images/cross.png" width="15px" height="15px">');
						 } 
				else 		
						 {
 							$('#transfer_status_2').html('<font color="red" size="3">'+data+'</font>'); 
							$('#dropex_amount_status').html('<img src="images/cross.png" width="15px" height="15px">');
						 } 
				}
		});
}
else
{
  	$('#transfer_status_2').html('<font color="red" size="3">Enter An Amount</font>'); 
  $('#dropex_amount_status').html('<img src="images/cross.png" width="15px" height="15px">');
} 
/*-----------------------------------------------------------------------------------------------------------*/	

$(document).ajaxComplete(function(){
$(document).ajaxComplete(function(){
//-----


if( (allow_email == 0) && (allow_amount == 0) )
{
var confirm_transaction = confirm('\n * Amount : '+ amount +'\n * To : '+ email +'\n * Comment : '+ comment +'\n\n\n * Are you sure?');
if(confirm_transaction == true)
{
$.ajax({
	   url:'ajax_make_transaction_to_dropex.php',
	   type:'POST',
	   data:({'email':email,'amount':amount,'comment':comment,'my_slno':my_slno}),
	   success: function(data) 
	   			{  
					new_balance = balance - amount;
					$('#disp_balance').html(':&nbsp;<b>$'+new_balance+'</b>');
					$('#dropex_email').val('');  $('#dropex_email_status').html('');
					$('#dropex_amount').val(''); $('#dropex_amount_status').html('');
					$('#dropex_comment').val('');
					$('#transfer_status_1').html(data);
					allow_email =1; allow_amount =1;
					return;
				}
		});
}
}

//-----
});});
/*------------------------------------------------------------------------------*/

}

