<?php 
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'authentification' . DIRECTORY_SEPARATOR . 'auth.php';
    forcer_utilisateur_connecte();
    $id = $_SESSION['connecte'];
    global $db;
	  $title = "Etudiant";
    $q = $db->prepare("SELECT * FROM profils_etudiant WHERE id = '$id' ");
    $q->execute();
     while($profile=$q->fetch()){
      $nom = $profile['nom'];
      $prenom = $profile['prenom'];
      $date = $profile['date_n'];
      $niveau = $profile['niveau'];
      $filiere = $profile['filiere'];
      $image = $profile['image'];
      $alias = $profile['alias'];
      $id = $profile['id'];
      $mat = $profile['mat'];
      
    }
    $nom_cp = addslashes($nom);
    $prenom_cp = addslashes($prenom);




      $emploies = null;
  $q = $db->prepare("SELECT * FROM $alias ");
  $q->execute();
  while($emploie = $q->fetch()){
    $emploies[] = $emploie;
  }

  if (isset($_GET["user"])) {
    header("Location: profile.php?user=$id");
  }

  if (isset($_GET["em"])) {
    header("Location: emploie.php?alias=$alias");
  }
 

    if(isset($_GET['deconnexion'])){
        header("Location: ../login & logout/logout.php");
    }



    if (isset($_GET['files'])) {
   header("Location: cours.php?file=$alias");
  }

  if (isset($_GET['info'])) {
    header("Location: info.php?nom=$mat");
    }

  if (isset($_GET['note'])) {
header("Location: note.php?nom=$mat");
}

if (isset($_GET['moyenne'])) {
  header("Location: moyenne.php?nom=$mat");
  }

  if (isset($_GET['finance'])) {
    header("Location: finance.php?nom=$mat");
    }

    
    if (isset($_GET['diplome'])) {
      header("Location: diplome.php?nom=$mat");
      }

    if (isset($_GET['message'])) {
      header("Location: message.php?nom=$mat");
      }


	require '../head_foot/header.php';

 ?>

 <style>
*{
        font-size: min(10vw, 10px);
      }
  .img_etudiant{
    max-width: 120px;
    min-width: 100px;
    border-radius: 50%;
  }

  .descip{
    
    background: #000118;
    box-shadow:  0 0 10px #182a5c;
    color: white;
    padding: 10px;
    padding-left: 30px;
    border-radius: 20px;
  }
  #descip{
    color: #deeef8;
  }



  @media(max-width: 391px) {
	.button{
		
		text-align: center;
    
	}
}


  .bouton1 a{
    
    margin-left: px;
    color: #deeef8;
    font-weight:bolder ;
    transition: 0.5s;
   
  }


  .bouton1 a:hover{
    
    text-decoration: none;
  }
.table{
  background: #318beb69;
  padding: 15px;
  border-radius: 10px;
}
.choix{
  color: black;
}
.choix:hover{
  text-decoration: none;
  color: #00738e;
}
 .choix_style{
  background: #5fa0e6;
  padding: 15px;
  border-radius: 10px;
  margin-bottom: 3rem;
}

.fa-user,
.fa-balance-scale,
.fa-calendar,
.fa-info,
.fa-pen-square,
.fa-graduation-cap,
.fa-file-pdf,
.fa-comments{
  font-size: 15px;
}

 </style>
<section style="background: #000722;">
<div class="container logo" style=" border-bottom-left-radius: 50px; border-bottom-right-radius: 50px;"><br>
  <center><img src="../image/igt.png" style="min-width: 80%;" alt="Responsive-image" class="logo_ecole" ></center>
<center><a href="../index.php" class="btn btn-outline-dark btn rounded-circle"><span  class="fas fa-arrow-left"></span></a></center><br>
</div>
</section>

 <div style="background: #000722;">
 <br><br>
 <div class="container">
   <div class="row">
       <div class="col-md-4">
          <img  src="<?php if($image): ?><?= "../image/$image" ?><?php else :?>../image/img_prof.png <?php endif ?>"   class="img_etudiant mx-auto d-block img-fluid" alt="Responsive image" >
        </div>
    
        <div class="col-md-8">
          <br>
       <div class="descip" >

       <h6 id="descip"><b><span class="fa fa-user-circle"></span> <?= $nom ?>
            <?= $prenom ?><br>
            <span class="fa fa-university"></span><?= $filiere ?><br>
            <span class="fa fa-quote-right"></span> <?= $mat ?><br>
            </b></h6>
       </div>
        </div>
        
    </div><br>
   <div class="row">
    <div class="col-md-1">
      
    </div>
    <div class="col-md-11">
    <div class="button">
    <br>
 
    
    <div class="bouton1 btn btn-outline-secondary roun rounded-pill">
  <a href="?deconnexion=deconnexion"  >se deconnecter</a>
 
    </di>
   </div>
    </div>
   </div>
  </div>
  </div>
  
  <br><br>
</div>

 <br>  

<div class="container">
  <div class="table">
    <br><br> 
<div class="row">
<div class="col-4 list_choix"><a href="?user" class="choix"><div class="text-center choix_style"><span class=" fa fa-user"></span><br>Profile</div></a></div>
    <div class="col-4 list_choix"><a href="?moyenne" class="choix"><div class="text-center choix_style"><span class="fa fa-balance-scale"> </span><br>Moyennes</div></a></div>
    <div class="col-4 list_choix"><a href="?note" class="choix"><div class="text-center choix_style"> <span class="fa fa-pen-square"> </span><br>Notes</div></a></div>
    <div class="col-4 list_choix"><a href="?em" class="choix"><div class="text-center choix_style"><span class=" fa fa-calendar"></span><br>Emplois du temps</div></a></div>
    <div class="col-4 list_choix"><a href="?info" class="choix"><div class="text-center choix_style"><span class=" fa fa-info"></span><br>Information <br><br></div></a></div>
    <div class="col-4 list_choix"><a href="?files" class="choix"><div class="text-center choix_style"><span class=" fa fa-file-pdf"></span><br>Cours Electronique</div></a></div>
    <div class="col-4 list_choix"><a href="?finance" class="choix"><div class="text-center choix_style"><span class=" fa fa-money-bill"></span><br>Réglément Financiere</div></a></div>
    <div class="col-4 list_choix"><a href="?diplome" class="choix"><div class="text-center choix_style"><span class="fa fa-graduation-cap"> </span><br>Diplomes Bulletin</div></a></div>
    <div class="col-4 list_choix"><a href="?message" class="choix"><div class="text-center choix_style"> <span class="fa fa-comments"></span><br>Ecrir à l'école</div></a></div>
  
</div>   
</div>
</div>
<?php require '../head_foot/footer.php' ?>
          