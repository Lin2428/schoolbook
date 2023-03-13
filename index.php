<?php 
	$title = 'Accueil';
	require __DIR__ . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
	global $db;
  if (isset($_GET['etudiant'])) {
    header("Location: ./compte_etudiant");
    exit();
  }
	require __DIR__ . DIRECTORY_SEPARATOR . 'header & footer' . DIRECTORY_SEPARATOR . 'header.php';
	require __DIR__ . DIRECTORY_SEPARATOR . 'page_accueil' . DIRECTORY_SEPARATOR . 'accueil.php';
	require __DIR__ . DIRECTORY_SEPARATOR . 'page_accueil' . DIRECTORY_SEPARATOR . 'formation.php';
	require __DIR__ . DIRECTORY_SEPARATOR . 'page_accueil' . DIRECTORY_SEPARATOR . 'contact.php';
	require __DIR__ . DIRECTORY_SEPARATOR . 'header & footer' . DIRECTORY_SEPARATOR .  'footer.php';
 ?>