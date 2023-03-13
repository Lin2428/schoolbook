<?php 
	require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
	global $db;
	$title = 'inscription';

    $filieres = [
        "Assurances-Banque-Finance",
        "Comptabilité-Gestion financière",
        "Management et Gestion des Ressources Humaines",
        "Secrétariat de Direction",
        "Réseau Informatique",
        "Télécommunication",
        "Maintenance des ordinateurs",
        "Electricité industrielle",
        "Qualité-Hygiène-Sécurité-Environnement",
        "Marketing et Gestion commerciale",
        "Transport et logistique",
        "Commerce international & Transit",
        "Délégation médicale",
        "Vente en Pharmacie"
      ];
      
      $Alias = [
        //Licence 1
        "ABF_1",
        "CGF_1",
        "MGRH_1",
        "SD_1",
        "RI_1",
        "Télécom_1",
        "MO_1",
        "EI_1",
        "QHSE_1",
        "MGC_1",
        "TL_1",
        "CIT_1",
        "DM_1",
        "VP_1",
      
        //Licence 2
        "ABF_2",
        "CGF_2",
        "MGRH_2",
        "SD_2",
        "RI_2",
        "Télécom_2",
        "MO_2",
        "EI_2",
        "QHSE_2",
        "MGC_2",
        "TL_2",
        "CIT_2",
        "DM_2",
        "VP_2",
      
        //Liencence 3
        "ABF_3",
        "CGF_3",
        "MGRH_3",
        "SD_3",
        "RI_3",
        "Télécom_3",
        "MO_3",
        "EI_3",
        "QHSE_3",
        "MGC_3",
        "TL_3",
        "CIT_3",
        "DM_3",
        "VP_3"
      ];













    $erreur = null;
    $message = null;
    if (isset($_POST['submit'])) {
        extract($_POST);
       if(!empty($nom) && !empty($prenom) && !empty($date) && !empty($niveau) && !empty($filiere) && !empty($alias) && !empty($cpassword)){
            if("$cpassword" === "$password"){
             $q = $db->prepare("INSERT INTO profils_etudiant(nom, prenom, date_n, niveau, filiere, alias, mot_de_passe) VALUES(:nom,:prenom,:date_n,:niveau,:filiere,:alias,:mot_de_passe)");
              $q->execute([
                 'nom' => strtoupper($nom),
                 'prenom' => strtoupper($prenom),
                 'date_n' => $date,
                 'niveau' => $niveau,
                 'filiere' => $filiere,
                 'alias' => $alias,
                 'mot_de_passe' => $cpassword
                ]);
                $message = "Votre compte a été créer avec succès !";
            }else{
                $erreur = "Veuillez saisir le bon mot de passe !";
            }
        }
    }

    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'head_foot' . DIRECTORY_SEPARATOR . 'header.php';
    ?>
    <style>
        label{
            font-weight: bold;
        }
    </style>
    <div class="container">
        <div>
           <br><center><img src="../image/igt.png" style="min-width: 80%;" alt="Responsive-image" class="logo_ecole" ></center><br>
        </div>
    <center><h4>Inscrivez vous pour avoir votre compte </h4></center>
    <br>
    <?php if($message): ?>
        <div class="alert alert-success">
        <p class="text-center"><?=$message?></p>
    </div>
    <?php endif ?>
    <?php if($erreur): ?>
        <div class="alert alert-danger">
        <p class="text-center"><?=$erreur?></p>
    </div>
    <?php endif ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="nom">Nom(s)</label>
            <input type="text" name="nom" style="text-transform:uppercase;" id="nom" class="form-control" required="" value="<?php if($erreur): ?><?=$nom?><?php endif ?>" placeholder="Votre nom ici...">
            <br>
            <label for="prenom">Prénom(s)</label>
            <input type="text" style="text-transform:uppercase;" name="prenom" id="prenom" class="form-control" required="" value="<?php if($erreur): ?><?=$prenom?><?php endif ?>" placeholder="Votre prénom ici...">
            <br>
            <label for="date">Date de naissance</label>
            <input type="date" name="date" id="date" class="form-control" required="" value="<?php if($erreur): ?><?=$date?><?php endif ?>">
            <br>
            <label for="niveau">Niveau d'etude</label>
            <select name="niveau" class="form-control" id="niveau" required="" value="<?php if($erreur): ?><?=$niveau?><?php endif ?>">
                <option value="L1"> L1 </option>
                <option value="L2"> L2 </option>
                <option value="L3"> L3 </option>
            </select>
            <br>
            <label for="filiere">Filière</label>
            <select name="filiere" id="" class="form-control" required="" value="<?php if($erreur): ?><?=$filiere?><?php endif ?>">
                    <?php foreach($filieres as $filiere) : ?>
                <option value="<?= $filiere ?>"><?= $filiere ?><br></option>
                <?php endforeach ?>
        </select>
            <br>
            <label for="alias">Alias <span class="text-danger">(Attention! Sélectionnez l'alias de votre classe correctement)</span></label>
            <select name="alias" class="form-control" value="<?php if($erreur): ?><?=$alias?><?php endif ?>" id="" required="">
                <?php foreach($Alias as $alias) : ?>
          <option value="<?= $alias ?>"><?= $alias ?><br></option>
          <?php endforeach ?>
            </select>
            <br>
            <label for="password">Nouveau mot de passe</label>
            <input type="password" name="password" class="form-control" aria-required="gni" value="<?php if($erreur): ?><?=$password?><?php endif ?>"  placeholder="Nouveau mot de passe">
            <br>
            <label for="cpassword">Confirmer</label>
            <input type="password" class="form-control <?php if($erreur): ?>border-danger<?php endif ?>" name="cpassword" aria-required="gni"  placeholder="<?php if($erreur): ?><?= $erreur ?><?php else: ?>Confirmez votre mot de passe<?php endif ?>">
            
        </div>
        <br>
        <center>
        <button name="submit" type="submit" class="btn btn-outline-warning roun rounded-pill" >Enregistrer</button>
        </center><br>
        </form>
    </div>
