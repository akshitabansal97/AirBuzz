$(document).ready(function(){
	var username_default="Enter your username";
	var firstname_default="Enter your firstname";
	var surname_default="Enter your surname";
	var password_default="Enter your password";
	var number_default="Enter your mobile number";
	var email_default="Enter your email id";
	var from_default="Enter your starting point";
	var to_default="Enter your destination";
	var person_default="Enter no. of persons";
	$('input[type="text"][name="username"]').attr('value',username_default).focus(function(){
		if($(this).val()==username_default){
			$(this).attr('value','');
		}
	}).blur(function(){
		if($(this).val()==''){
			$(this).attr('value',username_default);
		}
	});
	$('input[type="password"]').attr('value',password_default).focus(function(){
		if($(this).val()==password_default){
			$(this).attr('value','');
		}
	}).blur(function(){
		if($(this).val()==''){
			$(this).attr('value',password_default);
		}
	});
	$('input[type="text"][name="firstname"]').attr('value',firstname_default).focus(function(){
		if($(this).val()==firstname_default){
			$(this).attr('value','');
		}
	}).blur(function(){
		if($(this).val()==''){
			$(this).attr('value',firstname_default);
		}
	});
	$('input[type="text"][name="surname"]').attr('value',surname_default).focus(function(){
		if($(this).val()==surname_default){
			$(this).attr('value','');
		}
	}).blur(function(){
		if($(this).val()==''){
			$(this).attr('value',surname_default);
		}
	});
	$('input[type="number_format"]').attr('value',number_default).focus(function(){
		if($(this).val()==number_default){
			$(this).attr('value','');
		}
	}).blur(function(){
		if($(this).val()==''){
			$(this).attr('value',number_default);
		}
	});
	$('input[type="email"]').attr('value',email_default).focus(function(){
		if($(this).val()==email_default){
			$(this).attr('value','');
		}
	}).blur(function(){
		if($(this).val()==''){
			$(this).attr('value',email_default);
		}
	});
	$('input[type="text"][name="to"]').attr('value',to_default).focus(function(){
		if($(this).val()==to_default){
			$(this).attr('value','');
		}
	}).blur(function(){
		if($(this).val()==''){
			$(this).attr('value',to_default);
		}
	});
	$('input[type="text"][name="from"]').attr('value',from_default).focus(function(){
		if($(this).val()==from_default){
			$(this).attr('value','');
		}
	}).blur(function(){
		if($(this).val()==''){
			$(this).attr('value',from_default);
		}
	});
	$('input[type="text"][name="no_person"]').attr('value',person_default).focus(function(){
		if($(this).val()==person_default){
			$(this).attr('value','');
		}
	}).blur(function(){
		if($(this).val()==''){
			$(this).attr('value',person_default);
		}
	});
});