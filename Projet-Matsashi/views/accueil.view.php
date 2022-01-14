<?php ob_start();?>
<section id="stream-accueil">
    <div id="stream-windows">
        <div class="first-element">
            <script src= "https://player.twitch.tv/js/embed/v1.js"></script>
            <div id="twitch-embed"></div>
            <script type="text/javascript">
                new Twitch.Embed("twitch-embed",
                {
                width: 1621,
                height: 750,
                channel: "matsashi",
                muted: "true",
                layout: "video-with-chat",
                theme: "dark",
                });
            </script>
            <!-- <iframe 
                src="https://player.twitch.tv/?channel=matsashi&parent=localhost"
                frameborder="0"
                allowfullscreen="true"
                scrolling="no"
                height="500"
                width="838">
            </iframe>
            <iframe
                id="chat_embed"
                src="https://www.twitch.tv/embed/matsashi/chat?parent=localhost"
                height="500"
                width="243">
            </iframe> -->
        </div>        
    </div>
</section>
<section id="accueil-biblio">
    <h2 class="mb-5">Visiter la Bibliothèque</h2>
    <div class="mb-5">
        <div class="row align-items-center">
            <div class="col">
                <a href="<?=URL?>bibliotheque/microsoft">
                    <img src="<?=URL?>public/images/index/controller_microsoft.png" width="75%">
                </a>
            </div>
            <div class="col">
                <a href="<?=URL?>bibliotheque/sega">
                    <img src="<?=URL?>public/images/index/controller_genesis.png" width="75%">
                </a>
            </div>
            <div class="col">
                <a href="<?=URL?>bibliotheque/nintendo">
                    <img src="<?=URL?>public/images/index/controller_switch.png" width="75%">
                </a>
            </div>
            <div class="col">
                <a href="<?=URL?>bibliotheque/sony">
                    <img src="<?=URL?>public/images/index/controller_sony.png" width="75%">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="<?=URL?>bibliotheque/microsoft/pc/dofus">
                    <img src="<?=URL?>public/images/index/Dofus.jpg" width="75%" class="game-selection">
                </a>
            </div>
            <div class="col">
                <a href="<?=URL?>bibliotheque/sega/genesis/sonic-spinball">
                    <img src="<?=URL?>public/images/index/sonic spinball.jpg" width="75%" class="game-selection">
                </a>
            </div>
            <div class="col">
                <a href="<?=URL?>bibliotheque/nintendo/switch/mario-kart-8">
                    <img src="<?=URL?>public/images/index/mario kart.jpg" width="75%" class="game-selection">
                </a>
            </div>
            <div class="col">
                <a href="<?=URL?>bibliotheque/sony/ps2/resident-evil-4">
                    <img src="<?=URL?>public/images/index/re4 wallpaper.jpg" width="75%" class="game-selection">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Dofus</h3>
            </div>
            <div class="col">
                <h3>Sonic Spinball</h3>
            </div>
            <div class="col">
                <h3>Mario Kart 8</h3>
            </div>
            <div class="col">
                <h3>Resident Evil 4</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="game-selection-text">Dofus prend place dans le Monde des Douze. Les joueurs doivent retrouver six Dofus primordiaux, des œufs de dragons conférant une grande puissance à leur porteur.</p>
            </div>
            <div class="col">
                <p class="game-selection-text">Dans l'intention de transformer des petits animaux en robots, Dr. Eggman a construit une forteresse. Sachant que Sonic viendra le contrecarrer, il crée un système Pinball pour protéger son antre.</p>
            </div>
            <div class="col">
                <p class="game-selection-text">L'objectif principal de Mario Kart est simple : le joueur doit parcourir le plus rapidement possible des circuits, un certain nombre de fois, dans l'optique de franchir la ligne d'arrivée en premier.</p>
            </div>
            <div class="col">
                <p class="game-selection-text">Vous incarnez Leon S. Kennedy, envoyé en Espagne par le gouvernement américain pour sauver la fille du président des États-Unis, enlevée et retenue en otage par une mystérieuse secte.</p>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-4"></div>
            <a class="col-4 fs-3" id="button-biblio" href="<?=URL?>bibliotheque">Accéder à la bibliothèque</a>
            <div class="col-4"></div>
        </div>
    </div>
</section>
<section id="bio-projets">
    <div class="container">
        <h2 class="mb-5">Bio/Projets</h2>
        <div class="row mb-5">
            <div class="col-5">
                <h3 class="bio-text-left h3-bio mb-3">Le streaming</h3>
                <p class="bio-text-left">J'ai commencé le streaming en 2017. A l'époque les streams étaient ponctuels car c'était principalement un moyen de partager les sessions d'invocation que je faisais avec mes amis sur Summoners War. Cependant depuis Juin 2020, je me suis fixé un programme ainsi que des horaires à suivre afin d'être plus régulier et je stream sur différents jeux, les jeux revenant le plus souvent étant The Binding of Isaac et Hearthstone.</p>
                <p class="bio-text-left">Mon programme s'étend du Dimanche soir au Jeudi soir de 21h à 1h30.</p>
            </div>
            <div class="col-2">
            </div>
            <div class="col-5">
                <img id="bio-matsashi-picture" src="<?=URL?>public/images/index/MatsashiRedim.jpg">
            </div>            
        </div>
        <div class="row mb-5">
            <div class="col-5">
                <img id="bio-trophy-picture" src="<?=URL?>public/images/index/trophy.png">
            </div>
            <div class="col-2">
            </div>
            <div class="col-5">
                <h3 class="bio-text-left h3-bio mb-3">La chasse aux trophées</h3>
                <p class="bio-text-left">L'une des choses qui m'intéressent dans les jeux-vidéo c'est la chasse aux trophées. A chaque nouveau jeu que j'achète, je vais tenter de finir le jeu à 100% en allant chercher le trophée/succès final. Cela me permet d'explorer en profondeur les jeux auxquels je joue, d'en découvrir tous les aspects et de temps en temps de m'essayer au speedrun (finir le jeu le plus rapidement possible).</p>
                <p class="bio-text-left">Vous pouvez d'ailleurs voir mes trophées acquis et quelques statistiques sur ma façon de jouer sur PSTHC, un incontournable pour les "Trophy Hunter" (www.psthc.fr/profil-psn-Matsashii.htm).</p>
                <p class="bio-text-left">Jusqu'à présent je n'ai officiellement enregistré aucun temps sur aucun jeu mais il existe un jeu sur lequel j'avais tenté l'aventure du speedrun, mon jeu préféré Resident Evil 4.</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-5">
                <h3 class="bio-text-left h3-bio mb-3">Partenaires de jeu</h3>
                <p class="bio-text-left">Malgré le fait que je joue à énormément de jeux solo, j'aime également beaucoup jouer avec des amis. Que ce soit en coopération ou en compétition, le jeu à plusieurs est toujours source de plaisir mais aussi très souvent source de rage.</p>
                <p class="bio-text-left">Mes partenaires de jeu principaux :
                <br>- Nicohero <a href="https://www.twitch.tv/nicohero8" target="_blank">(Twitch.tv/nicohero8)</a>
                <br>- Karmatem
                <br>- Asalyx <a href="https://www.twitch.tv/asalyx" target="_blank">(Twitch.tv/asalyx)</a>
                <br>- Bouyah <a href="https://www.twitch.tv/bouyah_kikiwi" target="_blank">(Twitch.tv/bouyah_kikiwi)</a></p>
            </div>
            <div class="col-2">
            </div>
            <div class="col-5">
                <img id="bio-handshake-picture" src="<?=URL?>public/images/index/Handshake.jpg">
            </div>
        </div>
    </div>    
</section>
<?php
$content = ob_get_clean();
require "template.php";