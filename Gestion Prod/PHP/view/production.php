<?php

  $prod = ProductionManager::findById($_GET['id']);

 ?>

<div id="production">

  <section id="productionInfo">
      <p>Production lancée par <?php echo UtilisateurManager::findById($prod->getIdUtilisateur())->getPseudoUtilisateur();?></p>
      <p>Production de XX Pièces de </p>
      <p>Ordre de fabrication: XXXXXXX</p>

      <p>Date/Heure Début: jj/mm/aaaa à hh:mm:ss</p>
      <p>Durée: hh:mm:ss</p>

      <a class="button" href="">Fin de production</a>
  </section>

  <section id="productionScanListe">

      <p>Production en cours:<span id=#prodCount>10/22 Pièces</span></p>

      <div id="listProd">
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
          <div class="ligne">
              <div class="bloc">Date</div>
              <div class="bloc">Heure</div>
              <div class="bloc">Lot ID</div>
          </div>
      </div>
  </section>

</div>
