
<!-- Contact -->
<div class="contacter_nous">
<section class="con">
<div class="container" id="contact">
 
 <br>
 
      <div class="" >
        <br><br>
        <h4 class="text-center">Contactez-nous</h4>
        <br><br><br>
        <div class="cont"><br>
          <div class="row">
            <div class="col-sm-12 col-md-6">
             <div class="gps">
             <div class="ligne">
              <p><span class="fas fa-map-marker-alt"> </span>
              
              <span>Rue Vouala N°270, derrière l'angence MTN-PLATEAU des 15ans</span></p>

                <p><span class="fa fa-phone-alt"> </span>
              <span>+242 06 459 99 91 /+242 06 460 00 56</span></p>
      
               <p> <span class="fa fa-envelope"> </span>
                <span>igtformations@gmail.com</span></p>
             
              
              </div>
            <br></div>
          </div>


          <div class="col-sm-12 col-md-6">
            <div class="send">
              <h4 class="text-success">Laissez nous un messsage</h4>
              <p>Si vous avez une préoccuption ou un problème d'inscription, nous vous prions de nous laisser un message.</p><br>

              <form method="POST" action="">
                <div class="form">
                  <input type="text" name="name" placeholder="Entrez votre noms" id="name" required class="form-control"><br>
                  <input type="email" name="email" placeholder="Entrez votre email" id="email" 
                   class="form-control"><br>

                   <input type="number" name="tel" placeholder="Entrez votre Tél" id="email" required class="form-control"><br>
                  <textarea placeholder="message" name="messsages" id="message" class="form-control"></textarea>
                  <button type="submit"  id="submit" name="submitmessage"><i>Envoyer</i></button>
                </div>
              </form>
            </div><br>
          </div>
        </div>
      </div>

    </div>
  <br><br>

</div>
</section>
</div>

<?php 
global $db;
  if(isset($_POST['submitmessage'])){
    extract($_POST);

              $q = $db->prepare("INSERT INTO message(noms, email, tel, message) VALUES(:noms,:email,:tel,:message)");

        $q->execute([
          'noms' => $name, 
          'email' => $email,
          'tel' => $tel,
          'message' => $messsages
        ]);
        }
 ?>
 <?php if(isset($_POST['submitmessage'])) : ?>
 <script>
    alert("Votre message à été réçu avec succès. Nous vous rémercions pour votre prise de contact")
  </script>
  <?php endif?>