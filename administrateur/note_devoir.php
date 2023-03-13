






<?php if(isset($_GET['ajoute_notes'])): ?><br>
  <hr>
  <h3>Ajouter des Notes</h3>
	
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
        <select name="mois" class="form-control" id="">
    <?php foreach($mois as $alias) : ?>
          <option value="<?= $alias ?>"><?= $alias ?><br></option>
          <?php endforeach ?>
        </select>
        </div>
        <div class="col-3">
			<input type="text" name="matiere" class="form-control" placeholder="matiere" required="">
		</div>
    <div class="col-3">
    <button type="submit" class="btn btn-success" name="note_ajoute">Soumetre</button>
    </div>
    </div>
	</form>
  </div>
	<?php endif ?>

	<?php if($etudiants): ?>
			
			<table class="table table-striped" >
  <thead >
    <tr >
       <th scope="col" style="min-width:5rem">Nom</th>
      <th scope="col" style="min-width:5rem">Prenom</th>
      <th scope="col" style="min-width:5rem">Classer</th>
      <th scope="col" style="min-width:5rem">Matricule</th>
      <th scope="col" >Mois</th>
      <th scope="col" >Matiere</th>
       <th scope="col" >Note</th>
       <th></th><th></th>
    </tr>
  </thead>
  <tbody>
    
  
      <?php foreach($etudiants as $etudiant) :?>
      	<?php $alias = $etudiant['alias'] ?>
        
        
      	<form method="POST" action="">
       <tr>
       	<td><input type="text" required class="form-control" name="nom" value="<?= $etudiant['nom'] ?>" ></td>
       	<td><input type="text" required class="form-control" name="prenom" value="<?= $etudiant['prenom'] ?>" ></td>
         <td>
         <select name="alias" required class="form-control" id="">
          <option value="<?= $etudiant['alias'] ?>"><?= $etudiant['alias'] ?></option>
        </select>
  </td>
       	<td>
         <select name="matricule" required class="form-control" id="">
          <option value="<?= $etudiant['mat'] ?>"><?= $etudiant['mat'] ?></option>
        </select>
  </td>
  <td>
         <select name="mois" required class="form-control" id="">
          <option value="<?=$mois_note?>"><?=$mois_note?></option>
        </select>
  </td>
  
       	<td><input type="text" required class="form-control" name="matiere" value="<?= $matiere_note?>"></td>
       	<td><input type="text" required class="form-control" name="notes" value="<?php if(!empty($noms)) :?><?php foreach($noms as $nom) :?><?php if(($nom['matricule']==$etudiant['mat'])  ):?><?=$nom['note']?><?php endif?><?php endforeach?><?php endif?>"></td>
         <td><button name="note_ok" class="btn btn-primary" type="submit" value="" >Ok</button></td>
      </tr>
      
  	
    </td>
  
  
     </form>
     
     <?php endforeach ?>
      
  </tbody>
 
</table>

<?php endif ?>
















<?php if(isset($_GET['mod_note'])): ?>
  <h3>Modifier des Notes</h3>
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
        <select name="mois" class="form-control" id="">
    <?php foreach($mois as $alias) : ?>
          <option value="<?= $alias ?>"><?= $alias ?><br></option>
          <?php endforeach ?>
        </select>
        </div>
        <div class="col-3">
			<input type="text" name="matiere" class="form-control" placeholder="matiere" required="">
		</div>
    <div class="col-3">
    <button type="submit" class="btn btn-success" name="mod_note">Soumetre</button>
    </div>
    </div>
    </div>
	</form><br>
	<?php endif ?>








  <?php if($eudiant_mod): ?>
			
			<table class="table table-striped" >
  <thead >
    <tr >
       <th scope="col" style="min-width:5rem">Nom</th>
      <th scope="col" style="min-width:5rem">Prenom</th>
      <th scope="col" style="min-width:5rem">Classer</th>
      <th scope="col" style="min-width:5rem">Matricule</th>
      <th scope="col" >Mois</th>
      <th scope="col" >Matiere</th>
       <th scope="col" >Note</th>
       <th></th><th></th>
    </tr>
  </thead>
  <tbody>
    
  
      <?php foreach($eudiant_mod as $etudiant) :?>
      	
        
        
      	<form method="POST" action="">
       <tr>
       	<td><input type="text" required class="form-control" name="nom" value="<?= $etudiant['nom'] ?>" ></td>
       	<td><input type="text" required class="form-control" name="prenom" value="<?= $etudiant['prenom'] ?>" ></td>
         <td>
         <select name="alias" required class="form-control" id="">
          <option value="<?= $etudiant['alias'] ?>"><?= $etudiant['alias'] ?></option>
        </select>
  </td>
       	<td>
         <select name="matricule" required class="form-control" id="">
          <option value="<?= $etudiant['matricule'] ?>"><?= $etudiant['matricule'] ?></option>
        </select>
  </td>
  <td>
         <select name="mois" required class="form-control" id="">
          <option value="<?= $etudiant['mois'] ?>"><?= $etudiant['mois'] ?></option>
        </select>
  </td>
  
       	<td><input type="text" required class="form-control" name="matiere" value="<?= $etudiant['matiere'] ?>"></td>
       	<td><input type="text" required class="form-control" name="note" value="<?= $etudiant['note'] ?>"></td>
         <td><button name="modifier_note" class="btn btn-primary" type="submit" value="<?= $etudiant['id'] ?>" >modifier</button></td>
      </tr>
      
  	
    </td>
  
  
     </form>
     
     <?php endforeach ?>
      
  </tbody>
 
</table>
<?php endif ?>


