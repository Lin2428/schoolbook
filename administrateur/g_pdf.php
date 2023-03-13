
<?php if(isset($_GET['ajoute_cours'])): ?>
  <h3>Ajoutez des cours élèctroniques</h3><hr>
<br>
<form  method="POST" action="">
		<div class="form-group">
    <div class="row">
    <div class="col-3">
    <select name="alias" class="form-control" id="">
    <?php foreach($Alias as $alias) : ?>
          <option value="<?= $alias ?>"><?= $alias ?><br></option>
          <?php endforeach ?>
        </select>
    </div>
        <div class="col-3">
			<input type="text" name="cours" class="form-control" placeholder="matiere" required="">
		</div>
    <div class="col-3">
			<input type="file" name="files" class="form-control" placeholder="" required="">
		</div>
    <div class="col-3">
    <button type="submit" class="btn btn-success" name="ajoute_cours">Soumetre</button>
    </div>
    </div>
	</form>
  </div><br>
<?php endif  ?>



<?php if(isset($_GET['mod_cours'])): ?>
  <h3>modifiez des cours élèctroniques</h3><hr>
<br>
<form  method="POST" action="">
		<div class="form-group">
    <div class="row">
    <div class="col-3">
    <select name="alias" class="form-control" id="">
    <?php foreach($Alias as $alias) : ?>
          <option value="<?= $alias ?>"><?= $alias ?><br></option>
          <?php endforeach ?>
        </select>
    </div>
        <div class="col-3">
			<input type="text" name="cours" class="form-control" placeholder="matiere" required="">
		</div>
    <div class="col-3">
    <button type="submit" class="btn btn-success" name="mod_cours">Soumetre</button>
    </div>
    </div>
	</form>
  </div><br>
<?php endif  ?>






<?php if(isset($_GET['supp_cours'])): ?>
  <h3>supprimer des cours élèctroniques</h3><hr>
<br>
<form  method="POST" action="">
		<div class="form-group">
    <div class="row">
    <div class="col-3">
    <select name="alias" class="form-control" id="">
    <?php foreach($Alias as $alias) : ?>
          <option value="<?= $alias ?>"><?= $alias ?><br></option>
          <?php endforeach ?>
        </select>
    </div>
        <div class="col-3">
			<input type="text" name="cours" class="form-control" placeholder="matiere" required="">
		</div>
    <div class="col-3">
    <button type="submit" class="btn btn-success" name="supp_cours">Soumetre</button>
    </div>
    </div>
	</form>
  </div><br>
<?php endif  ?>





    <?php if($message_success): ?>
      <div class=" alert alert-success">
       <?= $message_success ?>
      </div>
      <?php endif ?>



<?php if ($service): ?>

	
	
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Matières</th>
      <th scope="col">Classe</th>
      <th scope="col">Nom du fichier</th>
      <th scope="col">Nouveau fichier</th>
    </tr>
  </thead>
  <tbody>
  		<?php foreach ($service as $services): ?>
  			<?php extract($services) ?>
        <tr>
   <form action="" method="POST">
   <th scope="row"><input type="text" required name="cours" class="form-control" value="<?= $cours ?>"></th>
   <td >
   <select name="alias" class="form-control" id="">
    <option value="<?= $alias ?>"><?= $alias ?></option>
    <?php foreach($Alias as $alias) : ?>
          <option value="<?= $alias ?>"><?= $alias ?><br></option>
          <?php endforeach ?>
        </select>
    </td>
   <td><input type="text" name="" class="form-control" value="<?= $file ?>"></td>
   <td><input type="file" name="files" class="form-control" placeholder="" required=""></td>
   <td><button type="submit" name="modifier_cours" value="<?=$id?>" class="btn btn-info">Modifier</button></td>
   </form>
   </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?php endif  ?>











<?php if ($asupprime): ?>

	
	
<table class="table table-striped">
<thead>
<tr>
  <th scope="col">Matières</th>
  <th scope="col">Classe</th>
  <th scope="col">Nom du fichier</th>
</tr>
</thead>
<tbody>
  <?php foreach ($asupprime as $services): ?>
    <?php extract($services) ?>
    <tr>
<form action="" method="POST">
<th scope="row">
  <select name="cours" id="" class="form-control">
    <option value="<?= $cours ?>"><?= $cours ?></option>
  </select>
</th>
<td >
  <select name="alias" id="" class="form-control">
    <?= $alias ?><option value="<?= $alias ?>"><?= $alias ?></option>
  </select>
</td>
<td>
  <select name="files" id="" class="form-control">
    <option value="<?= $file ?>"><?= $file ?></option>
  </select>
</td>
<td><button type="submit" name="supprime_cours" value="<?=$id?>" class="btn btn-danger">supprimer</button></td>
</form>
</tr>
<?php endforeach ?>
</tbody>
</table>

<?php endif  ?>


