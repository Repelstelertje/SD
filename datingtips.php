<?php 
$base = __DIR__;
	define("TITLE", "Datingtips");

        include $base . '/includes/array_tips.php';

        require_once $base . '/includes/utils.php';
	
        $datingtip = 'datingtips';
        if(isset($_GET['item'])) {
                $candidate = strip_bad_chars($_GET['item']);
                if (isset($datingtips[$candidate])) {
                        $datingtip = $candidate;
                }
        }
        $tips = $datingtips[$datingtip] ?? null;

        if (!$tips) {
                header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
                include $base . '/404.php';
                exit;
        }

        $metaDescription = $tips['info'];

        // Map query values to their corresponding slug for the canonical URL
        $slugMap = array(
            'datingtips' => 'datingtips',
            'nl' => 'datingtips-nederland',
            'be' => 'datingtips-belgie',
            'de' => 'datingtips-duitsland',
            'uk' => 'datingtips-verenigd-koninkrijk',
            'at' => 'datingtips-oostenrijk',
            'ch' => 'datingtips-zwitserland'
        );

        $slug = $slugMap[$datingtip] ?? 'datingtips';
        $canonical = 'https://shemaledaten.net/' . $slug;
        $pageTitle = $tips['title'];

        include $base . '/includes/header.php';
?>

<div class="container">
        <div class='jumbotron my-4'>
                <h1 class='text-center'><?php echo htmlspecialchars($tips["title"], ENT_QUOTES, 'UTF-8'); ?></h1>
        </div>
        <div class='jumbotron my-4'>
                <?php
                        // $tips["tekst"] contains trusted HTML defined in includes/array_tips.php
                        // and is therefore output without additional escaping.
                        echo $tips["tekst"];
                ?>
        </div>
</div>

<?php include $base . '/includes/footer.php'; ?>
