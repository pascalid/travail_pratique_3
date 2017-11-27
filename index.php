<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formulaire uqam</title>
	<script src="formulaire.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="banner">
		<img src="img/uqam.jpg" alt="image Uqam">
		<h1>Formulaire d'inscription à l'uqam</h1>
	</div>

	<div id="page1">

		<h3>identification</h3>	

		  <label for="nomFamille">Nom du parent:</label>
          <input type="text" id="nomFamille" name="nomFamille"> <span class="erreur"></span><br>

		  <label for="prenom">Prénom usuel</label>
          <input type="text" id="prenom" name="prenom"> <span class="erreur"></span><br>

		  <label for="dateNaissance">Date de naissance (format : JJ-MM-AAAA)</label>
          <input type="text" id="dateNaissance" name="dateNaissance"> <span class="erreur"></span><br>

		  <label for="codePermanent">Code permanent (alphanumérique) si vous avez déjà étudié à l’UQAM</label>
          <input type="text" id="codePermanent" name="codePermanent"> <span class="erreur"></span><br>

		  <label for="codePermanentb">Code permanent (alphanumérique) du ministère de l’Éducation et de l’Enseignement supérieur</label>
          <input type="text" id="codePermanentb" name="codePermanentb"> <span class="erreur"></span><br>

          <label for="nomPere">Nom de famille du père à la naissance</label>
          <input type="text" id="nomPere" name="nomPere"> <span class="erreur"></span><br>

		  <label for="prenomPere">Prénom usuel du père</label>
          <input type="text" id="prenomPere" name="prenomPere"> <span class="erreur"></span><br>

          <label for="nomPere">Nom de famille de la mère à la naissance</label>
          <input type="text" id="nomPere" name="nomPere"> <span class="erreur"></span><br>

		  <label for="prenomPere">Prénom usuel de la mère</label>
          <input type="text" id="prenomPere" name="prenomPere"> <span class="erreur"></span><br>        

		  <label for="telephone">Téléphone à domicile</label>
          <input type="text" id="telephone" name="telephone"> <span class="erreur"></span><br>

		  <label for="cell">Cellulaire</label>
          <input type="text" id="cell" name="cell"> <span class="erreur"></span><br>   

		  <label for="telephone">Téléphone au travail</label>
          <input type="text" id="telephone" name="telephone"> <span class="erreur"></span><br>

          <label for="couriel">Courriel</label>
          <input type="text" id="couriel" name="couriel"> <span class="erreur"></span><br>

		  <label for="assSociale">No d’assurance sociale</label>
          <input type="text" id="assSociale" name="assSociale"> <span class="erreur"></span><br>     

		  <label for="statut">Statut au Canada : </label>
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
          <input type="radio" id="refugie" name="statut" value="refugie"><span class="erreur"></span><br>

          <label for="langue">Langue d’usage (Langue parlée le plus souvent à la maison)</label>
		  <label for="francais">Frençais</label>
          <input type="radio" id="francais" name="langue" value="francais">
          <label for="anglais">Anglais</label>
          <input type="radio" id="anglais" name="langue" value="anglais">
          <label for="ameInu">Amérindien ou Inuktitut</label>
          <input type="radio" id="ameInu" name="langue" value="ameInu">
          <label for="autre">Autre (précisez)</label>
          <input type="radio" id="autre" name="langue" value="autre"><span class="erreur"></span><br> 


          <label for="langueMat">Langue maternelle (Première langue apprise et encore comprise)</label>
		  <label for="francaisMat">Frençais</label>
          <input type="radio" id="francaisMat" name="langueMat" value="francaisMat">
          <label for="anglaisMat">Anglais</label>
          <input type="radio" id="anglaisMat" name="langueMat" value="anglaisMat">
          <label for="ameInuMat">Amérindien ou Inuktitut</label>
          <input type="radio" id="ameInuMat" name="langueMat" value="ameInuMat">
          <label for="autreMat">Autre (précisez)</label>
          <input type="radio" id="autreMat" name="langueMat" value="autreMat"><span class="erreur"></span><br>               

          <fieldset>

          <legend>Adresse de correspondance</legend>

		  <label for="numcivCorres">Numero civique</label>
          <input type="text" id="numcivCorres" name="numcivCorres"> <span class="erreur"></span><br>

		  <label for="appartCorres">No d’appartement ou d’unité</label>
          <input type="text" id="appartCorres" name="appartCorres"> <span class="erreur"></span><br>          

		  <label for="rumCorres">Type et nom de la rue</label>
          <input type="text" id="rumCorres" name="rumCorres"> <span class="erreur"></span><br>  

		  <label for="rueCorres">Direction de rue </label>
          <input type="text" id="rueCorres" name="rueCorres"> <span class="erreur"></span><br>

          <label for="municipalCorres">Municipalité</label>
          <input type="text" id="municipalCorres" name="municipalCorres"> <span class="erreur"></span><br>

          <label for="postalCorres">Code postal</label>
          <input type="text" id="postalCorres" name="postalCorres"> <span class="erreur"></span><br>

          <label for="paysCorres">Pays (si autre que le Canada)</label>
          <input type="text" id="paysCorres" name="paysCorres"> <span class="erreur"></span><br>                                                
            
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

		  <label for="sexe">Sexe :</label>
		  <label for="Canada">feminin</label>
          <input type="radio" id="feminin" name="sexe" value="feminin">
          <label for="Canada">masculin</label>
          <input type="radio" id="masculin" name="sexe" value="masculin"><span class="erreur"></span><br>

		  <label for="Canada">Citoyenneté</label>
          <input type="radio" id="Canada" name="citoyennete" value="canada">
          <label for="autre">Autre (précisez)</label>
          <input type="radio" id="autre" name="citoyennete" value="autre"><span class="erreur"></span><br>   



	</div>

	<div id="page2">

		<h3>Programmes demandés</h3>

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
        </fieldset>

        <fieldset>
        	<legend>Deuxième choix</legend>
        	<label for="titreB">Titre</label>
        	<input type="text" id="titreB" name="titreB"> <span class="erreur"></span><br>

        </fieldset>
        <fieldset>
        	<legend>Troisième choix (nous vous suggérons fortement un programme non contingenté)</legend>
        	<label for="titreC">Titre</label>
        	<input type="text" id="titreC" name="titreC"> <span class="erreur"></span><br> 
        </fieldset>

	</div>

	<div id="page3">

	</div>

	<div id="page4">

	</div>
	
</body>