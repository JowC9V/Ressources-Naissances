<?php 
session_start();
include('Actions/fonctions.php');

if (!estAutorise(2)) {
	die();
}

?>

<?php include("header.php"); ?>

<h1>Panneau d'administration</h1>
<ul>
	<li class="lienPanneau"><a href="ajouterNouvelle.php">Ajouter une nouvelle</a></li>
	<li class="lienPanneau"><a href="adminCalendrier.php">Modifier l'horaire des ateliers</a></li>
	<li class="lienPanneau"><a href="ajouterTypeAtelier.php">Ajouter un type d'atelier</a></li>
	<li class="lienPanneau"><a href="ajout_publications.php">Ajout des publications (gazette des poussettes par exemple)</a></li>
	<li class="lienPanneau"><a href="formEditor.php">Modification des pages</a></li>
	<li class="lienPanneau"><a href="ajout_article.php">Ajouter un article</a></li>

	<li class="lienPanneau"><a href="nouveauService.php">Nouveau service</a></li>
	<li class="lienPanneau"><a href="modifServices.php">Modifier services</a></li>
	<li class="lienPanneau"><a href="nouveauBenevolat.php">Nouveau Benevolat</a></li>
	<li class="lienPanneau"><a href="modifBenevolat.php">Modifier Benevolat</a></li>
	<li class="lienPanneau"><a href="supprServiceBenevolat.php">Supprimer Service ou Benevolat</a></li>
	<li class="lienPanneau"><a href="modifAssistPer.php">Modifier assistance périnatale</a></li>
	<li class="lienPanneau"><a href="modifTemoignages.php">Modifier témoignages Services</a></li>
	<li class="lienPanneau"><a href="Modifier_Accueil.php">Modifier la page d'accueil</a></li>
	<li class="lienPanneau"><a href="conseilEditor.php">Ajout d'une personne au conseil d'administration</a></li>
	<li class="lienPanneau"><a href="formHistorique.php">Ajout d'un nouvel historique</a></li>
	<li class="lienPanneau"><a href="formLienUtile.php">Ajout d'un nouveau lien utile</a></li>
	<li class="lienPanneau"><a href="formNotreEquipe.php">Ajout d'une personne à l'équipe</a></li>

</ul>

<?php include("footer.php"); ?>
