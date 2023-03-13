<?php

$title = "Information";
if(isset($_GET['nom'])){
	$matricule = $_GET['nom'];
}elseif(isset($_GET['trimestre_1'])){
	$matricule = $_GET['trimestre_1'];
}
elseif(isset($_GET['trimestre_2'])){
	$matricule = $_GET['trimestre_2'];
}
elseif(isset($_GET['trimestre_3'])){
	$matricule = $_GET['trimestre_3'];
}
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
	//MOYENNE
	$moyennes_trouver = null;
	$q = $db->prepare("SELECT * FROM moyenne WHERE matricule = '$matricule' ORDER BY id DESC");
	$q->execute();
	while($moyenne = $q->fetch()){
		$moyennes_trouver[] = $moyenne;
		
	}

	require '../head_foot/header.php';
?>
<style>
	*{
        font-size: min(10vw, 10px);
      }
	  .bt{
    width: 100%;
  }
	.information{
		padding: 10px;
		border-radius: 15px;
	box-shadow: 0 0 5px black;
	}
	.information p{
		font-size: 15px;
	}
</style>
<br>
<div class="info">
	<br>
<div class="container">
	<a href="?trimestre_1=<?=$matricule?>"><button class="btn btn-secondary btn-lg bt" >1er Trimestre</button></a><br><br>
    <a href="?trimestre_2=<?=$matricule?>"><button class="btn btn-secondary btn-lg bt" >2eme Trimestre</button></a><br><br>
	<a href="?trimestre_3=<?=$matricule?>"><button class="btn btn-secondary btn-lg bt">3eme Trimestre</button></a>
	<br>
		
		<?php if(isset($_GET['trimestre_1'])):?>
			<?php if(!empty($moyennes_trouver)) :?>
			<?php foreach($moyennes_trouver as $moyenne):?>
				<?php if($moyenne['trimestre'] === '1') :?>
				<br><br><hr><h5 class="">1er Trimestre: <?=$moyenne['moyenne']?></h5><hr>
				
		<?php endif ?>
		<?php endforeach ?>
		<?php else: ?>
           <p class="dropdown-item" >Nons diponible pour le moment</p>
		<?php endif ?>
		<?php endif ?>


		<?php if(isset($_GET['trimestre_2'])):?>
			<?php if(!empty($moyennes_trouver)) :?>
			<?php foreach($moyennes_trouver as $moyenne):?>
				<?php if($moyenne['trimestre'] === '2') :?>
				<br><br><hr><h5 class="">2eme Trimestre: <?=$moyenne['moyenne']?></h5><hr>
				
		<?php endif ?>
		<?php endforeach ?>
		<?php else: ?>
           <p class="dropdown-item" >Nons diponible pour le moment</p>
		<?php endif ?>
		<?php endif ?>

		<?php if(isset($_GET['trimestre_3'])):?>
			<?php if(!empty($moyennes_trouver)) :?>
			<?php foreach($moyennes_trouver as $moyenne):?>
				<?php if($moyenne['trimestre'] === '3') :?>
				<br><br><hr><h5 class="">3eme Trimestre: <?=$moyenne['moyenne']?></h5><hr>
				
		<?php endif ?>
		<?php endforeach ?>
		<?php else: ?>
           <p class="dropdown-item" >Nons diponible pour le moment</p>
		<?php endif ?>
		<?php endif ?>

</div>
<br>
</div>

<?php require '../head_foot/footer.php' ?>
