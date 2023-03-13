<br>


<div class="container">
        <div class="card" id="card">
        <div class="note"><h6 class="text-center">COURS ELECTRONIQUES</h6></div>
            <table class="table table-bordered">
  <tbody>
  <?php if ($PDF) :?>
        <?php foreach ($PDF as $Pdf): ?>
          <?php extract($Pdf) ?>
        <tr>
        <th><?= $cours ?>
        <th scope="row"><a href="<?= $file ?>" target="blank"> <span class="btn btn-primary"><span class="fa fa-download"></span></span></a></th>
      </tr>
      <?php endforeach ?>
    <?php endif ?>
    
  </tbody>
</table>
    </div>
    </div>
</div>
