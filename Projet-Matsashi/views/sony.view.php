<?php ob_start();?>
<section id="sony">
    <div class="container">
        <div class="first-element">
            <div class="align-items-center mb-5">
            <img src="<?=URL?>public/images/sony logo.png" width="50%">
        </div>
        </div>
        
        <div class="container">
            <div class="row mb-2 align-items-center justify-content-evenly">
                <div class="col-2 py-3">
                    <a href="<?=URL?>bibliotheque/sony/ps1"><img src="<?=URL?>public/images/console-ps1.png" width="75%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/ps2"><img src="<?=URL?>public/images/console-ps2.png" width="100%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/ps3"><img src="<?=URL?>public/images/console-ps3.png" width="100%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/ps4"><img src="<?=URL?>public/images/console-ps4.png" width="100%"></a>
                </div>
                <div class="col-2">
                    <a href="<?=URL?>bibliotheque/sony/ps5"><img src="<?=URL?>public/images/console-ps5.png" width="125%"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";