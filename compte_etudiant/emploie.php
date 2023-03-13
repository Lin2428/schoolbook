

<?php 
$title = "Empoie du temps";
	 require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
	global $db;
	$alias = $_GET['alias'];
  $emploies = null;
  $q = $db->prepare("SELECT * FROM $alias ");
  $q->execute();
  while($emploie = $q->fetch()){
    $emploies[] = $emploie;
    
  }

  $jour_semaine= [
    "LUNDI",
    "MARDI",
    "MERCREDI",
    "JEUDI",
    "VENDREDI",
    "SAMEDI"
  ];
  require '../head_foot/header.php';
 ?>

 <style>
  *{
        font-size: min(10vw, 10px);
      }
  .table-striped{
  background: #9eb2ff70;;
}

 </style>


<div class="">
<table class="table table-striped" >
  <thead>
  <thead class="thead-dark">
      <th scope="col">Jour</th>
      <th scope="col">Cours</th>
      <th scope="col">Heure</th>
      <th scope="col">Professeur</th>
    </tr>
  </thead>
  <tbody>
    <?php if($emploies) :?>
      <?php foreach($jour_semaine as $jour) :?>
        
      <th scope="row"><?=$jour?></th>
      <?php foreach($emploies as $temps) :?>
       <tr>
      
     <?php if($temps['jours'] === "$jour"):?>
      <td></td>
      <td><?= $temps['cours'] ?></td>
      <td><?= $temps['heures'] ?></td>
      <td><?= $temps['professeurs'] ?></td>
    </tr>
    <?php endif ?>
     <?php endforeach ?>
     
     <?php endforeach ?>
   <?php endif ?>
  </tbody>
</table>
</div>

<?php require '../head_foot/footer.php' ?>



