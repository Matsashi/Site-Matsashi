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
            <h1>Matsashi</h1>
            <script src= "https://player.twitch.tv/js/embed/v1.js"></script>
            <div id="twitch-embed"></div>
            <script type="text/javascript">
                new Twitch.Embed("twitch-embed",
                {
                width: 1430,
                height: 720,
                channel: "matsashi",
                muted: "true",
                layout: "video-with-chat",
                theme: "dark",
                });
            </script>
        </section>
        <footer>
        </footer>
    </body>
</html>