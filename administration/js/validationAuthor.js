function Author(){
	
	//authorFirst Name
	var ime=document.myForm.firstname.value;
	var imeLength=document.myForm.firstname.value.length;
	
    //author Last Name
	var surname=document.myForm.lastname.value;
	var surnameLength=document.myForm.lastname.value.length;
	
	
	
	
	//check author first name
	if(imeLength<3 || imeLength>50){
	alert("Ve molam vnesete ime so od 3 do 50 karakteri");
	return false;
	}
	
	//check author last name
	if(surnameLength<3 || surnameLength>50){
	alert("ve molam vnesete go vaseto prezime od 3 do 50 karakteri");
	return false;
	}
}