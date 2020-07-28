<?php
const pageTitle = "";
require "./php-includes/header.inc.php";
?>

<!-- START - Header -->
<header class="page-header">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-light page-font-big">SERVER GUIDE</h1>
                <p class="page-font-small">YOUR FIRST NIGHTS + HELP</p>
            </div>
        </div>
    </div>
</header>
<!-- END - Header -->

<!-- START - Guide info -->
<section class="section-text-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-green">NEW TO THE SERVER? FEELING A LITTLE LOST?!</h2>
                <p>Below you will find a helpful guide on how to get started in the Server.</p>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <b>Getting off the ground...</b>
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        Your first couple of nights in The Danklands can be hellish. It's best to be prepared from the get-go. There are some useful <span class="text-green">/kits</span> to help you survive your first nights.<br><br>
                        You'll want to start earning money right away. There are multiple ways to make money. Use <span class="text-green">/jobs browse</span> to search for jobs you'd like to work. At rank I you can only have 3 jobs at once (this increases with rank)<br><br>
                        You can also use <span class="text-green">/fish menu</span> to get an idea of the unique fish you can catch, gut, sell and more for a quick cash boost.<br><br>
                        There are many <span class="text-green">/quests</span> to also help you on your journey to become the most mighty in the server, these quests will give you both money and experience for completeing them.<br><br>
                        If you find yourself with spare or valueable items/ores you can use the <span class="text-green">/shop</span> to sell most in-game items. You can also use the shop to buy many items to aid you instantly from anywhere! </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <b>Growing strong!<b>
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        COMING SOON!
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <b>Becoming a baron!</b>
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        COMING SOON!
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-- END - Session info -->
<?php
require "./php-includes/footer.inc.php";
?>