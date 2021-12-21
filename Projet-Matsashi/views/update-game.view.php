<?php ob_start();?>
<section id="update-games">
    <div class="container">
        <div class="first-element">
            <h2>Modifier un jeu</h2>
            <a href="<?=URL?>admin/panel">
                <i class="fas fa-arrow-left back-arrow"></i>
            </a>
        </div>
        <table class="table text-center">
            <tr class="table-head">
                <th>Jaquette</th>
                <th>Titre</th>
                <th>Support</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php
            foreach($newGame as $value):
            ?>
            <tr>
                <td class="align-middle"><img src="<?=URL?>public/images/<?=$value->getCover()?>" alt="<?=$value->getTitle()?>" width="60px;">
                <td class="align-middle name-game"><?=$value->getTitle()?></td>
                <td class="align-middle support-game"><?=$value->getSupport()?></td>
                <td class="align-middle"><a href="admin/update/<?=$value->getId()?>" class="btn btn-warning">Modifier</a></td>
                <td class="align-middle buttonDelete"><a href="admin/deleteGame/<?=$value->getId()?>" class="btn btn-danger" onclick="return confirm('Etes-vous sûr(e) de vouloir supprimer ce jeu ?');">Supprimer</a></td>
            </tr>
            <?php endforeach?>
        </table>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";