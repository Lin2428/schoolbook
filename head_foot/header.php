<?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'style.php'; ?>
<!doctype html>
<html lang="fr-CG">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8_general_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="icon" type="image/png" href="lo.png">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style type="text/css">
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