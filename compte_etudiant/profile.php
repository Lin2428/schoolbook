<?php
 require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
$id = $_GET['user'];
$title = "Profile";
    $q = $db->prepare("SELECT * FROM profils_etudiant WHERE id = '$id' ");
    $q->execute();
     while($profile=$q->fetch()){
      $nom = $profile['nom'];
      $prenom = $profile['prenom'];
      $date = $profile['date_n'];
      $lieu_n = $profile['lieu_n'];
      $addresse = $profile['Adresse'];
      $ville = $profile['Ville'];
      $tel = $profile['Telephone'];
      $niveau = $profile['niveau'];
      $filiere = $profile['filiere'];
      $image = $profile['image'];
      $alias = $profile['alias'];
      $mat = $profile['mat'];
      $sexe = $profile['sexe'];
      $nation = $profile['nation'];
    }
   
require '../head_foot/header.php';

?>
<style>
  *{
        font-size: min(10vw, 10px);
      }
    h5{
        margin-left: 7px;
        
    }
    .img_etudiant{
    max-width: 120px;
    min-width: 100px;
    border-radius: 50%;
  }
</style>
<br>
<center>
<img  src="<?php if($image): ?><?= "../image/$image" ?><?php else :?>../image/img_prof.png <?php endif ?>"   class="img_etudiant mx-auto d-block img-fluid" alt="Responsive image" >
</center>
<hr>
<h5>Nom: <?=$nom?></h5>
<hr>
<h5>Prénom: <?=$prenom?></h5>
<hr>
<h5>Sexe: <?=$sexe?></h5>
<hr>
<h5>Date et lieu de naissance: <?=$date. " à ". $lieu_n?></h5>
<hr>
<h5>Nationalité: <?=$nation?></h5>
<hr>
<h5>Ville: <?=$ville?></h5>
<hr>
<h5>Addresse: <?=$addresse?></h5>
<hr>
<h5>Téléphone: <?=$tel?></h5>
<hr>
<h5>Niveau: <?=$niveau?></h5>
<hr>
<h5>Filière/Classe: <?=$filiere?></h5>
<hr>
<h5>Alias: <?=$alias?></h5>
<hr>
<h5>Matriculation: <?=$mat?></h5>
<hr>




<?php require '../head_foot/footer.php' ?>