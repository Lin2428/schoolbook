
<br>
<center><a href="?em=em" class="btn btn-outline-warning rounded-pill" id="emploie"><i>EMPLOIE DU TEMPS</i></a></center>
<div class="container" id="table">
  

<table class="table table-striped" >
<div class="emploie_t"><h6>EMPLOIE DU TEMPS</h6></div>
  <thead>
    <tr>
      <th scope="col">Jour</th>
      <th scope="col">Cours</th>
      <th scope="col">Heure</th>
      <th scope="col">Professeur</th>
    </tr>
  </thead>
  <tbody>
    <?php if($emploies) :?>
      <?php foreach($emploies as $temps) :?>
       <tr>
      <th scope="row"><?= $temps['jours']  ?></th>
      <td><?= $temps['cours'] ?></td>
      <td><?= $temps['heures'] ?></td>
      <td><?= $temps['professeurs'] ?></td>
    </tr>
     <?php endforeach ?>
   <?php endif ?>
  </tbody>
</table>
</div>

