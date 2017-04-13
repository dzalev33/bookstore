function validationMember(){
	
	//Member First Name
	var member_firstname=document.myForm.member_firstname.value;
	var member_firstnameLength=document.myForm.member_firstname.value.length;
	
    //Member Last Name
	var member_lastname=document.myForm.member_lastname.value;
	var member_lastnameLength=document.myForm.member_lastname.value.length;
		
	  //Member E-mail
	var email=document.myForm.email.value;
	var emailLength=document.myForm.email.value.length;
		
	  //Member tell number
	var tell_number=document.myForm.tell_number.value;
	var tell_numberLength=document.myForm.tell_number.value.length;
		
	  //Member date of birth
	var DOB=document.myForm.DOB.value;
	var DOB=document.myForm.DOB.value.length;
		
	  //Member registration date
	var Registration_Date=document.myForm.Registration_Date.value;
	var Registration_DateLength=document.myForm.Registration_Date.value.length;
		
	  //Member ZipCode
	var ZipCode=document.myForm.ZipCode.value;
	var ZipCodeLength=document.myForm.ZipCode.value.length;
		
	  //Member Country
	var Country=document.myForm.Country.value;
	var CountryLength=document.myForm.Country.value.length;
		
	  //Member City
	var City=document.myForm.City.value;
	var CityLength=document.myForm.City.value.length;
		
	  //Member Street
	var Street=document.myForm.Street.value;
	var StreetLength=document.myForm.Street.value.length;
		
	////////////////////////////////////////////////////////////////////////
	
	
	//check member_firstname
	if(member_firstnameLength<=1 || member_firstnameLength>30){
	alert("ve molam vnesete go vaseto ime  od 1 do 30 karakteri");
	return false;
	}
	
	
	//check member_firstname
	if(member_lastnameLength<1 || member_lastnameLength>30){
	alert("ve molam vnesete go vaseto prezime  od 1 do 30 karakteri");
	return false;
	}
	
	
    //check email
	
	if(emailLength<3 || emailLength>50){
		alert("ve molime vnesete go vasiot email od 3 do 50 karakteri");
		return false;
	}
	
	
	
	//check tell number
	if(tell_numberLength<6 || tell_numberLength>30){
		alert("vasiot telefonskki broj treba da sostoi od 6 do 30 karakteri");
		return false;
		
	}
	
	
	
	//check date of birth
	if(DOB<3 || DOB>20){
		alert("vnesivte pogresna data na raganje");
		return false;
	}
	
	
	
	
	// check registration date
	if(Registration_DateLength<3 || Registration_DateLength>30){
		alert("vnesivte pogresna data na registracija");
		return false;
	}
	
	
	
	//check zipcode
	if(ZipCodeLength<1 || ZipCodeLength>5){
		alert("vnesivte pogresen zipcode");
		return false;
	}
	
	
	
	
	
	//check Country
	
	if(CountryLength<2 || CountryLength>50){
		alert(" za drzavavnesete pomegu 3 i 50 karakteri ");
		return false;
	}
	
	
	
	//check city
	if(CityLength<3 || CityLength>50){
		alert("za grad vnesete pomegu 3 i 50 karakteri");
		return false;
	}
	
	
	
	//check street
	if(StreetLength<3 || StreetLength>50){
		alert("za ulica vnesete pomegu 3 i 50 karakteri");
		return false;
	}
	
	
	
}