<?php 
	require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
	global $db;
	$title = 'login';
	require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'authentification' . DIRECTORY_SEPARATOR . 'auth.php';
	$erreur = null;
	$noms = null;
	$password = null;
	if(!empty($_POST['nom']) && !empty($_POST['Password'])){
		extract($_POST);
		$q = $db->prepare("SELECT * FROM admin WHERE nom = '$nom' AND mot_de_passe = '$Password'");
		$q->execute();
		while($auth = $q->fetch()){
			$noms = $auth['nom'];
			$password = $auth['mot_de_passe'];
			$id = $auth['id'];
		}

		if($noms === "$nom"  &&  $password === "$Password") {
			session_start();
			$_SESSION['connecte'] = $id;
			header("Location: ../administrateur");
			exit();
		}

		else{
			$erreur = "Identifiant incorect";
			
		}
		
		
	}

	if(est_connecte()){
		header("Location: ../administrateur");
	}
	require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'head_foot' . DIRECTORY_SEPARATOR . 'header.php';
 ?>

 
    <div class="container">
      <div class="card mx-auto d-block" style="max-width: 20rem; margin-top: 15%; box-shadow:  0 0 10px #81848b;">
  <div class="card-body">
  	<?php if($erreur) :?>
    		<div class=" alert alert-danger text-center">
    			<?= $erreur ?>
    		<?php endif ?>
    		</div> 
    <center>

    	<img src="../image/igt.png" style="max-width:70%">

        <div class="container">
        <form method="POST" action="">
          <div class="form">
            <div class="form-group">
              <label><div ><b class="text-success">Nom(s)</b></div></label>
              <input type="text" name="nom" placeholder="Entrez votre nom en totalité.." required="Veuillez saisir votre noms" class="form-control bg-light" id="nom">
            </div>

            <div class="form-group">
              <label><div><b class="text-success">Mot de passe</b></div></label>
              <input type="Password" name="Password" placeholder="Entrez votre mot de passe" required="" class="form-control  bg-light" id="Password">
            </div>

            <center><button type="submit" class="btn btn-outline-warning roun rounded-pill">Connexion</button></center>
            <br>
          </div>
        </form>
      </div><br><br>
      </center>
  </div>
</div>
    </div><br><br><br><br><br><br>

	<?php require '../header & footer/footer.php' ?>
  
