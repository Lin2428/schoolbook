ATTENTE

<?php foreach ($service as $services):?>
		<?php extract($services) ?>
<div class="alert alert-<?= $type ?>" role="alert">
  <center><h4><?= $titre ?></h4></center>
  <?= $texte ?>
  <br>
  <a href="?modifier=<?= $id ?>" class="btn btn-info mr-auto">Modifier</a>
  <a href="" class="btn btn-danger mr-auto">Supprimer</a>
	</div>
<?php endforeach ?>