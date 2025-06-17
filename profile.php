<?php
	define("TITLE", "Shemale");
  include('includes/header.php');
?>
<!-- Page Content -->
    <div class="container" id="profiel">
      <div id="top-banner"></div>
      <div class="jumbotron my-4">
        <h1 class="text-center">Shemale {{ profile.name }} uit {{ profile.city }}</h1>
        <hr>
        <div class="row">

          <div class="col-sm-4 text-center">
            <img class="profile-pic" :src="profile.profile_image_big" @error="imgError">
          </div>

          <div class="col-sm-8">
            <h4>Over {{ profile.name }}:</h4>
            <p>{{ profile.aboutme }}</p>
            <h4>Persoonlijke informatie:</h4>
            <p class="">
              <label class="info">Provincie:</label> {{ profile.province }}<br>
              <label class="info">Stad:</label> {{ profile.city }}<br>
              <label class="info">Leeftijd:</label> {{ profile.age }}<br>
              <label class="info">Relatiestatus:</label> {{ profile.relationship }}<br>
              <label class="info">Lengte:</label> {{ profile.length }}<br>
              <a :href="profile.url + '?ref=' + ref_id" class="btn btn-primary mt-1" id="send-msg-btn">Stuur gratis bericht</a>
            </p>
          </div>  
        </div>
      </div><!-- /.row -->
      <div id="footer-banner"></div>
    </div><!-- Container -->

<?php
  $country = isset($_GET['country']) ? $_GET['country'] : '';
  switch ($country) {
    case 'nl':
      $api_url = api_base('nl') . '/profile/get0/6/';
      $ref_id = '32';
      break;
    case 'be':
      $api_url = api_base('be') . '/profile/get0/7/';
      $ref_id = '32';
      break;
    case 'de':
    case 'at':
    case 'ch':
      $api_url = api_base('de') . '/profile/get/';
      $ref_id = '32';
      break;
    case 'uk':
      $api_url = api_base('uk') . '/profile/get/';
      $ref_id = '32';
      break;
    default:
      $api_url = api_base() . '/profile/get/';
      $ref_id = '32';
  }
?>
<script>
  var api_url = "<?= $api_url ?>";
  var ref_id = "<?= $ref_id ?>"; //de ref_id vd landingwebsite
</script>

<?php 
  $type = "profile";
  include('includes/footer.php'); 
?>
