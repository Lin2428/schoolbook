<?php
 require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
$matricule = $_GET['nom'];
$title = "FINANCE";
$total = null;
    $q = $db->prepare("SELECT * FROM finance WHERE matricule = '$matricule' ");
    $q->execute();
     while($profile=$q->fetch()){
      $total = $profile['paie_total'];
      $paye = $profile['deja_paye'];
      $reste = $profile['reste_paye'];
    
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
</style>
<br>
<br>
<h4 class="text-center">Réglément Financière</h4>
<hr>
<?php if($total): ?>
<h5>Total à payer: <?= $total?> FCFA</h5>
<hr>
<h5>Déja payé: <?= $paye?> FCFA</h5>
<hr>
<h5>Reste à payer: <?=$reste?> FCFA</h5>
<?php endif ?>
<hr>





<?php require '../head_foot/footer.php' ?>