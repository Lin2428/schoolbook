<?php 
$title = "Information";
if(isset($_GET['nom'])){
	$matricule = $_GET['nom'];
}elseif(isset($_GET['info_g'])){
	$matricule = $_GET['info_g'];
}
elseif(isset($_GET['info_p'])){
	$matricule = $_GET['info_p'];
}
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
	$infos = null;
	$q = $db->prepare("SELECT * FROM information ORDER BY id DESC");
	$q->execute();
	while($info = $q->fetch()){
		$infos[] = $info;
	}
	

	$q = $db->prepare("SELECT * FROM information_p WHERE matricule = '$matricule' ORDER BY id DESC");
	$q->execute();
	while($info = $q->fetch()){
		$infos_p[] = $info;
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
	<a href="?info_g=<?=$matricule?>"><button class="btn btn-secondary btn-lg bt" >Information Génerale</button></a><br><br>
	<a href="?info_p"><button class="btn btn-secondary btn-lg bt">Information Particulière</button></a>
	<br>
		
		<?php if(isset($_GET['info_g'])):?>
			<?php if(!empty($infos)) :?>
				<br><p class="text-center">INFORMATION GENERALE</p>
				<?php foreach($infos as $information) :?>
		<?php extract($information); ?>
<div class="information border border-<?= $type ?>" >
  <center><h4><?= $titre ?></h4></center>
  <p><?= $texte ?></p>
</div><br>
<?php endforeach ?>
		<?php endif ?>
		<?php endif ?>


		<?php if(isset($_GET['info_p'])):?>
			<?php if(!empty($infos_p)) :?>
				<br><p class="text-center">INFORMATION PARTICULIERE</p>
				<?php foreach($infos_p as $information) :?>
		<?php extract($information); ?>
<div class="information border border-<?= $type ?>" >
  <center><h4><?= $titre ?></h4></center>
  <p><?= $texte ?></p>
</div><br>
<?php endforeach ?>
		<?php endif ?>
		<?php endif ?>

</div>
<br>
</div>

<?php require '../head_foot/footer.php' ?>
