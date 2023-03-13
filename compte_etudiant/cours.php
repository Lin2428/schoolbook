
<?php 
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
$title = 'Cours Electronique';
    /* PARTIE PDF*/
    $alias = $_GET['file'];
    $files =null;
    
    $PDF = null;
    $q = $db->prepare("SELECT * FROM cours_pdf WHERE alias = '$alias' " );
    $q->execute();
    while($pdf = $q->fetch()){
        $PDF[] = $pdf;
        
    }

	
  $emploies = null;
  $q = $db->prepare("SELECT cours FROM $alias ");
  $q->execute();
  while($emploie = $q->fetch()){
    $cours[] = $emploie;
    
  }


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
<?php if(!empty($cours)):?>
  <?php foreach ($cours as $matiere): ?>
         
    <div class="container">
      <br>
    <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle bt" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <h5><?=$matiere['cours']?></h5>
  </a>

  
    <br>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <?php if(!empty($PDF)):?>
      <?php foreach ($PDF as $Pdf): ?>
      
        <?php if($Pdf['cours'] === $matiere['cours']):?>
        
            <hr>
            
    <a class="dropdown-item" href="../pdf/<?=$Pdf['file']?>"><?=$Pdf['file']?></a>
    
    <hr>

 
        <?php endif ?>
      
      <?php endforeach ?>
      <?php endif ?>
      </div>
      </div><br>
    </div>
    <?php endforeach ?>
    <?php endif ?>
<br>
<?php require '../head_foot/footer.php' ?>
