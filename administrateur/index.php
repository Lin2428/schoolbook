<?php 
require 'code.php';
require 'css/style.php';
 ?>
<!doctype html>
<html lang="fr-CG">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Agent'FBI">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="icon" type="image/png" href="ad.png">
    <style>
      <?= $style ?>

    </style>
 <title><?php if($title): ?>
              <?= $title ?>
            <?php else : ?>
              ESCAT
            <?php endif ?>
                
    </title>
</head>
<body>
<style>

  .ligne{
    padding: 5px;
    padding-left: 15px;
  }

  .content{
    height: 100%;
    background-color: rgba(0,0,0,.03);
  }

  .ligne:hover{
    background-color: #e0e0e07a;
  }

  .content a{
    color: #3290b5d9;
  }

  .content a:hover{
    text-decoration: none;
  }

  .version{
    padding: 6px;
    background: rgba(0,0,0,.03);
  }
.print-affiche{
  display: none;
}
  @media print{
    /* Print ETUDIANT //////////////////*/
    .version,
    .menu,
    .bouton{
      display: none;
    }
    .col-md-10{
      justify: content;
      margin-left: 2rem;
      display: inline;
      font-size: 1.2em;
    }
     /* Print EMPLOI DU TEMPS //////////////////*/
     form{
      display: none;
     }
     .card-header{
      display: none;
     }
     .card{
      border: none;
      margin-left: none;
      box-shadow: 0;
      
     }
     .card-body{
      border: none;
      margin-left: none;
      box-shadow: 0;
      padding: 0px;
      margin-bottom: 0px;
     }

     .print-affiche{
        display: block;
      }
      td a{
        display: none;
      }
  
     

  }


</style>
<body>
  <!-- marrion -->

  <section>
    <div class="version border-bottom">

        <div class="row">
          <div class="col-md-8">
            <h5 class="text-secondary">SchoolBook Gestion</h5>
          </div>
          <div class="col-md-4">
          <div class="row">
         <div class="col-md-4 ml-auto d-block">
          <a class="" href="modifié_password?id=<?=$id?>" style="margin-left: 5px;">
                 Mot de passe
                </a>
              </div>
        <div class="col-md-4 ">
            <a class="btn btn-outline-danger rounded-pill" href="?deconnexion" >
                  Déconnexion
                </a>
         </div>
         </div>
          </div>
    
        </div>
      
        
      </div>
      <div class="row " style="height: 100vh;">
        <div class="col-md-2 menu bg-ligth">
          
          <div class="border-right content fixed-left">
      
              
           
           <a href="?Dashbord">
            <div class="border-top ligne">
             <span class="fas fa-database" aria-hidden="true"> </span> Tableau de Bord 
            </div>
          </a>

              <a  data-toggle="collapse" href="#inscrir" role="button" aria-expanded="false" aria-controls="collapseExample">
                <div class="border-top ligne">
                 <span class="fa fa-server"> </span> Inscription
                </div>
              </a>

                <div class="collapse" id="inscrir" >
                
                  <a class="item" href="?ninscrir">
                  <div class="ligne">Nouveau inscription</div>

                  </a>
                </div>
                

              <a href="?classe">
                <div class="border-top ligne">
                 <span class="fa fa-users"> </span> Classe/Details élèves
                </div>
              </a>

              <a data-toggle="collapse" href="#moyenne" role="button" aria-expanded="false" aria-controls="collapseExample">
                <div class="border-top ligne">
                 <span class="fa fa-balance-scale"> </span> Moyennes
                </div>
              </a>

              
                <div class="collapse" id="moyenne" >
                
                  <a class="item" href="?ajoute_moyenne">
                  <div class="ligne">Ajouter</div>

                  </a>
                
                
                    <a class="item" href="?mod_moyenne">
                      <div class="ligne"> modifier
                      </div>
                      </a>

                      <a class="item" href="?supprime_moyenne">
                      <div class="ligne"> supprimer
                      </div>
                      </a>
                
                </div>
                

              <a data-toggle="collapse" href="#note" role="button" aria-expanded="false" aria-controls="collapseExample">
                <div class="border-top ligne">
                 <span class="fa fa-pen-square"> </span> Notes
                </div>
              </a>

            
                <div class="collapse" id="note" >
                
                  <a class="item" href="?ajoute_notes">
                  <div class="ligne">Ajouter</div>

                  </a>
                
                
                    <a class="item" href="?mod_note">
                      <div class="ligne"> modifier
                      </div>
                      </a>

                      <a class="item" href="?supprime_note_devoir">
                      <div class="ligne"> supprimer
                      </div>
                      </a>
                
                </div>
                

              <a data-toggle="collapse" href="#emploi" role="button" aria-expanded="false" aria-controls="collapseExample">
                <div class="border-top ligne">
                 <span class="fa fa-calendar"> </span> Emploi du temps
                </div>
              </a>
             

             
                <div class="collapse" id="emploi">
                
                  <a class="item" href="?ajoute_emp">
                  <div class="ligne">Ajouter</div>

                  </a>
                
                
                    <a class="item" href="?voir_emp">
                      <div class="ligne">Voir ou modifier
                      </div>
                      </a>
                
                </div>
               

              <a href="?g_message=100">
                <div class="border-top ligne">
                 <span class="fa fa-comments"> </span> Boite de Réception
                </div>
              </a>


              <a data-toggle="collapse" href="#info" role="button" aria-expanded="false" aria-controls="collapseExample">
                <div class="border-top ligne">
                 <span class="fa fa-info"> </span> Information
                </div>
              </a>

              
                <div class="collapse" id="info" >
                
                  <a class="item" href="?info_plus">
                  <div class="ligne">Ajouter une information</div>
                </a>
                
                
                    <a class="item" href="?g_info=0,3">
                    <div class="ligne">Gerer les dernier Information
                    </div>
                    </a>
                
                
                    <a class="item" href="?g_info=100">
                    <div class="ligne">Gerer toute les Informations
                    </div>
                    </a>
                
                </div>
           

              <a data-toggle="collapse" href="#cours" role="button" aria-expanded="false" aria-controls="collapseExample">
                <div class="border-top ligne">
                 <span class="fa fa-file-pdf"> </span> Cours élèctronique
                </div>
              </a>
              
                <div class="collapse" id="cours" >
                
                  <a class="item" href="?ajoute_cours">
                  <div class="ligne">Ajouter</div>

                  </a>
                
                
                    <a class="item" href="?mod_cours">
                      <div class="ligne"> modifier
                      </div>
                      </a>

                      <a class="item" href="?supp_cours">
                      <div class="ligne"> supprimer
                      </div>
                      </a>
                
                </div>
                

              <a data-toggle="collapse" href="#diplome" role="button" aria-expanded="false" aria-controls="collapseExample">
                <div class="border-top ligne">
                 <span class="fa fa-graduation-cap"> </span> Diplome et autre
                </div>
              </a>

              
                <div class="collapse" id="diplome">
                
                  <a class="item" href="?ajoute_diplome">
                  <div class="ligne">Ajouter</div>

                  </a>
                
                
                    <a class="item" href="?mod_diplome">
                      <div class="ligne"> modifier
                      </div>
                      </a>

                      <a class="item" href="?supp_diplome">
                      <div class="ligne"> supprimer
                      </div>
                      </a>
                
                </div>
           
             
            
           
          </div>
</div>

<main role="main" class="col-md-10">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center  ">
            
        

                
          </div>
          <br>
    
    
        <?php if($Dashbord):?>
          
          <h1 class="h2">Tableau de Bord</h1>
          <hr>
          
          <div class="row">
            <div class="col-12 col-md bg-info" style="margin: 15px;border-radius: 5px;">
              <div class="row">
                <div class="col-md-4">
                  <span class="fa fa-users" style="font-size: 120px;color: #fff;padding: 20px;"></span>
                </div>
                <div class="col-md-8">
                  <p style="color: #fff;font-size: 50px;margin-left: 40px;"><?php if($nombre_totals) :?><?= $nombre_totals?><?php else: ?>0<?php endif ?></p><br>
                  <p style="color: #fff;" class="text-center"><b>Total Eléves inscrits</b></p>
                </div>
               
              </div>
            </div>
            <div class="col-6 col-md bg-success" style="margin: 15px;border-radius: 5px;">
              <div class="row">
                <div class="col-md-3">
                  <span class="fa fa-user" style="font-size: 120px;color: #fff;padding: 20px;"></span>
                </div>
                <div class="col-md-9">
                  <p style="color: #fff; font-size: 50px;margin-left: 40px;"><?php if($nombre_hommes) :?><?= $nombre_hommes?><?php else: ?>0<?php endif ?></p><br>
                  <p style="color: #fff;" class="text-center"><b>Total Garçons</b></p>
                </div>
              </div>
            </div>
            <div class="col-6 col-md bg-warning" style="margin: 15px;border-radius: 5px;">
              <div class="row">
                <div class="col-md-3">
                  <span class="fa fa-user" style="font-size: 120px;color: #fff;padding: 20px;"></span>
                </div>
                <div class="col-md-9">
                  <p style="color: #fff; font-size: 50px;margin-left: 40px;"><?php if($nombre_femmes) :?><?= $nombre_femmes?><?php else: ?>0<?php endif ?></p><br>
                  <p style="color: #fff;" class="text-center"><b>Total Filles</b></p>
                </div>
              </div>
            </div>
            <div class="col-6 col-md bg-danger" style="margin: 15px;border-radius: 5px;">
              <div class="row">
                <div class="col-md-3">
                  <span class="fas fa-landmark"style="font-size: 120px;color: #fff;padding: 20px;"></span>
                </div>
                <div class="col-md-9"> 
                  <p style="color: #fff; font-size: 50px;margin-left: 60px;"><?php if($nombre_classes) :?><?= $nombre_classes?><?php else: ?>0<?php endif ?></p><br>
                  <p style="color: #fff;" class="text-center"><b>Total Classes</b></p>
                </div>
              </div>
            </div>

            <div class="container">
              <div class="card-deck mb-3">
                <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 font-weight"><span class="fa fa-bell"></span> 10 DERNIERS ELEVES INSCRITS</h4>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">N°</th>
                          <th scope="col">NOM</th>
                          <th scope="col">PERNOM</th>
                          <th scope="col">MATRICULE</th>
                          <th scope="col">SEXE</th>
                          <th scope="col">DATE DE NAISSANCE</th>
                          <th scope="col">CLASSE</th>
                        </tr>
                      </thead>
                    
                      <tbody>
                        <?php if($derniers) :?>
                      <?php foreach($derniers as $eleve):?>
                        <tr>
                          <th ><?= $nombre_dernier++?></th>
                          <td ><a href="?detail=<?= $eleve['mat']?>"><?= $eleve['nom']?></a></td>
                          <td ><?= $eleve['prenom']?></td>
                          <td ><?= $eleve['mat']?></th>
                          <td ><?= $eleve['sexe']?></td>
                           <td ><?= $eleve['date_n']?></td>
                          <td ><?= $eleve['alias']?></td>
                       </tr>
                       <?php endforeach ?>
                       <?php endif ?>
                    </tbody>
                      
                    </table>
                </div>
            </div>

          </div>
       
        <?php endif ?>
        
        <?php
        require 'inscription.php';
      require 'g_message.php';
      require 'g_info.php';
      require 'g_emploie.php';
      require 'g_etudiant.php';
      require 'g_pdf.php';
      require 'moyenne.php';
      require 'note_devoir.php';
      require 'g_note_supprime.php';
      require 'diplome.php';

     ?>
     </main>
      </div>
      
    </div>
  </section>

 




          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="js/jquery-3.4.1.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/all.min.js"></script>

        </body>
        </html>