






    <?php if(isset($_GET['ninscrir'])):?>
        <h1 class="h2">Nouvelle inscription</h1>
          <hr>

          <?php if($matricule_pri):?>
            <div class="alert alert-success">
                L'inscription a réussi
                <p>Mot de passe: <?=$matricule_pri['mot_de_passe']?></p>
                <p>N° Matricule: <?=$matricule_pri['mat']?></p>
            </div>
            <?php endif?>
        <form method="POST" action="">
            <br>

      <div class="form" >
        <h4>Information sur l'élève</h4><br>
        <div class="container">
          <div class="row">
            <div class="col-3">
              <label for=""><b>Nom:</b><span class="text-danger">*</span></label>
              <input type="text" name="nom" class="form-control" placeholder="Nom" required>
            </div>
            <div class="col-3">
              <label for=""><b>Prénom:</b><span class="text-danger">*</span></label>
              <input type="text" name="prenom" class="form-control" placeholder="Prénom" required>
            </div>
            <div class="col-3">
              <label for=""><b>Sexe:</b><span class="text-danger" required>*</span></label>
              <select name="sexe" id="" class="form-control">
                    
                        <option value="M">Masculin<br></option>
                        <option value="F">Feminin<br></option>
                </select>
            </div>
            <div class="col-3">
              <label for=""><b>Date de Naissance:</b><span class="text-danger">*</span></label>
              <input type="date" name="date" class="form-control" placeholder="Votre Date de Naissance ici..." required>
            </div>
          </div>

          <div class="row">
            <div class="col-3">
              <label for=""><b>Lieu de naissance:</b><span class="text-danger">*</span></label>
              <input type="text" name="lieu" class="form-control" placeholder="Lieu de naissance" required>
            </div>

                

            <div class="col-3">
              <label for=""><b>Nationnalité:</b><span class="text-danger">*</span></label>
              <input type="text" name="nation" class="form-control" placeholder="Nationnalité" required>
            </div>
            <div class="col-3">
              <label for=""><b>Adresse:</b><span class="text-danger">*</span></label>
              <input type="text" name="addresse" class="form-control" placeholder="Adresse" required>
            </div>
            <div class="col-3">
              <label for=""><b>Ville:</b><span class="text-danger">*</span></label>
              <input type="text" name="ville" class="form-control" placeholder="Ville" required>
            </div>
          </div>

          <div class="row">
            <div class="col-3">
              <label for=""><b>Téléphone:</b><span class="text-danger"></span></label>
              <input type="Adress" name="tele" class="form-control" placeholder="Téléphone">
            </div>
            <div class="col-3">
              <label for=""><b>Filière/Classe:</b><span class="text-danger" required>*</span></label>
              <select name="filiere" id="" class="form-control">
                    <?php foreach($filieres as $filiere) : ?>
                        <option value="<?= $filiere ?>"><?= $filiere ?><br></option>
                    <?php endforeach ?>
              </select>
            </div>
            
            <div class="col-3">
              <label for=""><b>Alias:</b><span class="text-danger" required>*</span></label>
              <select name="alias" class="form-control" id="">
                <?php foreach($Alias as $alias) : ?>
                    <option value="<?= $alias ?>"><?= $alias ?><br></option>
                 <?php endforeach ?>
             </select>
            </div>
            
            <div class="col-3">
              <label for=""><b>Photo:</b><span class="text-danger" required></span></label>
              <input type="file" name="image" class="form-control" placeholder="">
            </div>
          </div>
          
          <div class="row">
            <div class="col-3">
              <label for=""><b>Mot de passe:</b><span class="text-danger" required>*</span></label>
              <input type="password" name="password" class="form-control" placeholder="">
            </div>
            <div class="col-3">
            <label for=""><b>Coût de la formation</b><span class="text-danger">*</span></label>
              <input type="number" name="finance" class="form-control" placeholder="50000" required>
            </div>
          </div>
          
          <br>
          <h4>Information sur le tuteur</h4><br>

          <div class="row">
            <div class="col-3">
              <label for=""><b>Nom du Tuteur:</b><span class="text-danger" required>*</span></label>
              <input type="Adress" name="nom_t" class="form-control" placeholder="" required>
            </div>
            <div class="col-3">
              <label for=""><b>Téléphone du Tuteur:</b><span class="text-danger" ></span></label>
              <input type="number" name="tel_t" class="form-control" placeholder="06 255 00 55">
            </div>
            <div class="col-3">
              <label for=""><b>Email de Tuteur</b><span class="text-danger"></span></label>
              <input type="email" name="email_t" class="form-control" placeholder="exemple@gmail.com">
            </div>
            <div class="col-3"><br>
            <button type="submit" name="inscrir_etudiant" class="btn btn-success">Valider l'inscription</button>
            </div>
          </div>

            
          </div>
          
        </div>
      </div>
    </form>
        <?php endif ?>
        