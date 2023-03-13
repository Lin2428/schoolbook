
<?php 

 ?>


<?php if(!$emp_ajouter): ?>
	<?php if(isset($_GET['ajoute_emp'])): ?>
	<form method="POST" action="">
    <div class="row">
      <div class="col-md-4"><select name="nom_classe" class="form-control" id="">
    <?php foreach($Alias as $alias) : ?>
          <option value="<?= $alias ?>"><?= $alias ?><br></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="col-md-3">
      <button type="submit" class="btn btn-primary" name="emp_ajouter">Ok</button>
      </div>
    </div>
			
	</form><br>
	<?php endif ?>
<?php endif ?>


	<?php if(isset($_GET['voir_emp'])): ?>
	<form method="POST" action="">
    <div class="row">
      <div class="col-md-4">
        <select name="nom_classe" class="form-control" id="">
    <?php foreach($Alias as $alias) : ?>
          <option value="<?= $alias ?>"><?= $alias ?><br></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="col-md-3">
      <button type="submit" class="btn btn-primary" name="emp">Ok</button>
      </div>
    </div>
			
	</form><br>
	<?php endif ?>








  <?php if($emploies): ?>
	<div class="container" id="table">

  <div class="card-deck mb-3">
                <div class="card mb-4 ">
                  <div class="print-affiche">
                  <center><h4>EMPLOI DU TEMPS DE LA CLASSE <?= $_POST['nom_classe'] ?></h4></center>
                  <br>
                  </div>
                  <div class="card-header">
                    <h4 class="my-0 font-weight"><span class="fa fa-calendar"></span> Emploi du temps de la classe <?= $_POST['nom_classe'] ?></h4><br>
                    <a href="?emp_modifier=<?= $emp ?>" class="btn btn-info">Modifier</a>
                    <button type="button" class="btn btn-primary text-light" onclick="window.print('.prin_eleve')"><i class="fa fa-print" aria-hidden="true"></i>
Imprimer</button>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th scope="col" style="min-width:15rem">Jour</th>
                        <th scope="col" style="min-width:15rem">Cour</th>
                        <th scope="col" style="min-width:15rem">Heure</th>
                        <th scope="col" style="min-width:15rem">Professeur</th>
                        </tr>
                      </thead>
                    
                      <tbody>
                      <?php if($emploies) :?>


                   <?php foreach($emploies as $temps) :?>
                    <tr>
                      <th scope="row"><?= $temps['jours']  ?></th>
                      <td><?= $temps['cours'] ?></td>
                      <td><?= $temps['heures'] ?></td>
                    <td><?= $temps['professeurs'] ?></td>

                    <?php endforeach ?>
                    </tr>
    	          
                 
  	                  
                 
                  <?php endif ?>
                    </tbody>
                      
                    </table>
                </div>
            </div>


<?php elseif($emploies_erreur) :?>
	<div class="alert-info">
		<br><br>
		<p class="text-center">Aucun emploi du temps publié dans cette classe !</p>
		<br><br>
	</div>
<?php endif ?>



	<?php if($emp_ajouter): ?>
			<form method="POST" action="">
			<div class="form-row">
    			
					<input type="text" name="nom_classe" value="<?= $nom_table ?>"  class="form-control" >
          <table class="table table-striped" >
  <thead >
    <tr >
      <th scope="col" style="min-width:5rem">Jour</th>
      <th scope="col" style="min-width:5rem">Cours</th>
      <th scope="col" style="min-width:5rem">Heures</th>
      <th scope="col" style="min-width:5rem">Professeur</th>
    </tr>
  </thead>
  <tbody>
 <tr>
  
<th scope="row">
<select name="jour" id="" class="form-control">
          <option value="LUNDI">LUNDI</option>
          <option value="MARDI">MARDI</option>
          <option value="MERCREDI">MERCREDI</option>
          <option value="JEUDI">JEUDI</option>
          <option value="VENDREDI">VENDREDI</option>
          <option value="SAMEDI">SAMEDI</option>
        </select>
</th>
<th scope="row"><input type="text" required  name="cours" placeholder="Ecrire la matière en gros caractère" class="form-control"></th>
<th scope="row"><input type="text" required  name="heures" placeholder="08H:30 à 9H:00" class="form-control"></th>
<th scope="row"><input type="text" required  name="prof" placeholder="Mr nom du prof" class="form-control"></th>
</tr>
</tbody>
 
</table>
					<button name="confime_emp" type="submit" class="btn btn-primary text-light display-4" style="margin-top: 2rem;">Ok</button>
				
			</div>
		</form>
		
		<?php endif ?>

		<?php if($emps_modifier): ?>
      <center><h3>Modifier l'Emploi du Temps</h3></center>
      <?php if ($erreur): ?>
        <div class="alert alert-danger text-center">
          <?= $erreur ?>
        </div>
      <?php endif ?>
			
			<table class="table table-striped" >
  <thead >
    <tr >
      <th scope="col" style="min-width:5rem">Jour</th>
      <th scope="col" style="min-width:5rem">Cours</th>
      <th scope="col" style="min-width:5rem">Heures</th>
      <th scope="col" style="min-width:5rem">Professeur</th>
    </tr>
  </thead>
  <tbody>
    

      <?php foreach($emps_modifier as $temps) :?>
      	<form method="POST" action="">
       <tr>
       	<input type="number" name="id" value="<?= $temps['id'] ?>"  style="display: none;">
      <th scope="row">
        <select name="jours" required id="" class="form-control">
          <option value="<?= $temps['jours']  ?>"><?= $temps['jours']  ?></option>
          <option value="LUNDI">LUNDI</option>
          <option value="MARDI">MARDI</option>
          <option value="MERCREDI">MERCREDI</option>
          <option value="JEUDI">JEUDI</option>
          <option value="VENDREDI">VENDREDI</option>
          <option value="SAMEDI">SAMEDI</option>
        </select>
      </th>
      <td><input class="form-control"   type="text" name="cours" required value="<?= $temps['cours'] ?>"></td>
      <td><input class="form-control"  type="text" name="heures" required  value="<?= $temps['heures'] ?>"></td>
      <td><input class="form-control"   type="text" name="prof" required value="<?= $temps['professeurs'] ?>"></td>
      </tr>
       <tr>
  	<td><button name="modifier_emp"   type="submit" value="<?= $nom_table ?>" class="btn btn-info btn-sm form-control">Soumetre</button></td>
    <td><button name="supprimer_emp"   type="submit" value="<?= $nom_table ?>" class="btn btn-light text-danger btn-sm form-control">Supprimer</button></td>
    
  </tr>
  </form>

     <?php endforeach ?>

     
    	<th>
        <form method="POST" action="">
         <button name="ajoute_ligne"class="btn btn-primary" type="submit" value="<?= $nom_table ?>">Ajouter une ligne</button>
      </form>
    </th>
      <th></th><th></th><th> <a href="?" class="btn btn-success" >Terminer</a></a></th>
      
  </tbody>
 
</table>
<?php endif ?>