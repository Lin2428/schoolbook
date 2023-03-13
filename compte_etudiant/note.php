
<?php 
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
$title = 'NOTE';
    /* PARTIE PDF*/
    $matricule = $_GET['nom'];

    
    /*NOTE ET MOYENNE*/
    $notes = null;;
    $q = $db->prepare("SELECT * FROM note_devoir WHERE matricule = '$matricule' ");
    $q->execute();
     while($note=$q->fetch()){
      $notes[] = $note;
    }

    

$mois = [

    "OCTOBRE",
    "NOVEMBRE",
    "DECEMBRE",
    "JANVIER",
    "FEVRIER",
    "MARS",
    "AVRIL",
    "MAI",
    "JUIN",
    "JULLIET",
    "AOUT",
    "SEPTEMBRE"
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

  <?php foreach ($mois as $moi): ?>
         
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
                 
         <p class="dropdown-item" ><?=$note['matiere']?> <?=$note['note']?></a>
         
         <hr>
     
      
             <?php endif ?>
           
           <?php endforeach ?>
           
           <?php else: ?>
           <p class="dropdown-item" >aucune notes</p>
           <?php endif ?>
      </div>
      </div><br>
    </div>
    <?php endforeach ?>
<br>
<?php require '../head_foot/footer.php' ?>
