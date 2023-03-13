
<style>
    .img_etudiant{
    max-width: 200px;
    min-width: 100px;
    border-radius: 50%;
  }
</style>


	<?php if(isset($_GET['classe'])): ?>
	<form method="POST" action="">
    <div class="row">
      <div class="col-md-4"><select name="nom_classe" class="form-control" id="">
    <?php foreach($Alias as $alias) : ?>
          <option value="<?= $alias ?>"><?= $alias ?><br></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="col-md-3">
      <button type="submit" class="btn btn-primary" name="classe_detail">Ok</button>
      </div>
    </div>
			
	</form><br>
	<?php endif ?>





  <?php if($listes): ?>		
  <div class="container">
              <div class="card-deck mb-3">
                <div class="card mb-4 ">
                <div class="print-affiche">
                  <center><h4>LISTE D'INSCRITS DANS LA CLASSE <?= $_POST['nom_classe'] ?></h4></center>
                  <br>
                  </div>
                  <div class="card-header">
                    <h4 class="my-0 font-weight"><span class="fa fa-users"></span> LISTE D'INSCRITS DANS LA CLASSE <?= $_POST['nom_classe'] ?></h4>
                    <button type="button" class="btn btn-primary text-light" onclick="window.print('.prin_eleve')"><i class="fa fa-print" aria-hidden="true"></i>
Imprimer</button>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">N°</th>
                          <th scope="col">NOM</th>
                          <th scope="col">PERNOMS</th>
                          <th scope="col">MATRICULE</th>
                          <th scope="col">SEXE</th>
                          <th scope="col">DATE NAISSANCE</th>
                          <th scope="col">CLASSE</th>
                        </tr>
                      </thead>
                    
                      <tbody>
                      <?php foreach($listes as $liste):?>
                        <tr>
                          <th ><?= $nombre_dernier++?></th>
                          <td ><a href="?detail=<?= $liste['mat']?>"><?= $liste['nom']?></a>
                          <p class="print-affiche"><?= $liste['nom']?></p>
                        </td>
                          <td ><?= $liste['prenom']?></td>
                          <td ><?= $liste['mat']?></th>
                          <td ><?= $liste['sexe']?></td>
                           <td ><?= $liste['date_n']?></td>
                          <td ><?= $liste['alias']?></td>
                       </tr>
                       <?php endforeach ?>
                    </tbody>
                      
                    </table>
                </div>
            </div>

          </div>

<?php elseif($etudiant_erreur) :?>
	<div class="alert-info">
		<br><br>
		<p class="text-center">Aucun(e) étudiant(e) trouvé dans cette classe !</p>
		<br><br>
	</div>
<?php endif ?>
<br>
<?php if(isset($_GET['detail'])):?>
  <?php if($profils): ?>
    <?php foreach($profils as $profil): ?>

<div class="bouton">
<hr>
<button type="button"  class="btn btn-info text-light" data-toggle="modal" data-target="#m_profil"><i class="fa fa-address-card" aria-hidden="true"></i>
Modifier les Informations</button>
<button type="button" class="btn btn-danger " data-toggle="modal" data-target="#m_photo"><i class="fa fa-user-circle" aria-hidden="true"></i>
Changer la photo</button>
<button type="button" class="btn btn-success text-light" data-toggle="modal" data-target="#m_finance"><i class="fa fa-money-bill" aria-hidden="true"></i>
Payer la scolarité</button>
<button type="button" class="btn btn-warning text-light" data-toggle="modal" data-target="#m_note"><i class="fa fa-pen-square" aria-hidden="true"></i>
Notes</button>
<button type="button" class="btn btn-info text-light" data-toggle="modal" data-target="#m_moyenne"><span class="fa fa-balance-scale"> </span>Moyennes</button>
<button type="button" class="btn btn-primary text-light" data-toggle="modal" data-target="#m_diplome"><span class="fa fa-graduation-cap"> </span>Diplome...</button>
<button type="button" class="btn btn-primary text-light" onclick="window.print('.prin_eleve')"><i class="fa fa-print" aria-hidden="true"></i>
Imprimer</button>
<br><br><button type="button" class="btn btn-danger text-light" data-toggle="modal" data-target="#supprimer_compte"><i class="fa fa-trash" aria-hidden="true"></i>
supprimer ce compte</button>
<hr>
</div>



















<div class="prin_eleve">
<div class="row">
<div class="col-md-6">
  <h4>INFORMATIONS GENERALES</h4>
    <p><b>Nom:</b> <?= $profil['nom'] ?></p>
    <p><b>Prénom:</b> <?= $profil['prenom'] ?></p>
    <p><b>Sexe:</b> <?= $profil['sexe'] ?></p>
    <p><b>Date de naissance:</b> <?= $profil['date_n'] ?></p>
    <p><b>Lieu de naissance:</b> <?= $profil['lieu_n'] ?></p>
    <p><b>Nationnalité:</b> <?= $profil['nation'] ?></p>
    <p><b>Adresse:</b> <?= $profil['Adresse'] ?></p>
    <p><b>Ville:</b> <?= $profil['Ville'] ?></p>
    <p><b>Téléphone:</b> <?= $profil['Telephone'] ?></p>
    <p><b>Niveau:</b> <?= $profil['niveau'] ?></p>
    <p><b>Filiere/Classe:</b> <?= $profil['filiere'] ?></p>
    <p><b>Alias:</b> <?= $profil['alias'] ?></p>
    <p><b>N° Matricule:</b> <?= $profil['mat'] ?></p>
    <p><b>Mot de passe:</b> <?= $profil['mot_de_passe'] ?></p>
   
    <hr>
    <br>
    <h5>INFORMATIONS TUTTEURS</h5>
    <p><b>Nom:</b> <?= $profil['nom_tuteur'] ?></p>
    <p><b>Téléphone:</b> <?= $profil['telephone_tuteur'] ?></p>
    <p><b>Email:</b> <?= $profil['email_tuteur'] ?></p>
    
  </div>

  <div class="col-md-6">
  <img  src="<?php if(!empty($profil['image'])): ?><?= "../image/".$profil['image'] ?><?php else :?>../image/img_prof.png <?php endif ?>"   class="img_etudiant mx-auto d-block img-fluid" alt="Responsive image" >
  <br><br>
  <h4>Paiement de la scolarité</h4>
  <hr>
  <?php if(!empty($total_paie)): ?>
    <p><b>Total à Payer:</b> <?= $total_paie?> FCFA</p>
    <p><b>Déja Payée:</b> <?= $paye_paie?> FCFA</p>
    <p><b>Reste à Payr:</b> <?=$reste_paie?> FCFA</p>
    <?php endif ?>
  </div>
  
  
</div>
</div>
<?php endforeach ?>
<?php endif ?>
  <?php endif ?>



<style>
  #modal_taile{
    max-width: 1000px;
    max-height: 2000px;
  }
</style>






<?php require 'modification_profil.php'?>












