<?php ob_start();?>
<section id="administration">
    <div class="container">
        <div class="first-element">
            <h2>Contact</h2>
        </div>
        <form class="justify-content-center" id="search-form" action="<?=URL?>contact/send" method="POST">
            <div class="py-2 bio-text-left mb-5">
                <label>Votre adresse mail :</label>
                <input class="form-control mb-5" type="email" placeholder="Pour vous recontacter si nécessaire" name="mail" required>
                <label>Sujet du message :</label>
                <input class="form-control mb-5" type="text" maxlength="100" name="subject" required>
                <label>Votre message : </label>
                <textarea class="form-control" name="message" rows="4" minlenght="100" placeholder="Une suggestion, un commentaire ou un bug à signaler ?" required></textarea>
            </div>
            <button type="submit" id="submit-admin-connexion" class="p-2 px-5">Envoyer</button>
        </form>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";