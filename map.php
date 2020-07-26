<?php
const pageTitle = "";
require "./php-includes/header.inc.php";
?>
<!-- START - Header -->
<header class="page-header2">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-light page-font-big">LIVE DYNMAP</h1>
                <p class="page-font-small">REAL TIME SERVER MAP</p>
            </div>
        </div>
    </div>
</header>
<!-- END - Header -->

<!-- START - Map iFrame -->
<section class="section-text-page">
    <iframe src="http://play.danklands.com:8064" width="100%" height="1200">
        <p>Your browser does not support iframes.</p>
    </iframe>
</section>
<!-- END - Map iFrame -->
<?php
require "./php-includes/footer.inc.php";
?>