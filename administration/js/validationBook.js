function validationBook(){
	
	
	
	//Book Title
	var Title=document.myForm.Title.value;
	var TitleLength=document.myForm.Title.value.length;
	
    // book price
	var Price=document.myForm.Price.value;
	var PriceLength=document.myForm.Price.value.length;
	
	// Book Language
	var Language=document.myForm.Language.value;
	var LanguageLength=document.myForm.Language.value.length;
	
	//stock
	var Stock=document.myForm.Stock.value;
	var StockLength=document.myForm.Stock.value.length;
	
	// category_id
	var category_id=document.myForm.category_id.value;
	var category_idLength=document.myForm.category_id.value.length;
	
	/////////////////////////////////////////////////////////////////
	//Function
	
	//check Title
	if(TitleLength<3 || TitleLength>50){
	alert("imeto na knigata ne smee da sodrzi pomalce od 3 i poveke od 50 karakteri  ");
	return false;
	}
	
	//check Price INTEGER 10
	if(PriceLength>10 ){
	alert("knigata e preskapa");
	return false;
	}
	
	
	//check Language
	if(LanguageLength<3 || LanguageLength >50 ){
		alert("jazikot ne smee da sodrzi pomalce od 3 a poveke od 50 karakteri");
		return false;
	}
	

	//check stock
	if(category_idLength>10){
		alert("imate greska vo vnesuvanjeto - max 10  ")
		return false;
	}
	
		
	
	
	
	//category_id
	if(StockLength>10){
		alert("imate greska vo vnesuvanjeto - max 10 ")
		return false;
	}
	
	
	
	
	
} 