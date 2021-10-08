<?php ob_start();?>
<section id="administration">
    <div class="container">
        <div class="first-element">
            <h2>Administration</h2>
        </div>
        <form class="justify-content-center" id="search-form">
            <div class="py-2 bio-text-left mb-5">
                <label>Login :</label>
                <input class="form-control mb-5" type="text" placeholder="Votre identifiant" name="login">
                <label>Mot de passe : </label>
                <input class="form-control" type="password" placeholder="Votre mot de passe" name="password">
            </div>
            <button type="submit" id="submit-admin-connexion" class="p-2 px-5">Connexion</button>
        </form>
    </div>
</section>
<?php
$content = ob_get_clean();
require "template.php";