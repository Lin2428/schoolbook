<?php 
	require  '../../database/database.php';
	global $db;
	$id = $_GET['id'];
	$erreur = null;
	$message = null;
	$password = null;
	if(!empty($_POST['npassword']) && !empty($_POST['epassword'])){
		extract($_POST);
		$q = $db->prepare("SELECT * FROM admin WHERE id = '$id' AND mot_de_passe = '$epassword'");
		$q->execute();
		while($reponse = $q->fetch()){
			$password = $reponse['mot_de_passe'];

		}

		if($password === $epassword){
			$q = $db->prepare("UPDATE admin SET mot_de_passe ='$npassword' WHERE id = '$id' ");
			$q->execute();

			$message = "Votre mot de passse à été modifier avec succès";
			

		}
		else{
			$erreur = "Mot de passe incorect";
		}
	}
	$title = "Password";
	
 ?>
 <!doctype html>
<html lang="fr-CG">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Agent'FBI">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="icon" type="image/png" href="ad.png">

<div class="container">
	<?php if ($message): ?>
		<br><br><br><br><br><br><br>
		<div class="alert alert-success"><p class=" text-center"><?= $message ?></p></div>
		<br><br><center><a href="../logout.php" class="btn btn-outline-dark btn rounded-circle"><span  class="fas fa-arrow-left"></span></a></center>
		</div><br><br><br>
		
	<?php endif ?>
	<?php if(empty($message) ) : ?>
		<br><br><div class="alert alert-success"><p class=" text-center">Changez votre mot de passe</p></div>
	<div class="card mx-auto d-block" style="max-width: 20rem; background: #f5f5f5; margin-top: 10%; box-shadow:  0 0 10px #81848b;">
	
<br><img src="../../image/igt.png" style="max-width:70%" class="mx-auto d-block">

        <div class="container">
        <form method="POST" action="">
          <div class="form">
            <div class="form-group">
              <label><div ><b class="text-warning -text-center">Encien mot de passe*</b></div></label>
              <input type="Password" name="epassword" placeholder="<?php if($erreur) :?><?= $erreur ?><?php else :?>votre encien mot de passe <?php endif ?>" required="Veuillez saisir votre noms" class="form-control <?php if($erreur) :?>bg-light  border-danger <?php else :?>bg-light <?php endif ?>" id="nom">
            </div>

            <div class="form-group">
              <label><div><b class="text-warning  text-center">Nouveau mot de passe*</b></div></label>
              <input type="Password" name="npassword" placeholder="votre nouveau mot de passe" required="" class="form-control  bg-light" id="Password">
            </div>

            <center><button type="submit" class="btn btn-outline-warning  roun rounded-pill">Modifier</button></center>
          </div>
        </form>
      </div><br>
      </center>
  </div>
</div>
    </div>
</div>
<?php endif?>
</div>
<br><br><br><br>
   <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="../js/jquery-3.4.1.min.js"></script>
          <script src="../js/popper.min.js"></script>
          <script src="../js/bootstrap.min.js"></script>
          <script src="../js/all.min.js"></script>

        </body>
        </html>

