
<?php if(isset($_GET['supprime_note_devoir'])): ?>
  <h3>Supprimer des Notes</h3>
	<form  method="POST" action="">
		<div class="form-group">
    <div class="row">
    <div class="col-3">
    <select name="classe" class="form-control" id="">
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
    <button type="submit" class="btn btn-success" name="note_supprime">Soumetre</button>
    </div>
    </div>
    </div>
	</form><br>
	<?php endif ?>

    <?php if(!empty($note_trouve)): ?>
			
			<table class="table table-striped" >
  <thead >
    <tr >
    <tr >
       <th scope="col" style="min-width:5rem">Nom</th>
      <th scope="col" style="min-width:5rem">Prenom</th>
      <th scope="col" style="min-width:5rem">Classer</th>
      <th scope="col" style="min-width:5rem">Matricule</th>
      <th scope="col" >Mois</th>
      <th scope="col" >Matiere</th>
       <th scope="col" >Note</th>
       <th scope="col" ><a type="boutton" href="" class="btn btn-danger" data-toggle="modal" data-target="#tout_supprimer" >Supprimer tout</button></th>
    </tr>
  </thead>
  <tbody>
    
  
      <?php foreach($note_trouve as $eleve) :?>
      	<?php $alias = $eleve['alias'] ?>
      	<form method="POST" action="">
       <tr>
       	<td><input type="text" required class="form-control" name="nom" value="<?= $eleve['nom'] ?>" ></td>
       	<td><input type="text" required class="form-control" name="prenom" value="<?= $eleve['prenom'] ?>" ></td>
         <td>
         <select name="alias" required class="form-control" id="">
          <option value="<?= $eleve['alias'] ?>"><?= $eleve['alias'] ?></option>
        </select>
  </td>
       	<td>
         <select name="matricule" required class="form-control" id="">
          <option value="<?= $eleve['matricule'] ?>"><?= $eleve['matricule'] ?></option>
        </select>
  </td>
  <td>
         <select name="mois" required class="form-control" id="">
          <option value="<?=$mois_note?>"><?=$mois_note?></option>
        </select>
  </td>
  
       	<td><input type="text" required class="form-control" name="matiere" value="<?= $matiere_note?>"></td>
       	<td><input type="text" class="form-control" name="note" value="<?= $eleve['note'] ?>"></td>
         <td><button name="note_supp" class="btn btn-danger" type="submit" value="<?= $eleve['id'] ?>" >supprimer</button></td>
      </tr>
      
  	
    </td>
  
  
         
      </tr>
      
  	
    </td>
  
  
     </form>
     <?php endforeach ?>
      
  </tbody>
 
</table>

<?php endif ?>




<div  class="modal fade" id="tout_supprimer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div style="width: 24rem;" class="modal-dialog" role="document" id="modal_taile">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title text-danger text-center" id="exampleModalLabel">ATTENTION !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <h5 class="" id="exampleModalLabel">Voulez vous vraiment supprimmer toutes les notes ?</h5><br>
      <form method="POST" action="">
        <input type="text" name="alias" value="<?= $alias?>" style="display: none;">
        <input type="text" name="matiere" value="<?= $matiere_note?>" style="display: none;">
        <input type="text" name="mois" value="<?= $mois_note?>" style="display: none;">
        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
          Nom
        </button>
        <button type="submit" name="note_supp_tout" class="btn btn-danger" >Oui</button>
</form>
     
          
           </div>
           </div><br>
         </div>
         </div>
         