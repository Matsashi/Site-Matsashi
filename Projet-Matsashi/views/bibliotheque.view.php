<?php ob_start();?>
<section id="constructor">
    <div class="container">
        <div>
            <form class="d-flex justify-content-center">
                <input class="form-control" id="search-bar-game" type="search" placeholder="Rechercher votre jeu" name="search">
                <button type="submit">
                    <i class="fa fa-search" id="search-icon"></i>
                </button>
            </form>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-4">
                <a href="<?=URL?>bibliotheque/microsoft">
                    <img src="<?=URL?>public/images/Microsoft.png" width="75%">
                </a>
            </div>
            <div class="col-4"></div>
            <div class="col-4">
                <a href="<?=URL?>bibliotheque/sony">
                    <img src="<?=URL?>public/images/sony logo.png" width="75%">
                </a>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-4">
                <a href="<?=URL?>bibliotheque/sega">
                    <img src="<?=URL?>public/images/sega logo.png" width="75%">
                </a></div>
            <div class="col-4"></div>
            <div class="col-4">
                <a href="<?=URL?>bibliotheque/nintendo">
                    <img src="<?=URL?>public/images/nintendo.png" width="75%">
                </a>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";