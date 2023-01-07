<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';

$titre_html = array(
'projet' => 'Page d\'accueil',
'search' => 'Recherche',
'test' => 'Projet dev Web');

$titre_page = isset($titre_html[$page]) ? $titre_html[$page]  : 'DOMI\'Hotel';




$descripton_html = array(
'projet' => 'Page d\'accueil',
'search' => 'Recherche de film, série, acteur ou société de production',
'test' => 'Projet dev Web');

$descripton_page = isset($descripton_html[$page]) ? $descripton_html[$page]  : 'Le site de gestion hoteliere';




$keywords_html = array(
'projet' => 'Page d\'accueil, index',
'search' => 'recherche, film, série, acteur, société de production, genre, langue, année',
'test' => 'Projet dev Web');

$keywords_page = isset($keywords_html[$page]) ? $keywords_html[$page]  : 'Hotel, domotique, PHP, université, étudiant';




$h1_html = array(
'projet' => 'Page d\'accueil',
'search' => 'Recherche',
'test' => 'Projet dev Web');

$h1_page = isset($h1_html[$page]) ? $h1_html[$page]  : 'DOMI\'Hotel';

?>




<!DOCTYPE html>
<html lang='fr'>
<head>
	<meta charset='utf-8' />
	<meta name='description' content=<?php echo $descripton_page?> />
	<meta name='keywords' content=<?php echo $keywords_page?> />
	<meta name='author' content='facel' />
	<meta name='date' content='2021-03-02T15:24:06+0100' />
	<meta name='viewport' content='width=device-width, initial-scale=1.0' />
	<link rel='stylesheet' href='styles.css' />
	<title><?php echo $titre_page?></title>
	<style>

	#searchbox {
		background: url("images/search-box.png") no-repeat;
		float: right;
		margin-top: -50px;
		margin-bottom: 20px;
		height: 27px;
		width: 202px;
	}

	input:focus::-webkit-input-placeholder {
		color: transparent;
	}

	input:focus:-moz-placeholder {
		color: transparent;
	}

	input:focus::-moz-placeholder {
		color: transparent;
	}

	#searchbox input {
		outline: none;
	}

	#searchbox input[type="text"] {
		background: transparent;
		margin: 0px 0px 0px 12px;
		padding: 3px 0px 5px 0px;
		border-width: 0px;
		font-family: « Arial Narrow », Arial, sans-serif;
		font-size: 14px;
		font-style: italic;
		width: 77%;
		color: #828282;
		display: inline-table;
		vertical-align: top;
	}

	#button-submit {
		background: url("images/search-button.png") no-repeat;
		border-width: 0px;
		cursor: pointer;
		width: 30px;
		height: 25px;
	}

	#button-submit:hover {
		background: url("images/search-button-hover.png") no-repeat;
	}

	#button-submit::-moz-focus-inner {
		border: 0;
	}
		
	</style>
</head>


<body style='background-color:#1A1A1D;'>
<header id='entete'>
<a title='DOMI\'Hotel' href='../projet/index.php?page=accueil'><img class="logogauche" src="images/logo.jpg" alt="Logo" /> </a>
<h1><?php echo $h1_page?></h1>
</header>


	<nav>
	<ul>
		<li><a href='https://10.40.128.70/~e-koulfid'>Accueil</a></li>
		<li><a href=''>Recherche</a></li>
	</ul>
	</nav>

	<form id="searchbox" action="rechercher.php" method="get">
	<input type="text" name="search" placeholder="Recherche rapide" size="20" />
	<input id="button-submit" type="submit" value=" " />
	</form>
