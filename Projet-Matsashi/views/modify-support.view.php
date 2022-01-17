<?php ob_start();
?>
<section id="modify-support">
    <div class="container">
        <div class="first-element">
            <h2>Modification de <?=$supportName->getName()?></h2>
            <a href="<?=URL?>admin/update-support">
                <i class="fas fa-arrow-left back-arrow"></i>
            </a>
        </div>
        <form class="justify-content-center" action="<?=URL?>admin/validate3" method="POST" enctype="multipart/form-data">
            <div class="py-2 bio-text-left mb-5">
                <div class="row d-flex flex-row">
                    <div class="col">
                        <label>Nom :</label>
                        <input class="form-control" type="text" name="name" aria-describedby="nameHelp" value="<?=$supportName->getName()?>" required>
                        <small id="nameHelp" class="form-text text-muted">Le nom doit être en majuscule.</small>
                    </div>
                    <div class="col">
                        <label>Photo Console :</label>
                        <input class="form-control" type="file" aria-describedby="imgHelp2" name="pictureConsole">
                        <small id="imgHelp2" class="form-text text-muted">L'image doit être au format .png avec un fond transparent et le fichier doit peser moins de 1Mo</small>
                    </div>
                </div>
                <div class="row d-flex flex-row">
                    <div class="col">
                        <label for="constructeurMenu">Constructeurs :</label>
                        <select class="form-control mb-5" name="constructeurMenu" required>
                        <?php
                            $constructeurName = $constructeurName->getName();
                            echo "<option value='". $constructeurName . "'hidden selected>". $constructeurName. "</option>";
                            foreach($constructeurs as $key => $value){
                                echo "<option value='" . $value->name_constructeur . "'>" . $value->name_constructeur . "</option>";
                            };
                        ?>
                        </select>
                    </div>
                    <div class="col">
                        <label>Photo IRL :</label>
                        <input class="form-control" type="file" aria-describedby="imgHelp" name="pictureIRL">
                        <small id="imgHelp" class="form-text text-muted">L'image doit être au format .jpg .png ou .jpeg et le fichier doit peser moins de 1Mo</small>
                    </div>
                </div>
                <div class="row d-flex flex-row">
                    <div class="col">
                        <label for="date">Texte :</label>
                        <textarea class="form-control mb-5" name="text" rows="10" required><?=$supportName->getText()?></textarea>
                    </div>
                </div>
                <div>
                    <input type="text" name="id" value="<?=$supportName->getId()?>" hidden>
                </div>
            </div>
            <button type="submit" id="submit-create-game" class="p-2 px-5">Modifier le support</button>
        </form>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";