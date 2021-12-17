<?php ob_start();?>
<section id="administration-panel">
    <div class="container">
        <div class="first-element">
            <h2>Administration</h2>
        </div>
        <div class="cards-panel">
            <div class="row align-items-center">
                <div class="col">
                    <a href="<?=URL?>admin/add-game" class="panel-icons">
                        <i class="fas fa-compact-disc"></i>
                        <sub>
                            <i class="fas fa-plus"></i>
                        </sub>
                    </a>
                </div>
                <div class="col">
                    <a href="<?=URL?>admin/add-support" class="panel-icons">
                        <i class="fas fa-gamepad"></i>
                        <sub>
                            <i class="fas fa-plus"></i>
                        </sub>
                    </a>
                </div>
                <div class="col">
                    <a href="<?=URL?>admin/update-game" class="panel-icons">
                        <i class="fas fa-compact-disc"></i>
                        <sub>
                            <i class="fas fa-pencil-alt"></i>
                        </sub>
                    </a>
                </div>
                <div class="col">
                    <a href="<?=URL?>admin/update-support" class="panel-icons">
                        <i class="fas fa-gamepad"></i>
                        <sub>
                            <i class="fas fa-pencil-alt"></i>
                        </sub>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Ajouter un jeu</h3>
                </div>
                <div class="col">
                    <h3>Ajouter un support</h3>
                </div>
                <div class="col">
                    <h3>Modifier un jeu</h3>
                </div>
                <div class="col">
                    <h3>Modifier un support</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";