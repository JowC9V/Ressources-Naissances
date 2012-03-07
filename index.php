<?php
$pasArticle = 1;
include("Actions/mysql.php");
//Affiche l'article le plus récent
$requete = "SELECT * FROM nouvelle ORDER BY date_creation DESC LIMIT 5;";
$resultat = mysql_query($requete);

?>

<?php include("header.php"); ?>

<script src="js/slides.min.jquery.js" type="text/javascript"></script>
<script src="js/pages/index.js" type="text/javascript"></script>

<div id="diapo">
	<div id="slides">
		<div class="slides_container">
			<img src="img/slider/1.png" alt="image 1" width="950" height="250" />
			<img src="img/slider/2.png" alt="image 2" width="950" height="250" />
		</div>
	</div>
</div>

<article id="intro">
Tout apprentissage se fait plus facilement grâce à des interactions avec d’autres personnes; l’acquisition des habiletés parentales ne fait pas exception.  Tous les parents ont besoin de recevoir de l’information, d’être accompagnés pour renforcer leur potentiel, d’apprendre les uns des autres et ainsi, favoriser l’équilibre familial.

Voilà pourquoi RESSOURCES-NAISSANCES offre un éventail de services et d’activités pour les futurs parents afin de répondre aux nombreux besoins durant la période prénatale et pour les familles durant la première année du nouveau-né.  Les parents peuvent s’inscrire à des ateliers, participer à des cafés-rencontres et obtenir de l’assistance à domicile, tout ceci  pour mieux vivre l’arrivée d’un enfant.
 
Entreprise d'économie sociale dont les membres sont les bénévoles et les familles utilisatrices qui ont droit, selon des modalités démocratiques, d'être consultés, de s'impliquer dans les activités du centre et de participer aux orientations de l'organisme lors de l'assemblée générale. Bienvenue à tous et à toutes.
</article>

<article id="video">
	<h2>Vidéo promotionelle</h2>
	<iframe width="560" height="315" src="http://www.youtube.com/embed/YOxVjbGvUpI" frameborder="0" allowfullscreen></iframe>
</article>

<?php while ($article = mysql_fetch_array($resultat)) { ?>
	<article>
		<h2><?= ShortenText($article["titre"], 60) ?></h2>
		<p>publié le <?= $article["date_creation"] ?><p>
		<div class="desc"><tgauche><?= $article["contenu"] ?></tgauche></div>
	</article>
<?php } ?>

<article id="certificat-cadeau">
	<h2>Certificat-cadeau</h2>
	Offrir un certificat-cadeau à de futurs et nouveaux parents...
	Pourquoi pas ?  Nos certificats-cadeaux sont échangeables au choix : 
	ateliers, services et/ou articles de la boutique.  Vous pouvez vous 
	les procurer au montant désiré à la réception de Ressources-Naissances 
	durant nos heures de bureau.
</article>

<article id="lien-gazette">
	<h2>Le journal des membres</h2>
	<a href="Publications.php">Lien vers la gazette des pousettes</a>
</article>

<?php 
include("footer.php");
mysql_close();

function ShortenText($text, $chars) { 
	$length = strlen($text); 

	$text = $text." "; 
	$text = substr($text, 0, $chars); 
	$text = substr($text, 0, strrpos($text,' '));
	$text = strip_tags($text); 

	if($length > $chars) {
		$text = $text."..."; 
	} 

	return $text; 
} 
?>


