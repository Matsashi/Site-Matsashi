<?php ob_start();?>
<section id="sony">
    <div class="container">
        <!-- <div class="first-element">
            <form class="d-flex justify-content-center">
                <div class="input-group"  id="search-form">
                    <input class="form-control" type="text" placeholder="Rechercher votre jeu" id="search-bar-game">
                    <span class="input-group-append">
                        <button class="btn " type="button" id="search-icon">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div> -->
        <div class="row align-items-center mb-5 first-element">
            <div class="col-5">
                <p class="bio-text-left">La première console de salon que j'ai eu.
                Mes premiers jeux étaient Hercule, Harry Potter et la chambre des secrets et Marvel Super Heroes (dont le CD était et est encore parfumé).
                </p>
                <p class="bio-text-left">C'est mon père qui m'a transmis cette passion pour le jeu-vidéo principalement en le regardant jouer aux jeux populaires de l'époque (Tomb Raider, Resident Evil, Oddworld Abe's Oddysee, Gran Turismo et bien d'autres).</p>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <img src="<?=URL?>public/images/matt_sony.jpg" width="75%">
            </div>
        </div>
        <div class="container">
            <div class="row margin-top-5">
                <div class="col-4"></div>
                <a class="col-4 fs-3" id="button-biblio" href="<?=URL?>bibliotheque">Accéder à la bibliothèque PS1</a>
                <div class="col-4"></div>
            </div>
            <div class="row align-items-center justify-content-evenly margin-top-5">
                <div class="col-2 selected-console py-3">
                    <a href="<?=URL?>bibliotheque/sony/ps1"><img src="<?=URL?>public/images/logo-ps1.png" width="75%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/ps2"><img src="<?=URL?>public/images/logo-ps2.png" width="75%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/ps3"><img src="<?=URL?>public/images/logo-ps3.png" width="75%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/ps4"><img src="<?=URL?>public/images/logo-ps4.png" width="75%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/ps5"><img src="<?=URL?>public/images/logo-ps5.png" width="75%"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";