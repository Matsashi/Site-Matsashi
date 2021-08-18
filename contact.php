<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Matsashi</title>
        <link rel="stylesheet" href="Css/CSSindex.css">
        <link rel="icon" href="Images/Index/LogoRedim.png">
    </head>
    <body>
        <header>
            <ul id="MenuHeader">
                <li id="Twitch"><a href="https://www.twitch.tv/matsashi" target="_blank">Twitch</a></li>
                <li id="Matériel"><a href="materiel.php">Matériel</a></li>
                <li id="LogoPng"><a href="index.php"><img src="Images/Index/LogoRedim.png"></a></li>
                <li id="Biographie"><a href="biographie.php">Biographie</a></li>
                <li id="Contact"><a href="contact.php">Contact</a></li>
            </ul>
        </header>
        <section>
            <form method ="POST" action="mailto:matthew.pottier@hotmail.fr">
                <p><label for="Prénom" id="prénom">Votre prénom :</label></p><input type="text" name="prénom" required>
                <p><label for="Mail" id="mail">Votre mail :</label></p><input type="text" name="mail" required>
                <p><label for="Message" id="message">Votre message :</label></p><textarea rows="10" cols="100" required></textarea>
                <p><input type="submit" value="Envoyer"></p>
            </form>
        </section>
    </body>
</html>