
<style>
	.info{
		border: solid 2px;
		padding: 25px;
		font-size: 1.02em;
		max-width: 120vh;
	}

	.titre{
		border: solid 0.1px black;
		border-radius: 0px;
	}

	.texte{

		border: solid 0.1px black;
		border-radius: 0px;
	}

	.list-group-flush{
		border: solid 0.1px black;
	}
</style>
		
<?php if($r_infos): ?>	

	<h2>Vos informations</h2><hr>

	<?php foreach ($r_infos as $services):?>
		<?php extract($services) ?>
			<center>
			<div class="info border border-<?= $type ?>">
  <center><h4><?= $titre ?></h4></center>
  <?= $texte ?>
  <br><br>
  <a href="?modifier=<?= $id ?>" class="btn btn-info mr-auto">Modifier</a>
  <a href="?supprime_info=<?= $id ?>"  class="btn btn-danger mr-auto">Supprimer</a>

	</div>
			</center><br>
<?php endforeach ?>
<?php elseif($info_erreur) :?>
	<div class="alert-info">
		<br><br>
		<p class="text-center">Aucune information publié !</p>
		<br><br>
	</div>
<?php endif ?>




<?php if($mods): ?>
<h2>Modifier l'information</h2><hr>
	<form method="POST" action="">

		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
			<label><h5>Titre</h5></label>
			<textarea class="form-control titre" name="md_titre"><?= $titre ?></textarea><br>
			<label><h5>Texte</h5></label>
			<textarea class="form-control texte" name="md_texte" style="font-size: 1.03em;min-height: 21rem; " required=""><?php echo $texte ?></textarea>
		</div>
			</div>
			<div class="col-md-4"><br>
				<div class="card" >
					
  <ul class="list-group list-group-flush">
  	<li class="list-group-item"><h5 class="text-center">Nature de l'information</h5></li>
    <li class="list-group-item"><input type="radio" name="type" value="info"> <p class="text-info">Administrative</p></li>
    <li class="list-group-item"><input type="radio" name="type" value="primary"> <p class="text-primary">Culturelle</p></li>
    <li class="list-group-item"><input type="radio" name="type" value="danger"> <p class="text-danger">Urgente</p></li>
    <li class="list-group-item"><input type="radio" name="type" value="success"> <p class="text-success">Importente</p></li>
    <li class="list-group-item text-center"><button type="submit" name="md_info" value="<?=$mods ?>" class="btn btn-primary ">Modifier</button></li>
  </ul>
</div>
			</div>
		</div>
	</form>
<?php endif ?>

<!-- AJOUTER UNE INFORMATION -->

<?php if(isset($_GET['info_plus'])) :?>
	<h2>Ajouter l'information</h2><hr>

<form method="POST" action="">

		<div class="row">
			<div class="col-md-9">
				<div class="form-group">
				<label><h5>Titre</h5></label>
			<textarea class="form-control titre" placeholder="Titre" required="" name="aj_titre"></textarea><br>
			<label><h5>Texte</h5></label>
			<textarea required="" placeholder="Texte" class="form-control texte" name="aj_texte" style="font-size: 1.03em;min-height: 21rem; width: ;"></textarea>
		</div>
			</div>
			<div class="col-md-3"><br>
				<div class="card" >
					
  <ul class="list-group list-group-flush">
  	<li class="list-group-item"><h5 class="text-center">Nature de l'information</h5></li>
     <li class="list-group-item"><input required="" type="radio" name="type" value="info"> <p class="text-info">Administrative</p></li>
    <li class="list-group-item"><input required="" type="radio" name="type" value="primary"> <p class="text-primary">Culturelle</p></li>
    <li class="list-group-item"><input required="" type="radio" name="type" value="danger"> <p class="text-danger">Urgente</p></li>
    <li class="list-group-item"><input required=""type="radio" name="type" value="success"> <p class="text-success">Importente</p></li>
    <li class="list-group-item text-center"><button type="submit" name="aj_info" value="<?=$mods ?>" class="btn btn-primary ">Ajouter</button></li>
  </ul>
</div>
			</div>
		</div>
	</form>
	<?php endif ?>

	<?php if(isset($_GET['supprime_info'])): ?>
		<?php extract($_GET) ?>
 	<div class="card border-danger mx-auto mb-3" style="max-width: 18rem;">
  <div class="card-body text-danger">
    <h5 class="card-title">Voulez vous vraiment supprimer cette information ?</h5>
    <p class="card-text "><a href="?demande=information" class="btn btn-primary mx-auto">Non</a> 
    	<a href="?supprimer_info=<?= $supprime_info ?>" class="btn btn-danger mx-auto">Oui</a></p>
  </div>
<?php endif ?>

	
 
 
 
 