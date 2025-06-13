/120/T<?php
        define("TITLE", "Shemales uit");

  include('includes/arr_prov_at.php');

        function strip_bad_chars( $input ) {
                $output = preg_replace("/[^a-zA-Z0-9_-]/", "",$input);
                return $output;
        }

        $provat = null;
        if(isset($_GET['item'])) {
                $provincie = strip_bad_chars( $_GET['item'] );
                $provincie = preg_replace('/^shemale-/', '', $provincie);
                if (isset($at[$provincie])) {
                        $provat = $at[$provincie];
                }
        }

        if (!$provat) {
                header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
                include '404.php';
                exit;
        }

  $metaDescription = $provat['info'];
  include('includes/header.php');
?>

<div class="container">
        <div class="jumbotron my-4">
        <h1 class="text-center"><?php echo $provat['title']; ?></h1>
        <hr>
        <p><?php echo $provat['info']; ?></p>
    </div>
    <div class="row" v-cloak>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item" id="Slankie" v-for="profile in filtered_profiles">
        <div class="card h-100">
            <a :href="'shemale-' + profile.slug + '?id=' + profile.id"><img class="card-img-top" :src="profile.src.replace('150x150', '300x300')" :alt="profile.name" @error="imgError"></a>
            <div class="card-body">
                <div class="card-top">
                  <h4 class="card-title">{{ profile.name }}</h4>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Leeftijd: {{ profile.age }}</li>
                    <li class="list-group-item">Relatie: {{ profile.relationship }}</li>
                    <li class="list-group-item">Stad: {{ profile.city }}</li>
                    <li class="list-group-item">Regio: {{ profile.province }}</li>
                </ul>
            </div>
            <a :href="'shemale-' + profile.slug + '?id=' + profile.id" class="card-footer btn btn-primary">Bekijk profiel</a></div>
        </div>  
    </div><!-- /.row -->
    <script>
        var api_url= "<?= api_base('at'); ?>/profile/province_age/at/<?= rawurlencode($provat['name']); ?>/120/T";
    </script>

    <!-- Pagination -->
    <nav class="nav-pag" aria-label="Page navigation">
        <ul class="pagination flex-wrap justify-content-center">
            <li class="page-item">
                <a class="page-link" aria-label="Vorige" v-on:click="set_page_number(page-1)" ><span aria-hidden="true">&laquo;</span><span class="sr-only">Vorige</span></a>
            </li>
            <li v-for="page_number in max_page_number"  class="page-item" v-bind:class="{ active: page_number == page }" >
                <a class="page-link" v-on:click="set_page_number(page_number)">{{ page_number }}</a>
            </li>
            <li class="page-item">
                <a class="page-link" aria-label="Volgende" v-on:click="set_page_number(page+1)" ><span aria-hidden="true">&raquo;</span><span class="sr-only">Volgende</span></a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div id="footer-banner"></div>
        <div class="jumbotron">
            <?php echo $provat['tekst']; ?>
        </div>
        <div class="jumbotron text-center">
            <a href="https://sex55.net/sexdate-<?php echo $provat['img']; ?>" class="btn btn-primary btn-tips" target="_blank">55+ Sexdate <?php echo $provat['name']; ?></a>
            <a href="https://18date.net/sexdate-<?php echo $provat['img']; ?>" class="btn btn-primary btn-tips" target="_blank">18+ Sexdate <?php echo $provat['name']; ?></a>
        </div>
    </div>
  </div> <!-- container -->
<?php
        include('includes/footer.php');
?>
