<?php
  $tri = 0;
  
  ?>

<?php if(isset($_GET['ajoute_moyenne'])): ?><br>
  <hr>
  <h3>Ajouter des Moyennes</h3>
	
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
        <select name="trimestre" class="form-control" id="">
    <?php foreach($trimestres as $trimestre) : ?>
        <?php $tri++ ?>
          <option value="<?= $tri ?>"><?= $trimestre ?><br></option>
          <?php endforeach ?>
        </select>
        </div>
    <div class="col-3">
    <button type="submit" class="btn btn-success" name="ajoute_moyenne">Soumetre</button>
    </div>
    </div>
	</form>
  </div>
	<?php endif ?>




    <?php if(isset($_GET['mod_moyenne'])): ?><br>
  <hr>
  <h3>Modifier des Moyennes</h3>
	
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
        <select name="trimestre" class="form-control" id="">
    <?php foreach($trimestres as $trimestre) : ?>
        <?php $tri++ ?>
          <option value="<?= $tri ?>"><?= $trimestre ?><br></option>
          <?php endforeach ?>
        </select>
        </div>
    <div class="col-3">
    <button type="submit" class="btn btn-success" name="mod_moyenne">Soumetre</button>
    </div>
    </div>
	</form>
  </div>
	<?php endif ?>







    <?php if(isset($_GET['supprime_moyenne'])): ?><br>
  <hr>
  <h3>Supprimer des Moyennes</h3>
	
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
        <select name="trimestre" class="form-control" id="">
    <?php foreach($trimestres as $trimestre) : ?>
        <?php $tri++ ?>
          <option value="<?= $tri ?>"><?= $trimestre ?><br></option>
          <?php endforeach ?>
        </select>
        </div>
    <div class="col-3">
    <button type="submit" class="btn btn-success" name="supprime_moyenne">Soumetre</button>
    </div>
    </div>
	</form>
  </div>
	<?php endif ?>














    <?php if($liste_moyenne): ?>
			
			<table class="table table-striped" >
  <thead >
    <tr >
       <th scope="col" style="min-width:5rem">Nom</th>
      <th scope="col" style="min-width:5rem">Prenom</th>
      <th scope="col" style="min-width:5rem">Classer</th>
      <th scope="col" style="min-width:5rem">Matricule</th>
      <th scope="col" >Trimestre</th>
       <th scope="col" >Moyenne</th>
       
    </tr>
  </thead>
  <tbody>
    
  
      <?php foreach($liste_moyenne as $etudiant) :?>
        
        
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
         <select name="trimestre"  required class="form-control" id="">
          <option value="<?=$trimestre_post?>"><?=$trimestre_post?></option>
        </select>
  </td>
  
       	<td><input type="text" required class="form-control" name="moyenne" value="<?php if(!empty($noms_moyenne)) :?><?php foreach($noms_moyenne as $nom) :?><?php if(($nom['matricule']==$etudiant['mat'])  ):?><?=$nom['moyenne']?><?php endif?><?php endforeach?><?php endif?>"></td>
         <td><button name="moyenne_ok" class="btn btn-primary" type="submit" value="" >Ok</button></td>
      </tr>
      
  	
    </td>
  
  
     </form>
     
     <?php endforeach ?>
      
  </tbody>
 
</table>

<?php endif ?>








<?php if(!empty($moyenne_modifier)): ?>
    <?php
  $tri = 0;
  
  ?>	
			<table class="table table-striped" >
  <thead >
    <tr >
    <tr >
       <th scope="col" style="min-width:5rem">Nom</th>
      <th scope="col" style="min-width:5rem">Prenom</th>
      <th scope="col" style="min-width:5rem">Classe</th>
      <th scope="col" style="min-width:5rem">Matricule</th>
      <th scope="col" >Trimestre</th>
      <th scope="col" >Moyenne</th>
       
    </tr>
  </thead>
  <tbody>
    
  
      <?php foreach($moyenne_modifier as $eleve) :?>
      	
      	<form method="POST" action="">
       <tr>
       	<td>
            <select required name="nom" class="form-control" id="">
                <option value="<?= $eleve['nom'] ?>"><?= $eleve['nom'] ?></option>
            </select>
        </td>
       	<td>
            <select required name="prenom" class="form-control" id="">
                <option value="<?= $eleve['prenom'] ?>"><?= $eleve['prenom'] ?></option>
            </select>
        </td>
         <td>
         <select required name="alias" class="form-control" id="">
          <option value="<?= $eleve['alias'] ?>"><?= $eleve['alias'] ?></option>
        </select>
  </td>
       	<td>
         <select required name="matricule" class="form-control" id="">
          <option value="<?= $eleve['matricule'] ?>"><?= $eleve['matricule'] ?></option>
        </select>
  </td>
  <td>
         <select required name="trimestre" class="form-control" id="">
          <option value="<?=$eleve['trimestre']?>"><?=$eleve['trimestre']?></option>
          <?php foreach($trimestres as $trimestre) : ?>
        <?php $tri++ ?>
          <option value="<?= $tri ?>"><?= $trimestre ?><br></option>
          <?php endforeach ?>
        </select>
  </td>
  
       	<td><input type="text" required class="form-control" name="moyenne" value="<?= $eleve['moyenne'] ?>"></td>
         <td><button name="modifier_moyenne" class="btn btn-primary" type="submit" value="<?= $eleve['id'] ?>" >Modifier</button></td>
      </tr>
      
  	
    </td>
  
  
         
      </tr>
      
  	
    </td>
  
  
     </form>
     <?php endforeach ?>
      
  </tbody>
 
</table>

<?php endif ?>


















<?php if(!empty($moyenne_supprime)): ?>
			
			<table class="table table-striped" >
  <thead >
    <tr >
    <tr >
       <th scope="col" style="min-width:5rem">Nom</th>
      <th scope="col" style="min-width:5rem">Prenom</th>
      <th scope="col" style="min-width:5rem">Classe</th>
      <th scope="col" style="min-width:5rem">Matricule</th>
      <th scope="col" >Trimestre</th>
      <th scope="col" >Moyenne</th>
       <th scope="col" ><a type="boutton" href="" class="btn btn-danger" data-toggle="modal" data-target="#moyenne_tout_supprimer" >Supprimer tout</button></th>
    </tr>
  </thead>
  <tbody>
    
  
      <?php foreach($moyenne_supprime as $eleve) :?>
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
         <select name="trimestre" required class="form-control" id="">
          <option value="<?=$eleve['trimestre']?>"><?=$eleve['trimestre']?></option>
        </select>
  </td>
  
       	<td><input type="text" required class="form-control" name="moyenne" value="<?= $eleve['moyenne'] ?>"></td>
         <td><button name="moyenne_supp" class="btn btn-danger" type="submit" value="<?= $eleve['id'] ?>" >supprimer</button></td>
      </tr>
      
  	
    </td>
  
  
         
      </tr>
      
  	
    </td>
  
  
     </form>
     <?php endforeach ?>
      
  </tbody>
 
</table>




<div  class="modal fade" id="moyenne_tout_supprimer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <input type="text" name="trimestre" value="<?= $trimestre_supp ?>" style="display: none;">
        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
          Nom
        </button>
        <button type="submit" name="moyenne_supp_tout" class="btn btn-danger" >Oui</button>
</form>
     
          
           </div>
           </div><br>
         </div>
         </div>
<?php endif ?>






