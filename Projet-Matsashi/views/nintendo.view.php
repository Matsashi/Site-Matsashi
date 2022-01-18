<?php ob_start();?>
<section id="nintendo">
    <div class="container">
        <div class="first-element">
            <div class="align-items-center mb-5">
            <img src="<?=URL?>public/images/logo_constructeurs/logo_nintendo.png" width="50%">
        </div>
        </div>        
        <div class="container">
            <div class="row mb-2 align-items-baseline justify-content-evenly">
                <div class="col-5">
                    <h3>Consoles portable</h3>
                    <div class="row mb-5 align-items-center justify-content-evenly">
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps4"><img src="<?=URL?>public/images/consoles/console_Gameboy.png" width="75%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps5"><img src="<?=URL?>public/images/consoles/console_GameboyColor.png" width="75%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps5"><img src="<?=URL?>public/images/consoles/console_GBASP.png" width="100%"></a>
                        </div>
                    </div>
                    <div class="row mb-2 align-items-center justify-content-evenly">
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps2"><img src="<?=URL?>public/images/consoles/console_NDSLite.png" width="100%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps3"><img src="<?=URL?>public/images/consoles/console_3DS.png" width="100%"></a>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5 align-items-baseline">
                    <h3>Consoles de salon</h3>
                    <div class="row mb-2 align-items-center justify-content-evenly">
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps4"><img src="<?=URL?>public/images/consoles/console_NES.png" width="100%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps5"><img src="<?=URL?>public/images/consoles/console_SNES.png" width="100%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps5"><img src="<?=URL?>public/images/consoles/console_N64.png" width="125%"></a>
                        </div>
                    </div>
                    <div class="row mb-2 align-items-center justify-content-evenly">
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps2"><img src="<?=URL?>public/images/consoles/console_Gamecube.png" width="75%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps3"><img src="<?=URL?>public/images/consoles/console_Wii.png" width="75%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps4"><img src="<?=URL?>public/images/consoles/console_Switch.png" width="150%"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";