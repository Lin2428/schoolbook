





<!-- MODIFICATION PROFILS MODAL -->
<!-- INFORMATION -->
<div class="modal fade" id="m_profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" id="modal_taile">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier les information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="">
            <br>

      <div class="form" >
        <h4>Information sur l'élève</h4><br>
        <div class="container">
          <div class="row">
            <div class="col-3">
              <label for=""><b>Nom:</b><span class="text-danger">*</span></label>
              <input type="text" name="nom" value="<?= $profil['nom'] ?>" class="form-control" placeholder="Nom" required>
            </div>
            <div class="col-3">
              <label for=""><b>Prénom:</b><span class="text-danger">*</span></label>
              <input type="text" name="prenom" value="<?= $profil['prenom'] ?>" class="form-control" placeholder="Prénom" required>
            </div>
            <div class="col-3">
              <label for=""><b>Sexe:</b><span class="text-danger" required>*</span></label>
              <select name="sexe" id="" class="form-control">
                <option value="<?= $profil['sexe'] ?>"><?= $profil['sexe'] ?><br></option>
                <option value="M">Masculin<br></option>
                <option value="F">Feminin<br></option>
                </select>
            </div>
            <div class="col-3">
              <label for=""><b>Date de Naissance:</b><span class="text-danger">*</span></label>
              <input type="date" name="date" value="<?= $profil['date_n'] ?>" class="form-control" placeholder="Votre Date de Naissance ici..." required>
            </div>
          </div>

          <div class="row">
            <div class="col-3">
              <label for=""><b>Lieu de naissance:</b><span class="text-danger">*</span></label>
              <input type="text" name="lieu" value="<?= $profil['lieu_n'] ?>" class="form-control" placeholder="Lieu de naissance" required>
            </div>

                

            <div class="col-3">
              <label for=""><b>Nationnalité:</b><span class="text-danger">*</span></label>
              <input type="text" name="nation" value="<?= $profil['nation'] ?>" class="form-control" placeholder="Nationnalité" required>
            </div>
            <div class="col-3">
              <label for=""><b>Adresse:</b><span class="text-danger">*</span></label>
              <input type="text" name="addresse" value="<?= $profil['Adresse'] ?>" class="form-control" placeholder="Adresse" required>
            </div>
            <div class="col-3">
              <label for=""><b>Ville:</b><span class="text-danger">*</span></label>
              <input type="text" name="ville" value="<?= $profil['Ville'] ?>" class="form-control" placeholder="Ville" required>
            </div>
          </div>

          <div class="row">
            <div class="col-3">
              <label for=""><b>Téléphone:</b><span class="text-danger">*</span></label>
              <input type="Adress" name="tele" value="<?= $profil['Telephone'] ?>" class="form-control" placeholder="Téléphone">
            </div>
            <div class="col-3">
              <label for=""><b>Filière/Classe:</b><span class="text-danger" required>*</span></label>
              <select name="filiere" id="" class="form-control">
                    <?php foreach($filieres as $filiere) : ?>
                        <option value="<?= $profil['filiere'] ?>"><?= $profil['filiere'] ?><br></option>
                        <option value="<?= $filiere ?>"><?= $filiere ?><br></option>
                    <?php endforeach ?>
              </select>
            </div>
            
            <div class="col-3">
              <label for=""><b>Alias:</b><span class="text-danger" required>*</span></label>
              <select name="alias" class="form-control" id="">
                <?php foreach($Alias as $alias) : ?>
                  <option value="<?= $profil['alias'] ?>"><?= $profil['alias'] ?><br></option>
                    <option value="<?= $alias ?>"><?= $alias ?><br></option>
                 <?php endforeach ?>
             </select>
            </div>
            
            <div class="col-3">
              <label for=""><b>Photo:</b><span class="text-danger" required>*</span></label>
              <input type="file" name="image" value="<?= $profil['image'] ?>" class="form-control" placeholder="">
            </div>
          </div>
          
          <div class="row">
            <div class="col-3">
              <label for=""><b>Mot de passe:</b><span class="text-danger" required>*</span></label>
              <input type="text" name="password" value="<?= $profil['mot_de_passe'] ?>" class="form-control" visibled placeholder="">
            </div>
            <div class="col-3">
            <label for=""><b>Cout de la formation</b><span class="text-danger">*</span></label>
              <input type="number" name="finance" value="<?= $total_paie?>" class="form-control" placeholder="50000" required>
            </div>
            <div class="col-3">
            <label for=""><b>Matricule</b><span class="text-danger">*</span></label>
              <select name="matricule" id="" class="form-control">
                <option value="<?= $profil['mat'] ?>"><?= $profil['mat'] ?></option>
              </select>
            </div>
          </div>
          
          <br>
          <h4>Information sur le tuteur</h4><br>

          <div class="row">
            <div class="col-3">
              <label for=""><b>Nom du Tuteur:</b><span class="text-danger" required>*</span></label>
              <input type="Adress" name="nom_t" value="<?= $profil['nom_tuteur'] ?>" class="form-control" placeholder="">
            </div>
            <div class="col-3">
              <label for=""><b>Téléphone du Tuteur:</b><span class="text-danger" >*</span></label>
              <input type="number" name="tel_t" value="<?= $profil['telephone_tuteur'] ?>" class="form-control" placeholder="06 255 00 55">
            </div>
            <div class="col-3">
              <label for=""><b>Email de Tuteur</b><span class="text-danger">*</span></label>
              <input type="email" name="email_t" value="<?= $profil['email_tuteur'] ?>" class="form-control" placeholder="exemple@gmail.com">
            </div>
            <div class="col-3"><br>
            <button type="submit" name="modifier_etudiant" class="btn btn-success">Valider les modification</button>
            </div>
          </div>

            
          </div>
          
        </div>
      </div>
    </form>
      </div>
    </div>
  </div>







<!-- photo -->
<div class="modal fade" id="m_photo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" id="modal_taile">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier la photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="">
            <br>

      <div class="form" >
        
            <div class="row">



            <div class="col-3">
          <label for=""><b>Matricule</b><span class="text-danger">*</span></label>
              <select name="matricule" id="" class="form-control">
                <option value="<?= $profil['mat'] ?>"><?= $profil['mat'] ?></option>
              </select>
            </div>
                
            <div class="col-3">
              <label for=""><b>Photo:</b><span class="text-danger" required>*</span></label>
              <input type="file" name="image" value="<?= $profil['image'] ?>" class="form-control" placeholder="" required>
            </div>
          

        
            
          
          
            <div class="col-3"><br>
            <button type="submit" name="modifier_photo" class="btn btn-success">Valider les modification</button>
            </div>
          

            
          </div><br>
      </div>
    </form>
      </div>
    </div>
  </div>
</div>


<!-- FINANCE -->
<div class="modal fade" id="m_finance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" id="modal_taile">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payer la scolarité</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="">
            <br>

      <div class="form" >
        
            <div class="row">

            <div class="col-3">
          <label for=""><b>Total:</b><span class="text-danger">*</span></label>
              <select name="total" id="" class="form-control">
                <option value="<?= $total_paie?>"><?= $total_paie?></option>
              </select>
            </div>

            <div class="col-3">
          <label for=""><b>Déja payer:</b><span class="text-danger">*</span></label>
              <input type="number" name="paie" value="<?= $paye_paie?>" class="form-control" placeholder="" required>
            </div>
                
            <div class="col-3">
              <label for=""><b>Montant à payer:</b><span class="text-danger" required>*</span></label>
              <input type="number" name="finance" value="" class="form-control" placeholder="" required>
            </div>
          

          <div class="col-3">
          <label for=""><b>Matricule</b><span class="text-danger">*</span></label>
              <select name="matricule" id="" class="form-control">
                <option value="<?= $profil['mat'] ?>"><?= $profil['mat'] ?></option>
              </select>
            </div>
            
          
          
          
            <div class="col-3"><br>
            <button type="submit" name="modifier_finance" class="btn btn-success">Valider les modification</button>
            </div>
          

            
          </div><br>
      </div>
    </form>
      </div>
    </div>
  </div>
</div>





<style>
  .bt{
    width: 100%;
  }
.marche{
  display: none;
}

.marche.visible{
  display: block;
}

.dropdown-menu{
  max-width: 100%;

}



.dropdown-item:hover{
  background: #2f81cade;
  padding: 10px;
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







<!-- NOTES -->
<div class="modal fade" id="m_note" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" id="modal_taile">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notes obtenu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="">
            <br>

      <div class="form" >
        
            <div class="row">

            

       
            <?php foreach ($mois as $moi): ?>
                <div class="col-3">
         <div class="container">
           <br>
         <div class="dropdown">
       <a class="btn btn-secondary dropdown-toggle bt" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <h5><?=$moi?></h5>
       </a>
     
       
         <br>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         <?php if(!empty($notes)):?>
           <?php foreach ($notes as $note): ?>
           
             <?php if($note['mois'] === $moi):?>
             
                 <hr>
                 
         <p class="dropdown-item" ><b><?=$note['matiere']?></b>: <?=$note['note']?></a>
         
         <hr>
     
            
             <?php endif ?>
           
           <?php endforeach ?>
           
           <?php else: ?>
           <p class="dropdown-item" >aucune notes</p>
           <?php endif ?>
           </div>
           </div><br>
         </div>
         </div>
         <?php endforeach ?>
          
          

            
          </div><br>
      </div>
    </form>
    </div>
  </div>
</div>
</div>



<!-- MOYENNE -->


<?php
  $tri = 0;
  
  ?>
<div class="modal fade" id="m_moyenne" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" id="modal_taile">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Moyenne</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <form method="POST" action="">
            <br>

      <div class="form" >
        
            <div class="row">

            

          
            <?php foreach ($trimestres as $trimestre): ?>
              <?php $tri++?>
                <div class="col-4">
         <div class="container">
           <br>
         <div class="dropdown">
       <a class="btn btn-secondary dropdown-toggle bt" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <h5><?=$trimestre?></h5>
       </a>
     
       
         <br>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         <?php if(!empty($moyennes_trouver)) :?>
          <?php foreach($moyennes_trouver as $moyenne):?>
           
            <?php if($moyenne['trimestre'] === "$tri") :?>
             
                 <hr>
                 
         <p class="dropdown-item" ><?=$moyenne['moyenne']?></a>
         
         <hr>
     
          
             <?php endif ?>
           
           <?php endforeach ?>
           
           <?php else: ?>
           <p class="dropdown-item" >Nons diponible pour le moment</p>
           <?php endif ?>
           </div>
           </div><br>
         </div>
         </div>
         <?php endforeach ?>
          
          

            
          </div><br>
      </div>
    </form>
    </div>
  </div>
</div>
</div>


<style>
  .marche{
  display: none;
}

.marche.visible{
  display: block;
}
</style>






<!-- DIPLOME -->
<div class="modal fade" id="m_diplome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" id="modal_taile">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Diplome et autre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="">
            <br>

      <div class="form" >
        
            <div class="row">

            

       
            <?php foreach ($cours as $matiere): ?>
                <div class="col-4">
         <div class="container">
           <br>
         <div class="dropdown">
       <a class="btn btn-secondary dropdown-toggle bt" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <h5><?=$matiere?></h5>
       </a>
     
       
         <br>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         <?php if(!empty($PDF)):?>
             <?php foreach ($PDF as $Pdf): ?>
           
              <?php if($Pdf['type'] === "$matiere"):?>
           
           <hr>
           
   <a class="dropdown-item" href="../pdf/<?=$Pdf['file']?>" target="blank"><?=$Pdf['file']?></a>
   
   <hr>
        <?php else: ?>
           <p class="dropdown-item" >aucun</p>
             <?php endif ?>

           
           <?php endforeach ?>
           
           <?php else: ?>
           <p class="dropdown-item" >aucun</p>
           <?php endif ?>
           </div>
           </div><br>
         </div>
         </div>
         <?php endforeach ?>
          
          

            
          </div><br>
      </div>
    </form>
    </div>
  </div>
</div>
</div>





<div  class="modal fade" id="supprimer_compte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div style="width: 24rem;" class="modal-dialog" role="document" id="modal_taile">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title text-danger text-center" id="exampleModalLabel">ATTENTION !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <h5 class="" id="exampleModalLabel">Voulez vous vraiment supprimmer ce compte ?</h5><br>
      <form method="POST" action="">
     
        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
          Nom
        </button>
        <?php foreach($profils as $profil): ?>
        <button type="submit" name="supprimer_compte" value="<?= $profil['mat'] ?>" class="btn btn-danger" >Oui</button>
        <?php endforeach ?>
</form>
     
          
           </div>
           </div><br>
         </div>
         </div>

