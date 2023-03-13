<?php 
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'database.php';
$title = 'Message';
if(isset($_POST['submitmessage'])){
  extract($_POST);

            $q = $db->prepare("INSERT INTO message(noms, email, tel, message) VALUES(:noms,:email,:tel,:message)");

      $q->execute([
        'noms' => $name, 
        'email' => "",
        'tel' => $tel,
        'message' => $messsages
      ]);
      }
  require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'head_foot' . DIRECTORY_SEPARATOR . 'header.php';
 ?>


<br>
<div class="container">
<div class="send">
              <h4 class="text-success">Laissez nous un messsage</h4>
              <p>Si vous avez une préoccuption ou un problème d'inscription, nous vous prions de nous laisser un message.</p><br>

              <form method="POST" action="">
                <div class="form">
                  <input type="text" name="name" placeholder="Entrez votre noms" id="name" required class="form-control"><br>

                   <input type="number" name="tel" placeholder="Entrez votre Tél" id="email" required class="form-control"><br>
                  <textarea placeholder="message" name="messsages" id="message" class="form-control"></textarea>
                  <button type="submit"  id="submit" name="submitmessage"><i>Envoyer</i></button>
                </div>
              </form>
            </div><br>
          </div>
</div>

<?php if(isset($_POST['submitmessage'])) : ?>
 <script>
    alert("Votre message à été réçu avec succès. Nous vous rémercions pour votre prise de contact")
  </script>
  <?php endif?>
  <?php require '../head_foot/footer.php' ?>