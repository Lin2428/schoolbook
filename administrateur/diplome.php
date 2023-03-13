
<?php if(isset($_GET['ajoute_diplome'])): ?>
<h3>Ajoutez des dipomes et autre</h3><hr>
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
    <button type="submit" class="btn btn-success" name="ajoute_diplome">Soumetre</button>
    </div>
    </div>
	</form>
  </div><br>
<?php endif  ?>



<?php if(isset($_GET['mod_diplome'])): ?>
<h3>mosifer des dipomes et autre</h3><hr>
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
    <select name="type" class="form-control" id="">
    <?php foreach($cours as $alias) : ?>
          <option value="<?= $alias ?>"><?= $alias ?><br></option>
          <?php endforeach ?>
        </select>
    </div>
    <div class="col-3">
    <button type="submit" class="btn btn-success" name="mod_diplome">Soumetre</button>
    </div>
    </div>
	</form>
  </div><br>
<?php endif  ?>










<?php if(isset($_GET['supp_diplome'])): ?>
<h3>supprimer des dipomes et autre</h3><hr>
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
    <select name="type" class="form-control" id="">
    <?php foreach($cours as $type) : ?>
          <option value="<?= $type ?>"><?= $type ?><br></option>
          <?php endforeach ?>
        </select>
    </div>
    <div class="col-3">
    <button type="submit" class="btn btn-success" name="supp_diplome">Soumetre</button>
    </div>
    </div>
	</form>
  </div><br>
<?php endif  ?>





<?php if($diplome_trouve): ?>
			
			<table class="table table-striped" >
  <thead >
    <tr >
       <th scope="col" style="min-width:5rem">Nom</th>
      <th scope="col" style="min-width:5rem">Prenom</th>
      <th scope="col" style="min-width:5rem">Classer</th>
      <th scope="col" style="min-width:5rem">Matricule</th>
      <th scope="col" >type</th>
      <th scope="col" >Fichiers</th>
    </tr>
  </thead>
  <tbody>
    
  
      <?php foreach($diplome_trouve as $etudiant) :?>
      	<?php $alias = $etudiant['alias'] ?>
        
        
      	<form method="POST" action="">
       <tr>
       	<td><input type="text" required class="form-control" name="nom" value="<?= $etudiant['nom'] ?>" ></td>
       	<td><input type="text" class="form-control" name="prenom" value="<?= $etudiant['prenom'] ?>" ></td>
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
         <select name="type" required class="form-control" id="">
          <?php foreach($cours as $diplome): ?>
            <option value="<?=$diplome?>"><?=$diplome?></option>
            <?php endforeach ?>
        </select>
  </td>
  
       	<td><input type="file" required class="form-control" name="file" value=""></td>
         <td><button name="diplome_ok" class="btn btn-primary" type="submit" value="" >Ok</button></td>
      </tr>
      
  	
    </td>
  
  
     </form>
     
     <?php endforeach ?>
      
  </tbody>
 
</table>

<?php endif ?>















<?php if($diplome_modifi): ?>
			
			<table class="table table-striped" >
  <thead >
    <tr >
       <th scope="col" style="min-width:5rem">Nom</th>
      <th scope="col" style="min-width:5rem">Prenom</th>
      <th scope="col" style="min-width:5rem">Classer</th>
      <th scope="col" style="min-width:5rem">Matricule</th>
      <th scope="col" >type</th>
      <th scope="col" >Fichiers</th>
      <th scope="col" >Noveau fichiers</th>
    </tr>
  </thead>
  <tbody>
    
  
      <?php foreach($diplome_modifi as $etudiant) :?>
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
          <option value="<?= $etudiant['matricule'] ?>"><?= $etudiant['matricule'] ?></option>
        </select>
  </td>
  <td>
         <select name="type" required class="form-control" id="">
            <option value="<?=$etudiant['type']?>"><?=$etudiant['type']?></option>
            <?php foreach($cours as $diplome): ?>
            <option value="<?=$diplome?>"><?=$diplome?></option>
            <?php endforeach ?>
        </select>
  </td>
   <td><?=$etudiant['file']?></td>
       	<td><input type="file" required class="form-control" name="file" value=""></td>
         <td><button name="diplome_modifier" class="btn btn-primary" type="submit" value="<?=$etudiant['id']?>" >modifier</button></td>
      </tr>
      
  	
    </td>
  
  
     </form>
     
     <?php endforeach ?>
      
  </tbody>
 
</table>

<?php endif ?>







<?php if($diplome_supp): ?>
			
			<table class="table table-striped" >
  <thead >
    <tr >
       <th scope="col" style="min-width:5rem">Nom</th>
      <th scope="col" style="min-width:5rem">Prenom</th>
      <th scope="col" style="min-width:5rem">Classer</th>
      <th scope="col" style="min-width:5rem">Matricule</th>
      <th scope="col" >type</th>
      <th scope="col" >Fichiers</th>
      <th scope="col" >
        <a href="" class="btn btn-danger" class="btn btn-danger" data-toggle="modal" data-target="#diplome_tout_supprimer">supprimer tout</a>
      </th>
    </tr>
  </thead>
  <tbody>
    
  
      <?php foreach($diplome_supp as $etudiant) :?>
        
        
      	<form method="POST" action="">
       <tr>
       	<td><?= $etudiant['nom'] ?></td>
       	<td><?= $etudiant['prenom'] ?></td>
         <td><select name="alias" required id="" class="form-control">
            <option value="<?= $etudiant['alias'] ?>"><?= $etudiant['alias'] ?></option>
         </select></td>
       	<td><?= $etudiant['matricule'] ?></td>
  <td><select name="type" id="" class="form-control">
    <option value="<?= $etudiant['type'] ?>"><?= $etudiant['type'] ?></option>
  </select></td>
  
       	<td><?= $etudiant['file'] ?></td>
         <td><button name="supprime_diplome" class="btn btn-danger" type="submit" value="<?=$etudiant['id'] ?>" >supprimer</button></td>
      </tr>
      
  	
    </td>
  
  
     </form>
     
     <?php endforeach ?>
      
  </tbody>
 
</table>







<div  class="modal fade" id="diplome_tout_supprimer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div style="width: 24rem;" class="modal-dialog" role="document" id="modal_taile">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title text-danger text-center" id="exampleModalLabel">ATTENTION !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <h5 class="" id="exampleModalLabel">Voulez vous vraiment tout supprimmer ?</h5><br>
      <form method="POST" action="">
        <input type="text" name="alias" value="<?= $alias_sup?>" style="display: none;">
        <input type="text" name="type" value="<?= $type_sup?>" style="display: none;">
        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
          Nom
        </button>
        <button type="submit" name="diplome_supp_tout" class="btn btn-danger" >Oui</button>
</form>
     
          
           </div>
           </div><br>
         </div>
         </div>
         <?php endif ?>