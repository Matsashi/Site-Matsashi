<?php ob_start();?>
<section id="constructor">
    <div class="container">
        <div class="first-element">
            <form class="d-flex justify-content-center">
                <div class="input-group py-2"  id="search-form">
                    <input class="form-control" type="text" placeholder="Rechercher votre jeu" id="search-bar-game">
                    <span class="input-group-append">
                        <button class="btn " type="button" id="search-icon">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <div class="row align-items-center margin-bottom-10">
            <div class="col-4">
                <a href="<?=URL?>bibliotheque/microsoft">
                    <img src="<?=URL?>public/images/logo_constructeurs/logo_microsoft.png" width="75%">
                </a>
            </div>
            <div class="col-4"></div>
            <div class="col-4">
                <a href="<?=URL?>bibliotheque/sony">
                    <img src="<?=URL?>public/images/logo_constructeurs/logo_sony.png" width="75%">
                </a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4">
                <a href="<?=URL?>bibliotheque/sega">
                    <img src="<?=URL?>public/images/logo_constructeurs/logo_sega.png" width="75%">
                </a></div>
            <div class="col-4"></div>
            <div class="col-4">
                <a href="<?=URL?>bibliotheque/nintendo">
                    <img src="<?=URL?>public/images/logo_constructeurs/logo_nintendo.png" width="75%">
                </a>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";