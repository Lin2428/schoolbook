
<?php 
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
$title = 'Diplome';

    $matricule = $_GET['nom'];
    $files =null;
    
    $PDF = null;
    // DIPLOME
    $q = $db->prepare("SELECT * FROM diplome WHERE matricule = '$matricule' " );
    $q->execute();
    while($pdf = $q->fetch()){
        $PDF[] = $pdf;
        
    }

	
$cours = [
    "DIPLOME",
    "ATTESTATION",
    "BULLETIN"
];


  require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'head_foot' . DIRECTORY_SEPARATOR . 'header.php';
 ?>
 <style>
  *{
        font-size: min(10vw, 10px);
      }
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
  width: 100%;

}

.dropdown-item:hover{
  background: #2f81cade;
  padding: 10px;
}

 </style>

  <?php foreach ($cours as $matiere): ?>
         
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
          
  <a class="dropdown-item" href="../pdf/<?=$Pdf['file']?>"><?=$Pdf['file']?></a>
  
  <hr>


      <?php endif ?>
       
    <?php endforeach ?>
    <?php else: ?>
      <p class="dropdown-item">aucun</p>
    <?php endif ?>
   
      </div>
      </div><br>
    </div>
    <?php endforeach ?>
<br>
<?php require '../head_foot/footer.php' ?>
