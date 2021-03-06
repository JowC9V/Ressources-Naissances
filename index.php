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
			<?php
				// Va chercher toutes les photos dans le dossier de diaporama.
				if ($handle = opendir('img/diaporama/')) {

					while (($entry = readdir($handle)) !== false) {
						if ($entry != "." && $entry != "..") { ?>
							<img src="img/diaporama/<?= $entry ?>" alt="image 1" width="948" height="250" />
				    	<?php 	}
					}

					closedir($handle);
				}
			?>
		</div>
	</div>
</div>

<article id="intro">
	<div id="texte-intro">
		<?php include("presentation.txt"); ?>
	</div>

	<div id="video-intro">
		<iframe width="360" height="315" src="http://www.youtube.com/embed/_OBlgSz8sSM?wmode=transparent" frameborder="0" allowfullscreen ></iframe>
	</div>

</article>

<?php while ($article = mysql_fetch_array($resultat)) { ?>
	<article>
		<h1><?= ShortenText($article["titre"], 60) ?></h1>
		<debut-article>Publié le <?= $article["date_creation"] ?></debut-article>
		<div class="desc"><tgauche><?= $article["contenu"] ?></tgauche></div>
	</article>
<?php } ?>

<article id="certificat-cadeau">
	<h2>Certificat-cadeau</h2>
	<?php include("certificat-cadeau.txt");?>
</article>

<article id="lien-gazette">
	<h2>Le journal des membres</h2>
	<a href="Publications.php">Lien vers la gazette des pousettes</a>
</article>

<?php 
include("footer.php");

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


