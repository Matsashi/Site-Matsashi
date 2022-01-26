<?php ob_start();?>
<!DOCTYPE html>
<html lang="fr" id="home">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Matsashi</title>
        <link href="<?=URL?>public/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
        <link href="<?=URL?>public/css/index.css" rel="stylesheet">
        <link rel="icon" href="<?=URL?>public/images/LogoRedim.png">
    </head>
    <body>
        <nav>
            <header>
                <ul id="MenuHeader">
                    <li id="Twitch">
                        <a href="https://www.twitch.tv/matsashi" target="_blank">
                            <p class="accueil-pc">Twitch</p>
                            <i class="fab fa-twitch accueil-mobile"></i>
                        </a>
                    </li>
                    <li id="bibliotheque">
                        <a href="<?=URL?>bibliotheque">
                            <p class="accueil-pc">Bibliothèque</p>
                            <i class="fas fa-book-open accueil-mobile"></i>
                        </a>
                    </li>
                    <?php if($url[0]=="accueil" || $url[0]==""){
                        echo '<a href="'.URL.'accueil#home">';
                    }else{
                        echo '<a href="'.URL.'accueil">';
                    }?><li id="LogoPng"><img src="<?=URL?>public/images/LogoRedim.png"></li></a>
                    <li id="accueil">
                        <a href="<?=URL?>accueil#bio-projets">
                            <p class="accueil-pc">Bio/projets</p>
                            <i class="fas fa-id-card accueil-mobile"></i>
                        </a>
                    </li>
                    <li id="contact">
                        <a href="<?=URL?>contact">
                            <p class="accueil-pc">Contact</p>
                            <i class="fas fa-envelope accueil-mobile"></i>
                        </a>
                    </li>
                </ul>
                <?php 
                    if(isset($_COOKIE["pseudo"])){
                        echo "<ul id='login'><li>Bonjour " . $_COOKIE["pseudo"] . "</li>";
                        echo "<li id='disconnect'><a href='". URL . "admin/disconnect'>Déconnexion</a></ul>";
                    }
                ?>
            </header>
        </nav>        
        <div id="container-content">
            <?= $content ?>
        </div>
        <div hidden id="urlPhp"><?php echo json_encode($url[0]); ?></div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="<?=URL?>public/js/active_link.js"></script>
    </body>
</html>