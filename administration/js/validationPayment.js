function validationPay(){
	
	//First Name
	var card_holder_Surname=document.myForm.card_holder_Surname.value;
	var card_holder_SurnameLength=document.myForm.card_holder_Surname.value.length;
	
	var card_number=document.myForm.card_number.value;
	var card_numberLength=document.myForm.card_number.value.length;
	
	
	var card_expiary_date=document.myForm.card_expiary_date.value;
	var card_expiary_dateLength=document.myForm.card_expiary_date.value.length;
	
	var card_type=document.myForm.card_type.value;
	var card_typeLength=document.myForm.card_type.value.length;
	
	var security_code=document.myForm.security_code.value;
	var security_codeLength=document.myForm.security_code.value.length;
	
	var order_id=document.myForm.order_id.value;
	var order_idLength=document.myForm.order_id.value.length;
	
	
	if(card_holder_SurnameLength<3 || card_holder_SurnameLength>50){
		alert("pogresno ime");
		return false;
	}
	
	
	
	if(card_numberLength<3 || card_numberLength>20){
		alert("vnesivte pogresen broj ");
		return false;
	}
	
	
	
	
	
	if(card_expiary_dateLength<3 || card_expiary_dateLength>11){
		alert("vnesivte pogresna data");
		return false;
	}
	
	

	
	
	
	if(card_typeLength<3 || card_typeLength>20){
		alert("vnesivte pogresen tip na karticka");
		return false;
	}
	
	
	
	if(security_codeLength<3 || security_codeLength>3){
		alert("vnesivte pogresen kod");
		return false;
	}
	
	
	

	
	
	
	
	
	
	
}