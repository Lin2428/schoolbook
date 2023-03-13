<?php
require 'auth.php';
forcer_utilisateur_connecte();
$id = $_SESSION['connecte'];
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
global $db;
$title = "Espace admin";
if (isset($_GET["deconnexion"])) {
  header("Location: logout.php");
}
$matiere = null;
$demande = null;
$demandes = null;
$emploie = null;
if(isset($_GET['emploie'])){
  $emploie = $_GET['emploie'];
  
}

// DASHBORD ///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////

$Dashbord = false;
if ((isset($_GET["Dashbord"])) || (isset($_GET["inscrir"])) || (isset($_GET["clase"])) || (isset($_GET["moyenne"])) ||
(isset($_GET["note"])) || (isset($_GET["emploi"])) || (isset($_GET["info"])) || (isset($_GET["cours"])) ||
(isset($_GET["diplome"])) || ((empty($_GET)))) {
  $Dashbord = true;
}













$nombre_totals = null;
$nombre_hommes = null;
$nombre_femmes = null;
$nombre_classes = null;
$message_success = null;
$nombre_dernier = 1;
$nombre_total = null;
$q = $db->prepare("SELECT mat FROM profils_etudiant ");
  $q->execute();
  while($demandes = $q->fetch()){
    $nombre_total[] = $demandes;

   }
   if($nombre_total){
    foreach($nombre_total as $total){
      $nombre_totals++;
     }
   }

   $nombre_homme = null;
   $q = $db->prepare("SELECT sexe FROM profils_etudiant WHERE sexe = 'M' ");
  $q->execute();
  while($demandes = $q->fetch()){
    $nombre_homme[] = $demandes;

   }

   
   if($nombre_homme){
    foreach($nombre_homme as $total){
      $nombre_hommes++;
     }
   }

   $nombre_femme = null;
   $q = $db->prepare("SELECT sexe FROM profils_etudiant WHERE sexe = 'F' ");
  $q->execute();
  while($demandes = $q->fetch()){
    $nombre_femme[] = $demandes;

   }


if($nombre_femme){
  foreach($nombre_femme as $total){
    $nombre_femmes++;
   }
}
   $derniers = null;
   $q = $db->prepare("SELECT * FROM profils_etudiant ORDER BY id DESC LIMIT 0,10");
   $q->execute();
   while($dernier = $q->fetch()){
     $derniers[] = $dernier;
     
   }

// INFORMATION CODE ////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

/*GERER LES DERNIER INFORMATION*/
$r_infos = null;
$info_erreur = null;
if(isset($_GET['g_info'])){
    $g_info = $_GET['g_info'];
    $g_info = addslashes($g_info);
    $q = $db->prepare("SELECT * FROM information ORDER BY id DESC LIMIT $g_info");
    $q->execute();
    while($r_info = $q->fetch()){
      $r_infos[] = $r_info;
      
    }
    if(empty($r_infos)){
      
     $info_erreur = "true";
    }

  

  }

/*AJOUTER DES NFORMATION*/
if (isset($_POST['aj_info'])) {
	extract($_POST);
	if (!empty($aj_titre) && !empty($aj_texte) && !empty($type)) {
    $aj_titre = addslashes($aj_titre);
    $aj_texte = addslashes($aj_texte);
    $type = addslashes($type);
		$q = $db->prepare("INSERT INTO information  (titre, texte, type) VALUES(:titre,:texte,:type)");
	 $q->execute([
          'titre' => $aj_titre,
          'texte' => $aj_texte,
          'type' => $type
        ]);
        }
	header('Location: ?g_info=100');
	
}



/*AFFICHAGE DE LA PAGE A MODIFIER*/
	$mods = null;
	if (isset($_GET['modifier'])) {
		$id = $_GET['modifier'];
		$q = $db->prepare("SELECT * FROM information WHERE id = '$id' ");
		$q->execute();
		while($mod = $q->fetch()){
			$texte = $mod['texte'];
			$titre = $mod['titre'];
			$mods = $mod['id'];
		}
	}
	
 /*MODIFICATION DE L'INFORMATION*/
if (isset($_POST['md_info'])) {
	extract($_POST);
	if (!empty($md_titre) && !empty($md_texte) && !empty($type)) {
    $md_titre = addslashes($md_titre);
    $md_texte = addslashes($md_texte);
		$q = $db->prepare("UPDATE information SET titre = '$md_titre', texte = '$md_texte', type = '$type' WHERE id = '$mods' ");
	$q->execute();
	header('Location: ?g_info=100');
	}
}

/*SUPPRESSION DE L'INFORMATION*/
if (isset($_GET['supprimer_info'])) {
		$id = $_GET['supprimer_info'];
		$q = $db->prepare(" DELETE FROM information WHERE information . id = $id ");
		$q->execute();
		if ($id === "0,2"){
			header("Location: ?g_info=0,2");
		}
		else{
			header("Location: ?g_info=100");
		}
	}
		
//




// FIN INFORMATION CODE/////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////

//MESSAGE CODE//////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////

/*GERER LES DERNIER MESSAGE*/
$r_messages = null;
$message_erreur = null;
if(isset($_GET['g_message'])){
    $g_message = $_GET['g_message'];
    $q = $db->prepare("SELECT * FROM message ORDER BY id DESC LIMIT $g_message");
    $q->execute();
    while($r_message = $q->fetch()){
      $r_messages[] = $r_message;
      
    }
    if(empty($r_infos)){
      
      $message_erreur = "true";
     }

  }

  /*SUPPRESSION DE L'INFORMATION*/
if (isset($_GET['supprimer_msg'])) {
    $id = $_GET['supprimer_msg'];
    $q = $db->prepare(" DELETE FROM message WHERE message . id = $id ");
    $q->execute();
   
     header("Location: ?g_message=100");
  
  }
  
// FIN MESSAGE CODE//////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////


// EMPLOIE DU TEMPS CODE ////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////

$emploies = null;
$emploies_erreur = null;
if(isset($_POST['emp'])){
  $emp = $_POST['nom_classe'];
  
  $q = $db->prepare("SELECT * FROM $emp ORDER BY id ASC");
  $q->execute();
  while($emploie = $q->fetch()){
    $emploies[] = $emploie;
  }
  if(empty($emploies)){
      
    $emploies_erreur = "true";
   }
}

$emp_ajouter = null;
if (isset($_POST['emp_ajouter'])) {
  if (!empty($_POST['nom_classe'])) {
    $nom_table = $_POST['nom_classe'];
  $emp_ajouter = 1;
  $q = $db->prepare("CREATE TABLE IF NOT EXISTS $nom_table 
( 
  id INT PRIMARY KEY AUTO_INCREMENT, 
  jours VARCHAR(100) NULL DEFAULT NULL, 
  cours VARCHAR(100) NULL DEFAULT NULL, 
  heures VARCHAR(255) NULL DEFAULT NULL, 
  professeurs VARCHAR(255) NULL DEFAULT NULL, 
  image_prof VARCHAR(255) NULL DEFAULT NULL 
)");
  $q->execute();

  }
}

if (isset($_POST['confime_emp'])) {
if ((!empty($_POST['jour'])) && (!empty($_POST['cours'])) && (!empty($_POST['heures'])) && (!empty($_POST['prof']))) {
  extract($_POST);
  $jour = addslashes($jour);
  $cours = addslashes($cours);
  $heures = addslashes($heures);
  $prof = addslashes($prof);
  $q = $db->prepare("INSERT INTO $nom_classe(jours, cours, heures, professeurs) VALUES                   (:jours,:cours,:heures,:professeurs)");
    $q->execute([
      'jours' => $jour,
      'cours' => $cours,
      'heures' => $heures,
      'professeurs' => $prof
    ]);

    $emp=$nom_classe;
header("Location: ?emp_modifier=$emp");
}
}
$emps_modifier = null;
if(isset($_GET['emp_modifier'])){
  $emp = $_GET['emp_modifier'];
  
  $q = $db->prepare("SELECT * FROM $emp ORDER BY id ASC");
  $q->execute();
  while($emp_modifier = $q->fetch()){
    $emps_modifier[] = $emp_modifier;
    $nom_table = $emp;
  
  }
}
$erreur = null;
if (isset($_POST['modifier_emp'])) {
  extract($_POST);
if ((!empty($jours)) && (!empty($cours)) && (!empty($heures)) && (!empty($prof))) {
  
  $jours = addslashes($jours);
  $cours = addslashes($cours);
  $heures = addslashes($heures);
  $prof = addslashes($prof);
  $q = $db->prepare("UPDATE $modifier_emp SET jours ='$jours', cours ='$cours', heures='$heures', professeurs ='$prof' WHERE id = $id");
    $q->execute();
  
  
   $emp=$modifier_emp;
header("Location: ?emp_modifier=$emp");

}
else{
extract($_POST);
$emp=$modifier_emp;
$erreur = "Ne soumetez un champs vide";
}
}


if (isset($_POST['ajoute_ligne'])) {
  extract($_POST);
  $q = $db->prepare("INSERT INTO $ajoute_ligne(jours, cours, heures, professeurs) VALUES (:jours,:cours,:heures,:professeurs)");
    $q->execute([
      'jours' => "Jour",
      'cours' => "Cours",
      'heures' => "Heures",
      'professeurs' => "Professeurs"
    ]);

     $emp=$ajoute_ligne;
header("Location: ?emp_modifier=$emp");
}

if (isset($_POST['supprimer_emp'])) {
  extract($_POST);
  $q = $db->prepare(" DELETE FROM $supprimer_emp WHERE $supprimer_emp . id = $id ");
  $q->execute();


}

// FIN EMPOLIE DU TEMPS CODE //////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////


// ETUDIANT CODE ///////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

// AJOUT DE l'ETUDIANT
////////////////
$matricule_pri = null;
$matriculation = null;
if (isset($_POST['inscrir_etudiant'])) {
  if ((!empty($_POST['nom'])) && (!empty($_POST['alias'])) && (!empty($_POST['filiere'])) && ( !empty($_POST['date'])) && (!empty($_POST['password']))) {
    extract($_POST);
  $nom = strtoupper($nom);
  $prenom = strtoupper($prenom);

  $q = $db->prepare("SELECT * FROM profils_etudiant ORDER BY id DESC LIMIT 0,1");
  $q->execute();
  while($dernier = $q->fetch()){
    $matriculation = $dernier['mat'];
    
  }
  if($matriculation){
    $matricule = (int)$matriculation + 1;
  }else{
    $matricule = "1000";
  }

  $q = $db->prepare("INSERT INTO profils_etudiant(nom, prenom, sexe, date_n, lieu_n, nation, Adresse, Ville, Telephone, niveau, filiere, alias, image, mot_de_passe, mat, nom_tuteur, telephone_tuteur, email_tuteur)
   VALUES (:nom,:prenom,:sexe,:date_n,:lieu_n,:nation,:Adresse,:Ville,:Telephone,:niveau,:filiere,:alias,:image,:mot_de_passe,:mat,:nom_tuteur,:telephone_tuteur,:email_tuteur)");
  $q->execute([
    'nom' => "$nom",
    'prenom' => "$prenom",
    'sexe' => "$sexe",
    'date_n' => "$date",
    'lieu_n' => "$lieu",
    'nation' => "$nation",
    'Adresse' => "$addresse",
    'Ville' => "$ville",
    'Telephone' => "$tele",
    'niveau' => "",
    'filiere' => "$filiere",
    'alias' => "$alias",
    'image' => "$image",
    'mot_de_passe' => "$password",
    'mat' => "$matricule",
    'nom_tuteur' => "$nom_t",
    'telephone_tuteur' => "$tel_t",
    'email_tuteur' => "$email_t"
  ]);

  // FINANCE ////////////////////////

  $q = $db->prepare("INSERT INTO finance (nom, prenom, alias, matricule, paie_total, deja_paye, reste_paye) VALUES (:nom,:prenom,:alias,:matricule,:paie_total,:deja_paye,:reste_paye)");
  $q->execute([
    'nom' => "$nom",
    'prenom' => "$prenom",
    'alias' => "$alias",
    'matricule' => "$matricule",
    'paie_total' => "$finance",
    'deja_paye' => "0",
    'reste_paye' => "$finance"
  ]);

  $q = $db->prepare("SELECT * FROM profils_etudiant ORDER BY id DESC LIMIT 0,1");
  $q->execute();
  while($dernier = $q->fetch()){
    $matricule_pri = $dernier;
    
  }
  }
}
    





$listes = null;
$etudiant_erreur = null;
if(isset($_POST['classe_detail'])){
  $demande = $_POST['nom_classe'];
  
  $q = $db->prepare("SELECT * FROM profils_etudiant WHERE alias = '$demande' ORDER BY nom ");
  $q->execute();
  while($demandes = $q->fetch()){
    $listes[] = $demandes;
   }
   if(empty($listes)){
      
    $etudiant_erreur = "true";
   }
   

}

$date_erreur = false;
if (isset($_POST['modifier_etudiant'])) {
if ((!empty($_POST['nom'])) && (!empty($_POST['alias'])) && (!empty($_POST['filiere'])) && ( !empty($_POST['date'])) && (!empty($_POST['password']))) {
  extract($_POST);

  $nom = strtoupper($nom);
  $nom = addslashes($nom);
  $prenom = strtoupper($prenom);
  $prenom = addslashes($prenom);
  $image = addslashes($image);
  $password = addslashes($password);
  $q = $db->prepare("UPDATE profils_etudiant SET nom ='$nom', prenom='$prenom', sexe='$sexe', date_n='$date', lieu_n='$lieu', nation='$nation', Adresse='$addresse', Ville='$ville', Telephone='$tele', niveau='', filiere='$filiere', alias='$alias', 
  mot_de_passe='$password', mat='$matricule', nom_tuteur='$nom_t', telephone_tuteur='$tel_t', email_tuteur='$email_t' WHERE mat='$matricule'");
    $q->execute();
    if(!empty($image)){
      $q = $db->prepare("UPDATE profils_etudiant SET image='$image' WHERE mat='$matricule'");
      $q->execute();
    }
    $q = $db->prepare("UPDATE finance SET nom='$nom', prenom='$prenom', alias='$alias', matricule='$matricule', paie_total='$finance' WHERE matricule='$matricule'");
  $q->execute();

header("Location:?detail=$matricule");
exit();


}

else{
 $date_erreur = true;
}


}



if (isset($_POST['modifier_photo'])) {
  extract($_POST);
  $image = addslashes($image);
  if(!empty($image)){
    $q = $db->prepare("UPDATE profils_etudiant SET image='$image' WHERE mat='$matricule'");
    $q->execute();
  }

}

if (isset($_POST['modifier_finance'])) {
  extract($_POST);
  $deja = (int)$paie + (int)$finance;
  $reste = (int)$total - (int)$deja;
    $q = $db->prepare("UPDATE finance SET deja_paye='$deja', reste_paye='$reste' WHERE matricule='$matricule'");
    $q->execute();
  }




/// PROFILS /////////////////////////

$profils = null;
if (isset($_GET['detail'])) {
  
  $matricule = $_GET['detail'];
  $q = $db->prepare("SELECT * FROM profils_etudiant WHERE mat = '$matricule' ");
  $q->execute();
  while($profil = $q->fetch()){
    $profils[] = $profil;
    
  }
$q = $db->prepare("SELECT * FROM finance WHERE matricule = '$matricule' ");
  $q->execute();
   while($finance = $q->fetch()){
    $total_paie = $finance['paie_total'];
    $paye_paie = $finance['deja_paye'];
    $reste_paie = $finance['reste_paye'];
  
  }

    /*NOTE ET MOYENNE*/
    $notes = null;
    $q = $db->prepare("SELECT * FROM note_devoir WHERE matricule = '$matricule' ");
    $q->execute();
     while($note=$q->fetch()){
      $notes[] = $note;
    }

    	//MOYENNE
	$moyennes_trouver = null;
	$q = $db->prepare("SELECT * FROM moyenne WHERE matricule = '$matricule' ORDER BY id DESC");
	$q->execute();
	while($moyenne = $q->fetch()){
		$moyennes_trouver[] = $moyenne;
		
	}


   // DIPLOME
   $q = $db->prepare("SELECT * FROM diplome WHERE matricule = '$matricule' " );
   $q->execute();
   while($pdf = $q->fetch()){
       $PDF[] = $pdf;
       
   }
  
}

// SUPPRESSION////////////////////////////////
////////////////////


if (isset($_POST['supprimer_compte'])) {
  extract($_POST);
  $q = $db->prepare("DELETE FROM profils_etudiant WHERE profils_etudiant . mat = $supprimer_compte");
    $q->execute();

    header("Location: ?Dashbord");

}


// FIN ETUDIANT CODE //////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////









// NOTE CODE /////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

 

// MOYENNE CODE //////////////////
// AFFICHAGE DES ETUDIANT///////////

$trimestre = null;
$liste_moyenne = null;
if(isset($_POST['ajoute_moyenne'])){
extract($_POST);
 $q = $db->prepare("SELECT * FROM profils_etudiant WHERE alias = '$alias' ");
 $q->execute();
 while($resultat = $q->fetch()){
   $liste_moyenne[] = $resultat;
  }
  $trimestre_post = $_POST['trimestre'];

    // $q = $db->prepare("SELECT * FROM note_devoir WHERE alias = '$alias' AND matiere = '$matiere'; ");
    // $q->execute();
    // while($resultat = $q->fetch()){
    //    $noms[] = $resultat;
      
     
    //  }
}


// ENREGISTREMENT DE LA MOYENNE ///////////////////////////
if (isset($_POST['moyenne_ok'])) {
  if (!empty($_POST['moyenne'])) {
   extract($_POST);
   $q = $db->prepare("INSERT INTO moyenne(nom, prenom, alias, trimestre, matricule, moyenne) VALUES(:nom,:prenom,:alias,:trimestre,:matricule,:moyenne)");
     $q->execute([
       'nom' => "$nom",
       'prenom' => "$prenom",
       'alias' => "$alias",
       'trimestre' => "$trimestre",
       'matricule' => "$matricule",
       'moyenne' => "$moyenne"
     ]);
  }
  
  $q = $db->prepare("SELECT * FROM profils_etudiant WHERE alias = '$alias' ");
 $q->execute();
 while($resultat = $q->fetch()){
   $liste_moyenne[] = $resultat;
  }
  $trimestre_post = $_POST['trimestre'];

       $q = $db->prepare("SELECT * FROM moyenne WHERE alias = '$alias' AND trimestre = '$trimestre' ");
   $q->execute();
   while($resultat = $q->fetch()){
      $noms_moyenne[] = $resultat;
        
   }
  
  }

  // MODE MOYENNE ///////////////////////////////
  //////////////////////////////////////

  $moyenne_modifier = null;
	if(isset($_POST['mod_moyenne'])){
		extract($_POST);
    $q = $db->prepare("SELECT * FROM moyenne WHERE alias = '$alias' AND trimestre = '$trimestre' ");
    $q->execute();
    while($resultat = $q->fetch()){
        $moyenne_modifier[] = $resultat;
        
   	}
}


if (isset($_POST['modifier_moyenne'])) {
	if (!empty($_POST['moyenne'])) {
		extract($_POST);
		$q = $db->prepare("UPDATE moyenne SET nom ='$nom', prenom ='$prenom', alias='$alias', matricule='$matricule', trimestre='$trimestre', moyenne='$moyenne'     WHERE id = $modifier_moyenne");
			$q->execute();

      $q = $db->prepare("SELECT * FROM moyenne WHERE alias = '$alias' AND trimestre = '$trimestre' ");
      $q->execute();
      while($resultat = $q->fetch()){
          $moyenne_modifier[] = $resultat;
          
       }
  
}
	
}


  // SUPPRESSION DE LA MOYENNE ///////////////////////////////////////
  $moyenne_supprime = null;
	if(isset($_POST['supprime_moyenne'])){
		extract($_POST);
    $q = $db->prepare("SELECT * FROM moyenne WHERE alias = '$alias' AND trimestre = '$trimestre' ");
    $q->execute();
    while($resultat = $q->fetch()){
        $moyenne_supprime[] = $resultat;
        
   	}
     $trimestre_supp = $_POST['trimestre'];
     $alias = $_POST['alias'];



}



if (isset($_POST['moyenne_supp'])) {
    extract($_POST);
    $matiere =addslashes($matiere);
     $q = $db->prepare(" DELETE FROM moyenne WHERE id = $moyenne_supp ");
     $q->execute();
  
     $q = $db->prepare("SELECT * FROM moyenne WHERE alias = '$alias' AND trimestre = '$trimestre' ");
    $q->execute();
    while($resultat = $q->fetch()){
      $moyenne_supprime[] = $resultat;
        
   	}
     $trimestre_supp  = $trimestre;
     $alias = $alias;

  }

  if (isset($_POST['moyenne_supp_tout'])) {
    extract($_POST);
     $q = $db->prepare(" DELETE FROM moyenne WHERE alias = '$alias' AND trimestre = '$trimestre' ");
     $q->execute();
  
  }





  // PDf CODE  //////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////

  $pdf = null;
  $service = null;
  $service_erreur = null;




  if (isset($_POST['ajoute_cours'])) {
    extract($_POST);
      $q = $db->prepare("INSERT INTO cours_pdf(cours, alias, file) VALUES(:cours,:alias,:file)");
        $q->execute([
          'cours' => "$cours",
          'alias' => "$alias",
          'file' => "$files"
        ]);
        $message_success = "Le cours à été ajouter avec successe !";
    
  }



  if(isset($_POST['mod_cours'])){
    extract($_POST);
    
    $q = $db->prepare("SELECT * FROM cours_pdf WHERE cours = '$cours' AND alias = '$alias' ");
    $q->execute();
    while($demandes = $q->fetch()){
      $service[] = $demandes;
    }
    if(empty($service)){
      
      $service_erreur = "true";
     }

  }

  
  if (isset($_POST['modifier_cours'])) {
	if ((!empty($_POST['cours'])) && (!empty($_POST['alias']))) {
		extract($_POST);
    $cours = addslashes($cours);
		$q = $db->prepare("UPDATE cours_pdf SET cours ='$cours', alias ='$alias', file='$files' WHERE id = $modifier_cours");
			$q->execute();

      $q = $db->prepare("SELECT * FROM cours_pdf WHERE cours = '$cours' AND alias = '$alias' ");
    $q->execute();
    while($demandes = $q->fetch()){
      $service[] = $demandes;
    }
    
}
	
}


$asupprime = null;
if(isset($_POST['supp_cours'])){
  extract($_POST);
  
  $q = $db->prepare("SELECT * FROM cours_pdf WHERE cours = '$cours' AND alias = '$alias' ");
  $q->execute();
  while($demandes = $q->fetch()){
    $asupprime[] = $demandes;
  }
  if(empty($asupprime)){
    
    $service_erreur = "true";
   }

}

if (isset($_POST['supprime_cours'])) {
		extract($_POST);
		$q = $db->prepare("DELETE FROM cours_pdf WHERE cours_pdf . id = $supprime_cours");
			$q->execute();

      $q = $db->prepare("SELECT * FROM cours_pdf WHERE cours = '$cours' AND alias = '$alias' ");
  $q->execute();
  while($demandes = $q->fetch()){
    $asupprime[] = $demandes;
  }

}






 
//Fin PDF CODE/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////


// NOTE CODE /////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

 


// AFFICHAGE DES ETUDIANT///////////
$etudiants = null;
$noms = null;
$matiere_note = null;
$mois_note = null;
$note_etudiant_erreur = null;
if(isset($_POST['note_ajoute'])){
extract($_POST);
 $q = $db->prepare("SELECT * FROM profils_etudiant WHERE alias = '$alias' ");
 $q->execute();
 while($resultat = $q->fetch()){
   $etudiants[] = $resultat;
  }
  $matiere_note = $_POST['matiere'];
  $mois_note = $_POST['mois'];

    // $q = $db->prepare("SELECT * FROM note_devoir WHERE alias = '$alias' AND matiere = '$matiere'; ");
    // $q->execute();
    // while($resultat = $q->fetch()){
    //    $noms[] = $resultat;
      
     
    //  }
     if(empty($etudiants)){
      
      $note_etudiant_erreur = "true";
     }


}



// ENREGISTREMENT DE LA NOTE ///////////////////////////
if (isset($_POST['note_ok'])) {
if (!empty($_POST['notes'])) {
 extract($_POST);
 $q = $db->prepare("INSERT INTO note_devoir(nom, prenom, alias, matiere, note, matricule, mois) VALUES(:nom,:prenom,:alias,:matiere,:note,:matricule,:mois)");
   $q->execute([
     'nom' => "$nom",
     'prenom' => "$prenom",
     'alias' => "$alias",
     'matiere' => "$matiere",
     'note' => "$notes",
     'matricule' => "$matricule",
     'mois' => "$mois"
   ]);
}

 $q = $db->prepare("SELECT * FROM profils_etudiant WHERE alias = '$alias' ");
  $q->execute();
 while($resultat = $q->fetch()){
  $etudiants[] = $resultat;
  }
     $q = $db->prepare("SELECT * FROM note_devoir WHERE alias = '$alias' AND matiere = '$matiere' AND mois = '$mois' ");
    $q->execute();
   while($resultat = $q->fetch()){
       $noms[] = $resultat;
      
  }

  $q = $db->prepare("SELECT * FROM note_devoir ORDER BY id DESC LIMIT 0,1 ");
    $q->execute();
   while($resultat = $q->fetch()){
    $mois_note = $resultat['mois'];
    $matiere_note = $resultat['matiere'];
  }

}



// MDODIFICATION ////////////////////////
/////////////////
$eudiant_mod = null;
if(isset($_POST['mod_note'])){
  extract($_POST);
  $q = $db->prepare("SELECT * FROM note_devoir WHERE alias = '$alias' AND matiere = '$matiere' AND mois = '$mois' ");
  $q->execute();
 while($resultat = $q->fetch()){
     $eudiant_mod[] = $resultat;
    
}

}

if (isset($_POST['modifier_note'])) {
	if (!empty($_POST['note'])) {
		extract($_POST);
		$q = $db->prepare("UPDATE note_devoir SET nom ='$nom', prenom ='$prenom', alias='$alias', matiere='$matiere', note='$note', matricule='$matricule', mois='$mois'     WHERE id = $modifier_note");
			$q->execute();

      $q = $db->prepare("SELECT * FROM note_devoir WHERE alias = '$alias' AND matiere = '$matiere' AND mois = '$mois' ");
      $q->execute();
     while($resultat = $q->fetch()){
         $eudiant_mod[] = $resultat;
        
    }
}
	
}
  

  






// SUPPRESSION DE LA NOTE ///////////////////////////////////////

$note_trouve = null;
$note_trouve_erreur = null;
	if(isset($_POST['note_supprime'])){
		extract($_POST);
    $matiere = addslashes($matiere);
    $q = $db->prepare("SELECT * FROM note_devoir WHERE alias = '$classe' AND matiere = '$matiere' AND mois = '$mois' ");
    $q->execute();
    while($resultat = $q->fetch()){
        $note_trouve[] = $resultat;
        
        
   	}
    
     if(empty($note_trouve)){
      
      $note_trouve_erreur = "true";
     }
      $matiere_note = $_POST['matiere'];
      $mois_note = $_POST['mois'];
}



if (isset($_POST['note_supp'])) {
    extract($_POST);
    $matiere =addslashes($matiere);
     $q = $db->prepare(" DELETE FROM note_devoir WHERE id = $note_supp ");
     $q->execute();
  
     $q = $db->prepare("SELECT * FROM note_devoir WHERE alias = '$alias' AND matiere = '$matiere' AND mois = '$mois'");
     $q->execute();

     while($resultat = $q->fetch()){
         $note_trouve[] = $resultat;
         
      }

      $matiere_note = $matiere;
      $mois_note = $mois;
      $alias = $alias;

  }


  if (isset($_POST['note_supp_tout'])) {
    extract($_POST);
     $q = $db->prepare(" DELETE FROM note_devoir WHERE alias = '$alias' AND matiere = '$matiere' AND mois = '$mois' ");
     $q->execute();
  
  }




  // DIPLOME CODE  //////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////

  $diplome_trouve = null;
  if (isset($_POST['ajoute_diplome'])) {
    extract($_POST);
    $q = $db->prepare("SELECT * FROM profils_etudiant WHERE alias = '$alias' ");
    $q->execute();

    while($resultat = $q->fetch()){
        $diplome_trouve[] = $resultat;
        
     }
  }


  if (isset($_POST['diplome_ok'])) {
    if (!empty($_POST['file'])) {
     extract($_POST);
     $q = $db->prepare("INSERT INTO diplome(nom, prenom, alias, matricule, file, type) VALUES(:nom,:prenom,:alias,:matricule,:file,:type)");
       $q->execute([
         'nom' => "$nom",
         'prenom' => "$prenom",
         'alias' => "$alias",
         'matricule' => "$matricule",
         'file' => "$file",
         'type' => "$type"
       ]);


       $q = $db->prepare("SELECT * FROM profils_etudiant WHERE alias = '$alias' ");
    $q->execute();

    while($resultat = $q->fetch()){
        $diplome_trouve[] = $resultat;
        
     }
    }
  }






  $diplome_modifi = null;
  if (isset($_POST['mod_diplome'])) {
    extract($_POST);
    $q = $db->prepare("SELECT * FROM diplome WHERE alias = '$alias' AND type = '$type' ");
    $q->execute();

    while($resultat = $q->fetch()){
        $diplome_modifi[] = $resultat;
        
     }
  }


  if (isset($_POST['diplome_modifier'])) {
    if (!empty($_POST['file'])) {
     extract($_POST);
     $q = $db->prepare("UPDATE diplome SET nom ='$nom', prenom ='$prenom', alias='$alias', matricule='$matricule', file='$file', type='$type' WHERE id = $diplome_modifier");
       $q->execute();


       $q = $db->prepare("SELECT * FROM diplome WHERE alias = '$alias' AND type = '$type' ");
       $q->execute();
   
       while($resultat = $q->fetch()){
           $diplome_modifi[] = $resultat;
           
        }
  }
}


$diplome_supp = null;
$alias_sup = null;
$type_sup = null;
if(isset($_POST['supp_diplome'])){
  extract($_POST);
  
  $q = $db->prepare("SELECT * FROM diplome WHERE alias = '$alias' AND type = '$type' ");
  $q->execute();
  while($demandes = $q->fetch()){
    $diplome_supp[] = $demandes;
   
  }
  $alias_sup = $alias;
  $type_sup = $type;
}

if (isset($_POST['supprime_diplome'])) {
		extract($_POST);
		$q = $db->prepare("DELETE FROM diplome WHERE diplome . id = $supprime_diplome");
			$q->execute();

      $q = $db->prepare("SELECT * FROM diplome WHERE alias = '$alias' AND type = '$type' ");
      $q->execute();
      while($demandes = $q->fetch()){
        $diplome_supp[] = $demandes;
      }
      $alias_sup = $alias;
      $type_sup = $type;

}


if (isset($_POST['diplome_supp_tout'])) {
  extract($_POST);
   $q = $db->prepare(" DELETE FROM diplome WHERE alias = '$alias' AND type = '$type' ");
   $q->execute();

}






 
//Fin DIPLOME CODE/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

$filieres = [
  "Assurances-Banque-Finance",
  "Comptabilité-Gestion financière",
  "Management et Gestion des Ressources Humaines",
  "Secrétariat de Direction",
  "Réseau Informatique",
  "Télécommunication",
  "Maintenance des ordinateurs",
  "Electricité industrielle",
  "Qualité-Hygiène-Sécurité-Environnement",
  "Marketing et Gestion commerciale",
  "Transport et logistique",
  "Commerce international & Transit",
  "Délégation médicale",
  "Vente en Pharmacie"
];

$Alias = [
  //Licence 1
  "ABF_1",
  "CGF_1",
  "MGRH_1",
  "SD_1",
  "RI_1",
  "Télécom_1",
  "MO_1",
  "EI_1",
  "QHSE_1",
  "MGC_1",
  "TL_1",
  "CIT_1",
  "DM_1",
  "VP_1",

  //Licence 2
  "ABF_2",
  "CGF_2",
  "MGRH_2",
  "SD_2",
  "RI_2",
  "Télécom_2",
  "MO_2",
  "EI_2",
  "QHSE_2",
  "MGC_2",
  "TL_2",
  "CIT_2",
  "DM_2",
  "VP_2",

  //Liencence 3
  "ABF_3",
  "CGF_3",
  "MGRH_3",
  "SD_3",
  "RI_3",
  "Télécom_3",
  "MO_3",
  "EI_3",
  "QHSE_3",
  "MGC_3",
  "TL_3",
  "CIT_3",
  "DM_3",
  "VP_3",
  "CP1"
];

foreach($Alias as $total){
  $nombre_classes++;
 }

// MOIS
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



 $cours = [
  "DIPLOME",
  "ATTESTATION",
  "BULLETIN"
];

$trimestres = [
  "1er Trimestre",
  "2eme Trimestre",
  "3eme Trimestre"
];

$tri = 0;

 
?>