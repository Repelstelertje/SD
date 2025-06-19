<?php
$base = __DIR__;
	define("TITLE", "Home");
  include $base . '/includes/arr_prov_nl.php';
  include $base . '/includes/arr_prov_be.php';
  include $base . '/includes/arr_prov_uk.php';
  include $base . '/includes/arr_prov_de.php';
  include $base . '/includes/arr_prov_at.php';
  include $base . '/includes/arr_prov_ch.php';
  include $base . '/includes/array_tips.php';
  include $base . '/includes/header.php';
?>

<div class="container">
	<!-- Jumbotron Header -->
	<div class="jumbotron my-4 text-center">
  	<h1>Shemale Daten - Shemales zoeken Man</h1>
    <hr>
    <h2>Shemale dating bij jou in buurt!</h2>
    <div class="button-area">
      <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nederland</a>
      <div class="dropdown-menu" aria-labelledby="provDropdown">
        <?php
          foreach ($navItemsNL as $item) {
              echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
          }
        ?>
      </div>
    </div>
    <div class="button-area">
      <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">België</a>
      <div class="dropdown-menu" aria-labelledby="provDropdown">
        <?php
          foreach ($navItemsBE as $item) {
              echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
          }
        ?>
      </div>
    </div>
    <div class="button-area">
      <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UK</a>
      <div class="dropdown-menu" aria-labelledby="provDropdown">
        <?php
          foreach ($navItemsUK as $item) {
              echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
          }
        ?>
      </div>
    </div>
    <div class="button-area">
      <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Duitsland</a>
      <div class="dropdown-menu" aria-labelledby="provDropdown">
        <?php
          foreach ($navItemsDE as $item) {
              echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
          }
        ?>
      </div>
    </div>
    <div class="button-area">
      <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oostenrijk</a>
      <div class="dropdown-menu" aria-labelledby="provDropdown">
        <?php
          foreach ($navItemsAT as $item) {
              echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
          }
        ?>
      </div>
    </div>
    <div class="button-area">
      <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zwitserland</a>
      <div class="dropdown-menu" aria-labelledby="provDropdown">
        <?php
          foreach ($navItemsCH as $item) {
              echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
          }
        ?>
      </div>
    </div>
    <p>Shemale Daten is de plek om snel in contact te komen met transgenders in Nederland en België. Shemale sex snel en gratis! Hier kun je op zoek naar een avontuurlijke shemale met een lekkere tranny, zonder dat je er heel erg lang naar moet zoeken. Op deze website hebben wij de focus gelegd op shemale dating, er is namelijk heel erg veel vraag naar shemale contact. Het is ook heel moeilijk om zo iemand op andere datingsites te vinden. Hier is dat geen probleem, want op deze website tref je alleen maar mooie transgenders aan die graag een online afspraakje met jou willen maken.</p>
    <h2>Shemale sex</h2>
    <p>Hier staan alle transgenders die op zoek zijn naar een shemale en het liefst zo snel mogelijk. Van Amsterdam tot Brussel overal kan jij op zoek gaan naar een tranny bij jou in de omgeving. Shemale dating begint bij ShameleDaten.net waar het grootste aanbod van shemale contact advertenties samenkomt. Wil jij een shemale neuken? Klik jouw provincie aan en ga op zoek naar jouw toekomstige sexafspraakje!</p>
  </div>
  <div id="top-banner"></div>
  <h2 class="jumbotron text-center" id="nederland">Shemales Nederland</h2>
  <div class="row text-center" id="keuze">
    <?php 
                              foreach ($nl as $provnl => $item) {
                                  $slug = ($provnl === 'limburg') ? 'shemale-limburg-nl' : 'shemale-' . $provnl;
                      ?>
                      <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100 text-left">
              <a href="<?php echo $slug; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpeg" alt="Shemale <?php echo $item['name']; ?>" @error="imgError"></a>
              <div class="card-body">
                <a href="<?php echo $slug; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
                <hr>
                <p class="card-text"><?php echo $item['info']; ?></p>
              </div>
              <a href="<?php echo $slug; ?>" class="card-footer btn btn-primary">Shemale <?php echo $item['name']; ?></a>
            </div>
          </div>
    <?php
      }
    ?>
  </div>

  <h2 class="jumbotron text-center" id="belgie">Shemales België</h2>
  <div class="row text-center" id="keuze">
    <?php
      foreach ($be as $provbe => $item) {
          $slug = ($provbe === 'limburg') ? 'shemale-limburg-be' : 'shemale-' . $provbe;
    ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100 text-left">
        <a href="<?php echo $slug; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpeg" alt="Shemale <?php echo $item['name']; ?>" @error="imgError"></a>
        <div class="card-body">
          <a href="<?php echo $slug; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
          <hr>
          <p class="card-text"><?php echo $item['info']; ?></p>
        </div>
        <a href="<?php echo $slug; ?>" class="card-footer btn btn-primary">Shemale <?php echo $item['name']; ?></a>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
  <h2 class="jumbotron text-center" id="uk">Shemales United Kingdom</h2>
  <div class="row text-center" id="keuze">
    <?php foreach ($uk as $provuk => $item) { ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100 text-left">
        <a href="shemale-<?php echo $provuk; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpeg" alt="Shemale <?php echo $item['name']; ?>" @error="imgError"></a>
        <div class="card-body">
          <a href="shemale-<?php echo $provuk; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
          <hr>
          <p class="card-text"><?php echo $item['info']; ?></p>
        </div>
        <a href="shemale-<?php echo $provuk; ?>" class="card-footer btn btn-primary">Shemale <?php echo $item['name']; ?></a>
      </div>
    </div>
    <?php } ?>
  </div>
  <h2 class="jumbotron text-center" id="duitsland">Shemales Duitsland</h2>
  <div class="row text-center" id="keuze">
    <?php foreach ($de as $provde => $item) { ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100 text-left">
        <a href="shemale-<?php echo $provde; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpeg" alt="Shemale <?php echo $item['name']; ?>" @error="imgError"></a>
        <div class="card-body">
          <a href="shemale-<?php echo $provde; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
          <hr>
          <p class="card-text"><?php echo $item['info']; ?></p>
        </div>
        <a href="shemale-<?php echo $provde; ?>" class="card-footer btn btn-primary">Shemale <?php echo $item['name']; ?></a>
      </div>
    </div>
    <?php } ?>
  </div>
  <h2 class="jumbotron text-center" id="oostenrijk">Shemales Oostenrijk</h2>
  <div class="row text-center" id="keuze">
    <?php foreach ($at as $provat => $item) { ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100 text-left">
        <a href="shemale-<?php echo $provat; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpeg" alt="Shemale <?php echo $item['name']; ?>" @error="imgError"></a>
        <div class="card-body">
          <a href="shemale-<?php echo $provat; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
          <hr>
          <p class="card-text"><?php echo $item['info']; ?></p>
        </div>
        <a href="shemale-<?php echo $provat; ?>" class="card-footer btn btn-primary">Shemale <?php echo $item['name']; ?></a>
      </div>
    </div>
    <?php } ?>
  </div>
  <h2 class="jumbotron text-center" id="zwitserland">Shemales Zwitserland</h2>
  <div class="row text-center" id="keuze">
    <?php foreach ($ch as $provch => $item) { ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100 text-left">
        <a href="shemale-<?php echo $provch; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpeg" alt="Shemale <?php echo $item['name']; ?>" @error="imgError"></a>
        <div class="card-body">
          <a href="shemale-<?php echo $provch; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
          <hr>
          <p class="card-text"><?php echo $item['info']; ?></p>
        </div>
        <a href="shemale-<?php echo $provch; ?>" class="card-footer btn btn-primary">Shemale <?php echo $item['name']; ?></a>
      </div>
    </div>
    <?php } ?>
  </div>
  <div id="footer-banner"></div>
  <div class="jumbotron text-center">
    <h6>Nederland</h6>
    <a href="https://transgrinder.nl" target="_blank" class="m-0" title="TransGrinder.nl - Verbind met Trans Contacten in Nederland!">Transgrinder</a> - 
    <a href="https://shemalezoekt.com" target="_blank" class="m-0" title="ShemaleZoekt.com - Shemales Zoeken Contact in Nederland!">Shemale Zoekt</a> - 
    <a href="https://trannymarkt.com" target="_blank" class="m-0" title="TrannyMarkt.com - Markt voor Shemale Contacten in Nederland!">Tranny Markt</a> - 
    <a href="https://shemalecontacten.com" target="_blank" class="m-0" title="ShemaleContacten.com - Shemale Contact Vinden in Nederland!">Shemale Contacten</a>
    <hr>
    <h6>België</h6>
    <a href="https://transgrinder.be" target="_blank" class="m-0" title="TransGrinder.be - Trans Contacten Vinden in België!">Transgrinder</a> - 
    <a href="https://trannyzoekt.com" target="_blank" class="m-0" title="TrannyZoekt.com - Shemales Zoeken Contact in België!">Tranny Zoekt</a> - 
    <a href="https://shemalemarkt.com" target="_blank" class="m-0" title="ShemaleMarkt.com - Markt voor Shemale Contacten in België!">Shemale Markt</a> - 
    <a href="https://trannycontacten.com" target="_blank" class="m-0" title="Trannycontacten.com - Shemale Contacten Ontdekken in België!">Tranny Contacten</a>
    <hr>
    <h6>United Kingdom</h6>
    <a href="https://myshemalecontact.com" target="_blank" class="m-0" title="MySheMaleContact.com - Connect with Shemale Singles, Today!">MySheMaleContact</a> - 
    <a href="https://contactshemale.com" target="_blank" class="m-0" title="ContactShemale.com - Connect with Transgenders in Your Area!">ContactShemale</a> - 
    <a href="https://matchshemale.com" target="_blank" class="m-0" title="MatchShemale.com - Match and Discover Shemales Near You!">MatchShemale</a> - 
    <a href="https://eroticshemales.com" target="_blank" class="m-0" title="EroticShemales.com - Explore Shemale Contacts in the UK!">EroticShemales</a>
    <hr>
    <h6>Deutschland</h6>
    <a href="https://meintranskontakt.com" target="_blank" class="m-0" title="Meintranskontakt.com - Transkontakte in Deutschland finden">Meintranskontakt</a> - 
    <a href="https://trannytreffen.com" target="_blank" class="m-0" title="Trannytreffen - Finde Trans-Kontakte in Ihrer Nähe heute!">Trannytreffen</a> - 
    <a href="https://transgenderkontakt.com" target="_blank" class="m-0" title="Transgenderkontakt - Finde lokale Trans in Deiner Nähe!">Transgenderkontakt</a> - 
    <a href="https://lokalshemale.com" target="_blank" class="m-0" title="Lokalshemale.com - Diskret Shemale Kontakt in Deiner Nähe">Lokalshemale</a>
  </div>
</div><!-- container -->
<?php include $base . '/includes/footer.php'; ?>
