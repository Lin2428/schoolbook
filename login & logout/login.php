<?php 
	require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
	global $db;
	$title = 'login';
	require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'authentification' . DIRECTORY_SEPARATOR . 'auth.php';
	$erreur = null;
	$matricule = null;
	$password = null;
	if((!empty($_POST['Password'])) && (!empty($_POST['matricule'])) ){
		extract($_POST);
		$matricule_confirm = $matricule;
		$Password= addslashes($Password);
		$q = $db->prepare("SELECT * FROM profils_etudiant WHERE mat = '$matricule' AND mot_de_passe = '$Password'");
		$q->execute();
		while($auth = $q->fetch()){
			$matricule = $auth['mat'];
			$password = $auth['mot_de_passe'];
			$id = $auth['id'];
			
		}


		if (("$matricule" === "$matricule_confirm")  && ("$password" === "$Password")) {
			session_start();
			$_SESSION['connecte'] = $id;
			
			header("Location: ../compte_etudiant");
			exit();
		}
		else{
			$erreur = "Identifiant incorect";
			
		}
		
		
	}

	if(est_connecte()){
		header("Location: ../compte_etudiant");
	}
	require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'head_foot' . DIRECTORY_SEPARATOR . 'header.php';
 ?>

 
    <div class="container">
	<br><center><a href="../index.php" class="btn btn-outline-dark btn rounded-circle"><span  class="fas fa-arrow-left"></span></a></center>
      <div class="card mx-auto d-block" style="max-width: 20rem; background: #f5f5f5; margin-top: 5%; box-shadow:  0 0 10px #81848b;">
  <div class="card-body">
  	<?php if($erreur) :?>
    		<div class=" alert alert-danger text-center">
    			<?= $erreur ?>
    		<?php endif ?>
    		</div> 
    <center>

    	<img src="../image/igt.png" style="max-width:80%">

        <div class="container">
        <form method="POST" action="">
          <div class="form">
            <div class="form-group">
              <label><div ><b class="text-warning">N° Matricule</b></div></label>
              <input type="number" style="" name="matricule" placeholder="Entrez votre matricule" required="" class="form-control bg-light" id="nom">
            </div>


            <div class="form-group">
              <label><div><b class="text-warning">Mot de passe</b></div></label>
              <input type="Password" name="Password" placeholder="Entrez votre mot de passe" required="" class="form-control  bg-light" id="Password">
            </div>

            <center><button type="submit" class=" btn btn-outline-warning roun rounded-pill">Connexion</button></center>
            <br>
          </div>
        </form>
      </div><br><br>
      </center>
  </div>
</div>
    </div><br><br>

	<?php require '../head_foot/footer.php' ?>
  
