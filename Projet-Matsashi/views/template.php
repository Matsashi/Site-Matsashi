<!DOCTYPE html>
<html lang="fr" id="home">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Matsashi</title>
        <link href="<?=URL?>public/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=URL?>public/css/index.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="<?=URL?>public/images/LogoRedim.png">
    </head>
    <body>
        <nav>
            <header>
                <ul id="MenuHeader">
                    <li id="Twitch"><a href="https://www.twitch.tv/matsashi" target="_blank">Twitch</a></li>
                    <li id="bibliotheque"><a href="<?=URL?>bibliotheque">Bibliothèque</a></li>
                    <?php if($url[0]=="accueil" || $url[0]==""){
                        echo '<a href="'.URL.'accueil#home">';
                    }else{
                        echo '<a href="'.URL.'accueil">';
                    }?><li id="LogoPng"><img src="<?=URL?>public/images/LogoRedim.png"></li></a>
                    <li id="accueil"><a href="<?=URL?>accueil#bio-projets">Bio/projets</a></li>
                    <li id="contact"><a href="<?=URL?>contact">Contact</a></li>
                </ul>
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