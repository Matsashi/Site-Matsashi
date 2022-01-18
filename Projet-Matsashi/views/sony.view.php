<?php ob_start();?>
<section id="sony">
    <div class="container">
        <div class="first-element">
            <div class="align-items-center mb-5">
                <img src="<?=URL?>public/images/logo_constructeurs/logo_sony.png" width="50%">
            </div>
        </div>        
        <div class="container">
            <div class="row mb-2 align-items-center justify-content-evenly">
                <div class="col-2 py-3">
                    <a href="<?=URL?>bibliotheque/sony/PS1"><img src="<?=URL?>public/images/consoles/console_PS1.png" width="75%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/PS2"><img src="<?=URL?>public/images/consoles/console_PS2.png" width="100%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/PS3"><img src="<?=URL?>public/images/consoles/console_PS3.png" width="100%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/PS4"><img src="<?=URL?>public/images/consoles/console_PS4.png" width="100%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/PS5"><img src="<?=URL?>public/images/consoles/console_PS5.png" width="125%"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";