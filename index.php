<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formulaire uqam</title>
	<script src="scripts/formulaire.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="banner">
		<img src="img/uqam.jpg" alt="image Uqam">
		<h1>Formulaire d'inscription à l'uqam</h1>
	</div>

  <form action="confirmation.php" method="post" onsubmit="return validerForm()">

    
	<div id="page1">

		<h2>identification</h2>	

		  <label for="nomFamille">Nom de famille</label>
          <input type="text" id="nomFamille" name="nomFamille"> <span class="erreur" id="err_nom" ></span><br>

		 <label for="prenom">Prénom usuel</label>
          <input type="text" id="prenom" name="prenom"> <span class="erreur" id="err_pre" ></span><br>
 
		  <label for="dateNaissance">Date de naissance (format : JJ-MM-AAAA)</label>
          <input type="text" id="dateNaissance" name="dateNaissance"> <span class="erreur" id="err_date" ></span><br>

		  <label for="codePermanent">Code permanent (alphanumérique) si vous avez déjà étudié à l’UQAM</label>
          <input type="text" id="codePermanent" name="codePermanent"> <span class="erreur" id="err_codeA" ></span><br>

		  <label for="codePermanentb">Code permanent (alphanumérique) du ministère de l’Éducation et de l’Enseignement supérieur</label>
          <input type="text" id="codePermanentb" name="codePermanentb"> <span class="erreur" id="err_codeB" ></span><br>

          <label for="nomPere">Nom de famille du père à la naissance</label>
          <input type="text" id="nomPere" name="nomPere"> <span class="erreur" id="err_nomP" ></span><br>

		  <label for="prenomPere">Prénom usuel du père</label>
          <input type="text" id="prenomPere" name="prenomPere"> <span class="erreur" id="err_preP" ></span><br>

          <label for="nomPere">Nom de famille de la mère à la naissance</label>
          <input type="text" id="nomPere" name="nomPere"> <span class="erreur" id="err_nomM" ></span><br>

		  <label for="prenomPere">Prénom usuel de la mère</label>
          <input type="text" id="prenomPere" name="prenomPere"> <span class="erreur" id="err_preM" ></span><br>        

		  <label for="telephone">Téléphone à domicile</label>
          <input type="text" id="telephone" name="telephone"> <span class="erreur" id="err_telA" ></span><br>

		  <label for="cell">Cellulaire</label>
          <input type="text" id="cell" name="cell"> <span class="erreur" id="err_telB" ></span><br>   

		  <label for="telephone">Téléphone au travail</label>
          <input type="text" id="telephone" name="telephone"> <span class="erreur" id="err_telC" ></span><br>

          <label for="couriel">Courriel</label>
          <input type="text" id="couriel" name="couriel"> <span class="erreur" id="err_courriel" ></span><br>

		  <label for="assSociale">No d’assurance sociale</label>
          <input type="text" id="assSociale" name="assSociale"> <span class="erreur" id="err_social" ></span><br>     

		  <label for="statut">Statut au Canada : </label><br>
		  <label for="canadien">Canadien</label>
          <input type="radio" id="canadien" name="statut" value="canadien">
          <label for="resperma">Resident permanent</label>
          <input type="radio" id="resperma" name="statut" value="resperma">
          <label for="permisEtude">Permis d’études</label>
          <input type="radio" id="permisEtude" name="statut" value="permisEtude">
          <label for="permisTravail">Permis de travail</label>
          <input type="radio" id="permisTravail" name="statut" value="permisTravail">
          <label for="amerindien">Amérindien</label>
          <input type="radio" id="amerindien" name="statut" value="amerindien">
          <label for="visaDiplo">Visa diplomatique</label>
          <input type="radio" id="visaDiplo" name="statut" value="visaDiplo">
          <label for="permiTemp">Permis de séjour temporaire</label>
          <input type="radio" id="permiTemp" name="statut" value="permiTemp">
          <label for="refugie">Réfugié</label>
          <input type="radio" id="refugie" name="statut" value="refugie"><span class="erreur" id="err_statut" ></span><br>

          <label for="langue">Langue d’usage (Langue parlée le plus souvent à la maison)</label><br>
		      <label for="francais">Frençais</label>
          <input type="radio" id="francais" name="langue" value="francais">
          <label for="anglais">Anglais</label>
          <input type="radio" id="anglais" name="langue" value="anglais">
          <label for="ameInu">Amérindien ou Inuktitut</label>
          <input type="radio" id="ameInu" name="langue" value="ameInu">
          <label for="autre">Autre (précisez)</label>
          <input type="radio" id="autre" name="langue" value="autre"><span class="erreur" id="err_lanA" ></span><br> 


          <label for="langueMat">Langue maternelle (Première langue apprise et encore comprise)</label><br>
		      <label for="francaisMat">Frençais</label>
          <input type="radio" id="francaisMat" name="langueMat" value="francaisMat">
          <label for="anglaisMat">Anglais</label>
          <input type="radio" id="anglaisMat" name="langueMat" value="anglaisMat">
          <label for="ameInuMat">Amérindien ou Inuktitut</label>
          <input type="radio" id="ameInuMat" name="langueMat" value="ameInuMat">
          <label for="autreMat">Autre (précisez)</label>
          <input type="radio" id="autreMat" name="langueMat" value="autreMat"><span class="erreur" id="err_lanB" ></span><br>               

          <fieldset>

          <legend>Adresse de correspondance</legend>

		  <label for="numcivCorres">Numero civique</label>
          <input type="text" id="numcivCorres" name="numcivCorres"> <span class="erreur" id="err_civique" ></span><br>

		  <label for="appartCorres">No d’appartement ou d’unité</label>
          <input type="text" id="appartCorres" name="appartCorres"> <span class="erreur" id="err_app" ></span><br>          

		  <label for="rumCorres">Type et nom de la rue</label>
          <input type="text" id="rumCorres" name="rumCorres"> <span class="erreur" id="err_nomRue" ></span><br>  

		  <label for="rueCorres">Direction de rue </label>
          <input type="text" id="rueCorres" name="rueCorres"> <span class="erreur" id="err_rueDirec" ></span><br>

          <label for="municipalCorres">Municipalité</label>
          <input type="text" id="municipalCorres" name="municipalCorres"> <span class="erreur" id="err_muni" ></span><br>

          <label for="postalCorres">Code postal</label>
          <input type="text" id="postalCorres" name="postalCorres"> <span class="erreur" id="err_postal" ></span><br>

          <label for="paysCorres">Pays (si autre que le Canada)</label>
          <input type="text" id="paysCorres" name="paysCorres"> <span class="erreur" id="err_pays" ></span><br>                                                
            
          </fieldset>

          <fieldset>

          <legend>Adresse où vous résidez actuellement (si différente de l’adresse de correspondance)</legend>

		  <label for="numcivActu">Numero civique</label>
          <input type="text" id="numciv" name="numciv"> <span class="erreur"></span><br>

		  <label for="appartActu">No d’appartement ou d’unité</label>
          <input type="text" id="numciv" name="numciv"> <span class="erreur"></span><br>          

		  <label for="rumActu">Type et nom de la rue</label>
          <input type="text" id="rumActu" name="rumActu"> <span class="erreur"></span><br>  

		  <label for="rueActu">Direction de rue </label>
          <input type="text" id="rueActu" name="rueActu"> <span class="erreur"></span><br>

          <label for="municipalActu">Municipalité</label>
          <input type="text" id="municipalActu" name="municipalActu"> <span class="erreur"></span><br>

          <label for="postalActu">Code postal</label>
          <input type="text" id="postalActu" name="postalActu"> <span class="erreur"></span><br>

          <label for="paysActu">Pays (si autre que le Canada)</label>
          <input type="text" id="paysActu" name="paysActu"> <span class="erreur"></span><br>                                                
            
          </fieldset>  

                                                                         

		  Sexe :
		  <label for="feminin">feminin</label>
          <input type="radio" id="feminin" name="sexe" value="feminin">
      <label for="masculin">masculin</label>
          <input type="radio" id="masculin" name="sexe" value="masculin"><span class="erreur" id="err_genre" ></span><br>

		  <label for="citoyen">Citoyenneté</label>
      <label for="Canada">Canada</label>
          <input type="radio" id="Canada" name="citoyennete" value="canada">
      <label for="autreCit">Autre (précisez)</label>
          <input type="radio" id="autreCit" name="citoyennete" value="autreCit"><span class="erreur" id="err_citoyen" ></span><br>   


          <input type="button" value="Click Me" onclick="return validerForm()" >
	</div>

	<div id="page2">

		<h2>Programmes demandés</h2>

		    <label for="trimestre">Je désire entreprendre mes études au trimestre :</label>
		    <label for="hiver">Hiver</label>
        <input type="radio" id="hiver" name="trimestre" value="hiver">
        <label for="ete">Été</label>
        <input type="radio" id="ete" name="trimestre" value="ete">
        <label for="automne">Automne</label>
        <input type="radio" id="automne" name="trimestre" value="automne"><span class="erreur"></span><br>

        <label for="anne">Année</label>
        <input type="text" id="anne" name="anne"> <span class="erreur"></span><br>  

        <fieldset>

        	<legend>Premier choix</legend>

        	<label for="titreA">Titre</label>
        	<input type="text" id="titreA" name="titreA"> <span class="erreur"></span><br> 

          <label for="codeA">Code</label>
          <input type="text" id="codeA" name="codeA"> <span class="erreur"></span><br> 

          <label for="diplomeA">Type de diplome</label>
          <label for="bac">Baccalauréat</label>
          <input type="radio" id="bac" name="diplomeA" value="bac">
          <label for="majeure">Majeure</label>
          <input type="radio" id="majeure" name="diplomeA" value="majeure">
          <label for="mineure">Mineure</label>
          <input type="radio" id="mineure" name="diplomeA" value="mineure">
          <label for="certificat">Certificat</label>
          <input type="radio" id="certificat" name="diplomeA" value="certificat">
          <label for="progCourt">Programme court</label>
          <input type="radio" id="progCourt" name="diplomeA" value="progCourt"><span class="erreur"></span><br>


          <label for="tempsA">Je vais faire une session en :</label>
          <label for="tempsComplet">Temps complet</label>
          <input type="radio" id="tempsComplet" name="tempsA" value="tempsComplet">
          <label for="tempsPartiel">Temps partiel</label>
          <input type="radio" id="tempsPartiel" name="tempsA" value="tempsPartiel"><span class="erreur"></span><br>          

        </fieldset>

        <fieldset>
        	<legend>Deuxième choix</legend>
        	<label for="titreB">Titre</label>
        	<input type="text" id="titreB" name="titreB"> <span class="erreur"></span><br>

          <label for="codeB">Code</label>
          <input type="text" id="codeB" name="codeB"> <span class="erreur"></span><br> 

          <label for="diplomeB">Type de diplome</label>
          <label for="bac">Baccalauréat</label>
          <input type="radio" id="bac" name="diplomeB" value="bac">
          <label for="majeure">Majeure</label>
          <input type="radio" id="majeure" name="diplomeB" value="majeure">
          <label for="mineure">Mineure</label>
          <input type="radio" id="mineure" name="diplomeB" value="mineure">
          <label for="certificat">Certificat</label>
          <input type="radio" id="certificat" name="diplomeB" value="certificat">
          <label for="progCourt">Programme court</label>
          <input type="radio" id="progCourt" name="diplomeB" value="progCourt"><span class="erreur"></span><br>


          <label for="tempsB">Je vais faire une session en :</label>
          <label for="tempsCompletB">Temps complet</label>
          <input type="radio" id="tempsCompletB" name="tempsB" value="tempsCompletB">
          <label for="tempsPartielB">Temps partiel</label>
          <input type="radio" id="tempsPartielB" name="tempsB" value="tempsPartielB"><span class="erreur"></span><br> 

        </fieldset>
        <fieldset>
        	<legend>Troisième choix (nous vous suggérons fortement un programme non contingenté)</legend>
        	<label for="titreC">Titre</label>
        	<input type="text" id="titreC" name="titreC"> <span class="erreur"></span><br>

          <label for="codeC">Code</label>
          <input type="text" id="codeC" name="codeC"> <span class="erreur"></span><br> 

          <label for="diplomeC">Type de diplome</label>
          <label for="bac">Baccalauréat</label>
          <input type="radio" id="bac" name="diplomeC" value="bac">
          <label for="majeure">Majeure</label>
          <input type="radio" id="majeure" name="diplomeC" value="majeure">
          <label for="mineure">Mineure</label>
          <input type="radio" id="mineure" name="diplomeC" value="mineure">
          <label for="certificat">Certificat</label>
          <input type="radio" id="certificat" name="diplomeC" value="certificat">
          <label for="progCourt">Programme court</label>
          <input type="radio" id="progCourt" name="diplomeC" value="progCourt"><span class="erreur"></span><br>


          <label for="tempsC">Je vais faire une session en :</label>
          <label for="tempsCompletC">Temps complet</label>
          <input type="radio" id="tempsCompletC" name="tempsC" value="tempsCompletC">
          <label for="tempsPartielC">Temps partiel</label>
          <input type="radio" id="tempsPartielC" name="tempsC" value="tempsPartielC"><span class="erreur"></span><br> 

        </fieldset>

	</div>

	<div id="page3">

    <fieldset>

      <legend>Renseignements sur les études universitaires</legend>

    </fieldset>

    <fieldset>

      <legend>Renseignements sur les emplois</legend>

    </fieldset>

	</div>

	<div id="page4">

    <fieldset>

      <legend>Renseignements supplémentaires</legend>

      <textarea rows="4" cols="50">
      
      </textarea>

    </fieldset>

    

	</div>

  

  </form>

	
</body>