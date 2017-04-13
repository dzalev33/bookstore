function validationAdmin(){
	
	//First Name
	var ime=document.myForm.first_name.value;
	var imeLength=document.myForm.first_name.value.length;
	
    //Last Name
	var surname=document.myForm.last_name.value;
	var surnameLength=document.myForm.last_name.value.length;
		
	
	//UserName
	var username=document.myForm.user_name.value;
	var usernameLength=document.myForm.user_name.value.length;
	
	
	//Password
	var password=document.myForm.password.value;
	var passwordLength=document.myForm.password.value.length;
	
	
	//check Password
	if(passwordLength<3 || passwordLength>50){
	alert("ve molam vnesete go vasiot  password od 3 do 50 karakteri");
	return false;
	}
	
	
	//check UserName
	if(usernameLength<3 || usernameLength>50){
	alert("ve molam vnesete go vasiot  user od 3 do 50 karakteri");
	return false;
	}
		
	
	
	//check ime
	if(imeLength<3 || imeLength>50){
	alert("Ve molam vnesete ime so od 3 do 50 karakteri");
	return false;
	}
	
	//check last name
	if(surnameLength<3 || surnameLength>50){
	alert("Ve molam vnesete Prezime od 3 do 50 karakteri");
	return false;
	}
}