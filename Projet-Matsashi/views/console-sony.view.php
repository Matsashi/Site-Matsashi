<?php ob_start();?>
<section id="sony">
    <div class="container">
        <div class="row align-items-center mb-5 first-element">
            <div class="col-5">
                <p class="bio-text-left">
                    <?php
                      echo $supportName->getText();
                    ?>
                </p>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <img src="<?=URL?>public/images/<?=$supportName->getPicture()?>" width="75%">
            </div>
        </div>
        <div class="container">
            <div class="row margin-top-5">
                <div class="col-4"></div>
                <a class="col-4 fs-3" id="button-biblio" href="<?=URL?>bibliotheque/sony/<?=$url[2]?>/jeux">Accéder à la bibliothèque <?=$url[2]?></a>
                <div class="col-4"></div>
            </div>
            <div class="row align-items-center justify-content-evenly margin-top-5">
                <div class="col-2 selected-console py-3">
                    <a href="<?=URL?>bibliotheque/sony/PS1"><img src="<?=URL?>public/images/logo-ps1.png" width="75%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/PS2"><img src="<?=URL?>public/images/logo-ps2.png" width="75%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/PS3"><img src="<?=URL?>public/images/logo-ps3.png" width="75%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/PS4"><img src="<?=URL?>public/images/logo-ps4.png" width="75%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/PS5"><img src="<?=URL?>public/images/logo-ps5.png" width="75%"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";