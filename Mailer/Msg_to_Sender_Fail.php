<!DOCTYPE html>
<!-- // ** Langue du site / caractère utilisés / titre du site **// -->
<html lang="fr" xmlns:og="http://ogp.me/ns#">
<head>
    <meta charset="utf-8" />
    <title></title> <!-- //  70c max -->
    <!-- // ** Meta http-equiv **// -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, maximum-scale=2.0, initial-scale=1.0, user-scalable=yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <!-- //  Convertir les numéros de téléphone en liens pour mobiles Yes ou No -->
    <meta name="mobile-agent" content="format=html5; url=index.php" />
    <!-- // ** Meta Name Mobile Specifics APPLE **// -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <!-- // ** Meta Name Robots and Spyder **// -->
    <meta name="robots" content="noodp" />
    <!-- // ** Stylesheets **// -->
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>
<body class="is-preload">
    <div class="table-wrapper">
        <header id="header">
        </header>
        <div id="main">
            <!-- // ** Modal Contact -->
            <section id="contact">
                <h2>Oups !</h2>
                <p><b>Votre message n'a pas pu envoyé correctement<br></b></p>
                <p>Mailer Error: <?= $mail->ErrorInfo; ?></p>
            </section>
        </div>
    </div>
</body>

</html>