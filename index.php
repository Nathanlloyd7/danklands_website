<?php
const pageTitle = "";
require "./php-includes/header.inc.php";
?>


<!-- START - Header -->
<header class="main-header">
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100 carousel-image" src="/images/arathi.png"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">MOB ARENAS</h3>
        <p>First text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">SKYBLOCK SURVIVAL</h3>
        <p>Third text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
      <img class="d-block w-100 carousel-image" src="/images/volcano.png"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">COMPLEX MAZES</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">WEEKLY EVENTS</h3>
        <p>Third text</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
    <!---<div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-light main-font-big"><span style="color:#BD2031">DANK</span><span style="color:#005CB4">LANDS</span></h1>
                <p class="main-font-small" id="server-ip">PLAY.DANKLANDS.COM</p>
                <div class="container server-status">
                    <div class="alert alert-success text-center button-glow text-uppercase server-ip-copy" role="alert">
                        <h4 class="alert-heading pulse animated serverIP">
                            Join <b><span server-ip="play.danklands.com"><i class="fas fa-spinner fa-spin"></i></span></b> players on the server!<br>
                            <small>(Click to copy ip server)</small>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div> --->
</header>
<!-- END - Header -->

<!-- START - Index info -->
<section class="main-session-info ">
    <div class="container" data-aos="fade-left">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color:#006295">Looking for your next venture?</h1>
                <h2 class="my-4">You've come to the right place!</h2>
                <p>
                    The Danklands is a gaming community with a drive for player care and a passion for making custom gameplay. Our Minecraft server is based around RPG PVE Survival, with many custom mobs, items, enchantments and more to sink your teeth into. Find your way through the labyrinth to become the most powerful players on the server. <br><br>
                    We at The Danklands are constantly evolving, learning, and developing to keep bringing fresh content and updates daily. With high quality plugins with amazing, round the clock, hard working staff there is sure to be a /sethome waiting for you here on our server.<br><br>
                    Come and check out our Discord: <a href="https://discord.danklands.com">discord.danklands.com</a><br>
                    Join the server directly: play.danklands.com
                </p>
            </div>
        </div>
    </div>
</section>
<!-- END - Session info -->
<script>
    var ip_copy_success_text = "The IP address has been copied!";
</script>
<?php
require "./php-includes/footer.inc.php";
?>