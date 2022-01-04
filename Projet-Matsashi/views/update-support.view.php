<?php ob_start();?>
<section id="update-support">
    <div class="container">
        <div class="first-element">
            <h2>Modifier un support</h2>
            <a href="<?=URL?>admin/panel">
                <i class="fas fa-arrow-left back-arrow"></i>
            </a>
        </div>
        <table class="table text-center">
            <tr class="table-head">
                <th>Image</th>
                <th>Nom</th>
                <th>Texte</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php
            foreach($newSupport as $value):
            ?>
            <tr>
                <td class="align-middle"><img src="<?=URL?>public/images/<?=$value->getPicture()?>" alt="<?=$value->getName()?>" width="100px;">
                <td class="align-middle name-support"><?=$value->getName()?></td>
                <td class="align-middle text-support"><?=$value->getText()?></td>
                <td class="align-middle"><a href="update-support/<?=$value->getId()?>" class="btn btn-warning">Modifier</a></td>
                <td class="align-middle buttonDelete"><a href="admin/deleteSupport/<?=$value->getId()?>" class="btn btn-danger" onclick="return confirm('Etes-vous sûr(e) de vouloir supprimer ce support ?');">Supprimer</a></td>
            </tr>
            <?php endforeach?>
        </table>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";