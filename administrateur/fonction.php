
  <?php 
  $active1 = null;
  $active2 = null;
  $active3 = null;
  $active4 = null;
  $active5 = null;

if($demande === "information"){
      $active1 = "active";
     }

     if($demande === "message"){
      $active2 = "active";
     }

     if($emploie){
      $active3 = "active";
     }

     if((isset($_GET['etudiant']))){
      $active4 = "active";
     }

      if($demande === "cours_pdf"){
      $active5 = "active";
     }

     ?>
