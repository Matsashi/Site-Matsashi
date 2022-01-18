<?php ob_start();?>
<section id="sega">
    <div class="container">
        <div class="first-element">
            <div class="align-items-center mb-5">
            <img src="<?=URL?>public/images/logo_sega.png" width="35%">
        </div>
        </div>
        
        <div class="container">
            <div class="row mb-2 align-items-center justify-content-evenly">
                <div class="col-2 py-3">
                    <a href="<?=URL?>bibliotheque/sony/ps1"><img src="<?=URL?>public/images/consoles/console_Megadrive.png" width="125%"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";