function validerForm(){
	
	effacerErr();

	var nom = champObligatoire("nomFamille", "err_nom");
	var prenom = champObligatoire("prenom", "err_pre");
	var sexe = validerRadio("sexe","err_genre");
	var citoyen = validerRadio("citoyennete","err_citoyen");


	/*
	var date = champObligatoire("dateNaissance", "err_date") && validerDate("err_date");
	var code = champObligatoire("codePermanent", "err_codeB");
	*/
	// a modifié
	//var genre = champObligatoire("genre", "err_genre") && validerGenre("err_genre"); 

	return nom && prenom && sexe; //&& date && code && genre;
}

function effacerErr(){

	var x = document.getElementsByClassName("erreur") ;
	var i;
	for(i=0; i< x.length; i++){
		x[i].innerHTML="";
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

function validerRadio(radioName,spanId){
	var radios = document.getElementsByName(radioName);
	var formValide = false ;

	var i = 0
	while(!formValide && i < radios.length) {
		if(radios[i].checked){
			formValide = true;
		}
		i++;
	}

	if(!formValide){
		document.getElementById(spanId).innerHTML = "Veuillez cocher un case svp";
	}
	return formValide;
}