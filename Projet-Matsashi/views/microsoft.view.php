<?php ob_start();?>
<section id="microsoft">
    <div class="container">
        <div class="first-element">
            <div class="align-items-center mb-5">
            <img src="<?=URL?>public/images/logo_constructeurs/logo_microsoft.png" width="50%">
        </div>
        </div>
        
        <div class="container">
            <div class="row mb-2 align-items-center justify-content-evenly">
                <div class="col-2 py-3">
                    <a href="<?=URL?>bibliotheque/sony/ps1"><img src="<?=URL?>public/images/consoles/console_PC.png" width="100%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/ps2"><img src="<?=URL?>public/images/consoles/console_Xbox.png" width="125%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/ps3"><img src="<?=URL?>public/images/consoles/console_Xbox360.png" width="100%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/ps4"><img src="<?=URL?>public/images/consoles/console_XboxOne.png" width="125%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/ps5"><img src="<?=URL?>public/images/consoles/console_XboxSeriesX.png" width="175%"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";