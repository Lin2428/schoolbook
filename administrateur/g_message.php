<style>
  .note{
  background: #d5d5d5;
  color: white;
  border-top-left-radius: 10px;
	border-top-right-radius: 10px;
  padding: 10px;
  box-shadow:  0 0 3px 2px#d5d5d5;
}

#card{
  border-radius: 10px;
  background: #f3f3f3;
  box-shadow:  0 0 5px #141313;
  height: 23rem;
}

.message{
  padding: 15px;
  
  height: 10rem;
  overflow: auto;
}

  p{
    margin: 0px;
  }
</style>

<?php if($r_messages): ?>	
  <center><h3>Message</h3></center>
  <div class="row">
	<?php foreach ($r_messages as $services):?>
		<?php extract($services) ?>
     
       <div class="col-md-4">
       <div class="card" id="card" >
        <div class="note">
        <p class="text-muted">Date: <?= $date ?></p>
    <p class="card-title text-muted">Message de <?= $noms ?></p>
    <p class="card-subtitle mb-2 text-muted">E-mail: <?= $email ?></p>
    <p class="card-subtitle mb-2 text-muted">Tél: <?= $tel ?></p>
        </div>
            
             <div class="message">
            <p class="card-text text-muted"><?= $message ?></p>
            </div>
            <div style="padding: 15px;"><br><a href="?supprimer_msg=<?= $id ?>" class="btn btn-sm btn-danger ">Supprimer</a></div>
    </div><br>
    
    </div>
    <?php endforeach ?>
<?php elseif($message_erreur) :?>
	<div class="alert-info">
		<br><br>
		<p class="text-center">Vous n'avez reçu aucun message !</p>
		<br><br>
	</div>
</div>    
<?php endif ?> 

