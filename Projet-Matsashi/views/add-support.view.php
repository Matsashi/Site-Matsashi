<?php ob_start();
$globalController = new GlobalController;
?>
<section id="create-support">
    <div class="container">
        <div class="first-element">
            <h2>Ajout d'un support</h2>
            <a href="<?=URL?>admin/panel">
                <i class="fas fa-arrow-left back-arrow"></i>
            </a>
        </div>
        <form class="justify-content-center" action="<?=URL?>admin/validate" method="POST" enctype="multipart/form-data">
            <div class="py-2 bio-text-left mb-5">
                <div class="row d-flex flex-row">
                    <div class="col">
                        <label>Nom :</label>
                        <input class="form-control mb-5" type="text" name="name" required>
                    </div>
                    <div class="col">
                        <label>Photo :</label>
                        <input class="form-control" type="file" aria-describedby="imgHelp" name="picture" required>
                        <small id="imgHelp" class="form-text text-muted">L'image doit être au format .jpg .png ou .jpeg et le fichier doit peser moins de 1Mo</small>
                    </div>
                </div>
                <div class="row d-flex flex-row">
                    <div class="col">
                        <label for="date">Texte :</label>
                        <textarea class="form-control mb-5" name="text" rows="10" required></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" id="submit-create-game" class="p-2 px-5">Création du support</button>
        </form>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";