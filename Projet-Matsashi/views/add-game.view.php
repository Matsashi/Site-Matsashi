<?php ob_start();
$globalController = new GlobalController;
?>
<section id="create-game">
    <div class="container">
        <div class="first-element">
            <h2>Ajout d'un jeu</h2>
            <a href="<?=URL?>admin/panel">
                <i class="fas fa-arrow-left back-arrow"></i>
            </a>
        </div>
        <form class="justify-content-center" action="<?=URL?>admin/validate" method="POST" enctype="multipart/form-data">
            <div class="py-2 bio-text-left mb-5">
                <div class="row d-flex flex-row">
                    <div class="col">
                        <label for="front">Jaquette avant :</label>
                        <input class="form-control" type="file" aria-describedby="imgHelp" name="front" required>
                        <small id="imgHelp" class="form-text text-muted">L'image doit être au format .jpg .png ou .jpeg et le fichier doit peser moins de 1Mo</small>
                    </div>
                    <div class="col">
                        <label for="back">Jaquette arrière :</label>
                        <input class="form-control" type="file" aria-describedby="imgHelp2" name="back" required>
                        <small id="imgHelp2" class="form-text text-muted">L'image doit être au format .jpg .png ou .jpeg et le fichier doit peser moins de 1Mo</small>
                    </div>
                </div>
                <div class="row d-flex flex-row">
                    <div class="col">
                        <label for="title">Titre :</label>
                        <input class="form-control mb-5" type="text" name="title" autocomplete="off" required>
                    </div>
                    <div class="col">
                        <label for="supportMenu">Support :</label>
                        <select class="form-control mb-5" name="supportMenu" required>
                        <?php
                            foreach($supports as $key => $value){
                                echo "<option value='" . $value->getName() . "'>" . $value->getName() . "</option>";
                            };
                        ?>
                        </select>
                    </div>
                </div>
                <div class="row d-flex flex-row">
                    <div class="col">
                        <label for="type">Genre :</label>
                        <select class="form-control mb-5" name="genre" required>
                        <?php 
                            foreach($genres as $key => $value){
                                echo "<option value='" . $value->name_genre . "'>" . $value->name_genre . "</option>";
                            };
                        ?>                        
                        </select>
                    </div>
                    <div class="col">
                        <label for="date">Date de sortie :</label>
                        <input class="form-control mb-5" type="date" name="date" required>
                    </div>
                </div>
                <div class="row d-flex flex-row">
                    <div class="col">
                        <label for="editeur">Éditeur :</label>
                        <select class="form-control mb-5" name="editeur" required>
                        <?php 
                            foreach($editeurs as $key => $value){
                                echo "<option value='" . $value->name_editeur . "'>" . $value->name_editeur . "</option>";
                            };
                        ?>                        
                        </select>
                    </div>
                    <div class="col">
                        <label for="supportMode">Mode de jeu :</label>
                        <select class="form-control mb-5" name="supportMode" required>
                        <?php 
                            foreach($modes as $key => $value){
                                echo "<option value='" . $value->name_mode . "'>" . $value->name_mode . "</option>";
                            };
                        ?>                        
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" id="submit-create-game" class="p-2 px-5">Création du jeu</button>
        </form>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";