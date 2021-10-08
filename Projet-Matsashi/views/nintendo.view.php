<?php ob_start();?>
<section id="nintendo">
    <div class="container">
        <div class="first-element">
            <div class="align-items-center mb-5">
            <img src="<?=URL?>public/images/nintendo.png" width="50%">
        </div>
        </div>        
        <div class="container">
            <div class="row mb-2 align-items-baseline justify-content-evenly">
                <div class="col-5">
                    <h3>Consoles portable</h3>
                    <div class="row mb-5 align-items-center justify-content-evenly">
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps4"><img src="<?=URL?>public/images/console-gameboy.png" width="75%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps5"><img src="<?=URL?>public/images/console-gameboyColor.png" width="75%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps5"><img src="<?=URL?>public/images/console-gbaSP.png" width="100%"></a>
                        </div>
                    </div>
                    <div class="row mb-2 align-items-center justify-content-evenly">
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps2"><img src="<?=URL?>public/images/console-ndsLite.png" width="100%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps3"><img src="<?=URL?>public/images/console-3ds.png" width="100%"></a>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5 align-items-baseline">
                    <h3>Consoles de salon</h3>
                    <div class="row mb-2 align-items-center justify-content-evenly">
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps4"><img src="<?=URL?>public/images/console-nes.png" width="100%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps5"><img src="<?=URL?>public/images/console-snes.png" width="100%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps5"><img src="<?=URL?>public/images/console-n64.png" width="125%"></a>
                        </div>
                    </div>
                    <div class="row mb-2 align-items-center justify-content-evenly">
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps2"><img src="<?=URL?>public/images/console-gamecube.png" width="75%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps3"><img src="<?=URL?>public/images/console-wii.png" width="75%"></a>
                        </div>
                        <div class="col-4">
                            <a href="<?=URL?>bibliotheque/sony/ps4"><img src="<?=URL?>public/images/console-switch.png" width="150%"></a>
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