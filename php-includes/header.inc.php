<?php
$actualPageTitle = htmlentities((pageTitle === "" ? "" : (pageTitle . " - ")) . "The Danklands - Minecraft RPG Survival", ENT_HTML5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $actualPageTitle; ?></title> <!-- Meta tags (SEO) -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="minecraft,mc,servers,minigames,survival,danklands,the danklands,dank,lands">
    <meta name="description" content="The Danklands - Minecraft RPG Survival">
    <meta name="subject" content="Minecraft RPG Survival Server.">
    <meta name="copyright" content="The Danklands">
    <meta name="language" content="EN">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Niall 'Shadow' Bainbridge">
    <meta name="designer" content="Niall 'Shadow' Bainbridge">
    <meta name="reply-to" content="thedanklands@gmail.com">
    <meta name="owner" content="Niall 'Shadow' Bainbridge">
    <meta name="url" content="https://danklands.com">
    <meta name="identifier-URL" content="https://danklands.com">
    <meta name="directory" content="submission">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- Open Graph Cards -->
    <meta property="og:title" content="<?= $actualPageTitle; ?>">
    <meta property="og:description" content="The Danklands - Minecraft RPG Survival">
    <meta property="og:image" content="/images/favicons/seo-large.png">
    <meta property="og:image:width" content="192">
    <meta property="og:image:height" content="192">
    <meta property="og:url" content="https://www.danklands.com/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="THE DANKLANDS">

    <!-- Twitter Cards -->
    <meta name="twitter:title" content="<?= $actualPageTitle; ?>">
    <meta name="twitter:description" content="The Danklands - Minecraft RPG Survival">
    <meta name="twitter:image" content="/images/favicons/seo-large.png">
    <meta name="twitter:card" content="summary">
    <link rel="icon" href="images/icon.png">

    <!-- Extra Stuff -->
    <link rel="apple-touch-icon" type="image/png" href="/images/favicons/seo-large.png">
    <link rel="apple-touch-icon" type="image/png" sizes="72x72" href="/images/favicons/seo-large.png">
    <link rel="apple-touch-icon" type="image/png" sizes="114x114" href="/images/favicons/seo-large.png">
    <link rel="icon" type="image/png" href="/images/favicons/seo-large.png">
    <!-- Stylesheets (CSS), Fonts & Icons -->

    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">

    <link rel="stylesheet" href="css/style.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="css/all.css">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="core/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="core/style.css">

    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">


        <script src="core/cookies/cookieconsent.min.js"></script>
        <script>
            window.addEventListener("load", function(){
                window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#4CAF50",
                        "text": "#fff"
                    },
                    "button": {
                        "background": "#fff",
                        "text": "#4CAF50"
                    }
                },
                "theme": "classic",
                "content": {
                    "message": "Hey, our site uses cookies to personalise content and ads, to provide social media features and to analyse our traffic.",
                    "dismiss": "All right!",
                    "link": "Learn more about cookies <i class='fas fa-external-link-alt fa-xs'></i>",
                    "href": "https://www.cookiesandyou.com/"
                }
                })
            });
        </script>
</head>

<body>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- START - Navigation & Menu -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="/images/danklands_logo.png" width="35" height="35"> THE DANKLANDS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> HOME</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bolt" aria-hidden="true"></i></i> FEATURES
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="map.php"><i class="fas fa-map-pin"></i> LIVE MAP</a>
                            <a class="dropdown-item" href="mazes.php"><i class="fas fa-dizzy"></i></i></i> MAZES</a>
                            <a class="dropdown-item" href="arenas.php"><i class="fas fa-icicles"></i></i> MOB ARENAS</a>
                            <a class="dropdown-item" href="features.php"><i class="fas fa-terminal"></i></i> PLUGINS</a>
                        </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-question-circle" aria-hidden="true"></i></i> INFO
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="rules.php"><i class="fas fa-pen"></i> RULES</a>
                            <a class="dropdown-item" href="vote.php"><i class="fas fa-check-circle"></i> VOTE</a>
                            <a class="dropdown-item" href="staff.php"><i class="fas fa-building"></i> STAFF</a>
                            <a class="dropdown-item" href="https://danklands.com/bans"><i class="fas fa-gavel"></i> BANS</a>
                            <a class="dropdown-item" href="https://discord.danklands.com"><i class="fab fa-discord"></i> DISCORD</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://store.danklands.com"><i class="fas fa-store-alt"></i></i> WEBSTORE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.patreon.com/thedanklands"><i class="fas fa-store"></i> DONATE</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="https://discord.danklands.com"><i class="fab fa-discord"></i> DISCORD</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END - Navigation & Menu -->