function validerForm(){
	effacerErr();
	var nom = champObligatoire("nomFamille", "err_nom");
	var prenom = champObligatoire("prenom", "err_pre");
	var date = champObligatoire("date", "err_date") && validerDate("err_date");
	var code = champObligatoire("code", "err_codeB");
	// a modifié
	//var genre = champObligatoire("genre", "err_genre") && validerGenre("err_genre"); 
	return nom && prenom && date && code && genre;
}

function effacerErr(){
	var errs = document.getElementsByClassName("err");
	var e;
	for(e=0; e<errs.length; e++){
		errs[e].innerHTML="";
	}
}

function champObligatoire(inputId, spanId){
	var valeur = document.getElementById(inputId).value;
	
	if(valeur == null || valeur == ''){
		document.getElementById(spanId).innerHTML = "Ce champ doit contenir une valeur";
		return false;
	}
	return true;
}

function validerDate(spanId){
	var valeur = document.getElementById("date").value;
	var regex = /[0-9]{4}-[0-9]{2}-[0-9]{2}/;
	if(!regex.test(valeur)){
		document.getElementById(spanId).innerHTML = "Date invalide";
		return false;
	}
	return true;
}

function validerGenre(spanId){
	var valeur = document.getElementById("genre").value;
	if(valeur != "F" && valeur != "M"){
		document.getElementById(spanId).innerHTML = "Veuillez cocher un case svp";
		return false;
	}
	return true;
}