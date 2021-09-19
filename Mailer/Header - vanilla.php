<!DOCTYPE html>
<!-- // ** Langue du site / caractère utilisés / titre du site **// -->
<html lang="<?= $HTML_LANG; ?>" xmlns:og="http:<!-- // ogp.me/ns#"> -->

<head>
    <meta charset="utf-8" />
    <title><?= $TITLE_index; ?></title> <!-- //  70c max -->
    <!-- // ** Meta http-equiv **// -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="refresh" content="10;URL=<?= $URL_FORM_DEV; ?>"> <!-- //  REDIRECTION AUTO -->
    <!-- // ** Meta Name Mobile Specifics Android and Other system **// -->
    <meta name="viewport" content="width=device-width, maximum-scale=2.0, initial-scale=1.0, user-scalable=yes" />
    <!--[if IEMobile]><meta http-equiv="cleartype" content="on"><![endif]-->
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
    <!-- // ** Shortcut Icon Desktop **// -->
    <link rel="shortcut icon" href="<?= $FILE_FAVICON; ?>" />
    <link rel="icon" href="<?= $FILE_FAVICON; ?>" />
    <!-- // ** Shortcut Icon APPLE (mettre les img à la racine du site !) **// -->
    <link rel="apple-touch-icon" sizes="58x58" href="touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png" />
    <!-- //  <link rel="apple-touch-startup-image" href="startup.png" /> -->
    <!-- // ** Shortcut Icon Miscosoft **// -->
    <!-- //  <meta name="msapplication-TileColor" content="#ffffff" /> -->
    <!-- //  <meta name="msapplication-TileImage" content="img/largetitle.png" /> -->
    <!-- //  <meta name="msapplication-TileImage" content="img/widetitle.png" /> -->
    <!-- //  <meta name="msapplication-TileImage" content="img/mediumtitle.png" /> -->
    <!-- //  <meta name="msapplication-TileImage" content="img/smalltitle.png" /> -->
    <!-- //  <meta name="theme-color" content="#294464" /> -->
    <!-- // ** Optimised SEO pour Google **// -->
    <meta name="description" content="<?= $TITLE_description; ?>" /> <!-- //  200c max -->
    <meta name="author" content="<?= $TITLE_author; ?>" />
    <meta name="designer" content="<?= $TITLE_author; ?>" />
    <meta name="web_author" content="<?= $TITLE_author; ?>" />
    <meta name="keywords" content="<?= $TITLE_news_keywords; ?>" />
    <!-- //  Supporter par les moteurs de recherche, SAUF GOOGLE ! -->
    <meta name="news_keywords" content="<?= $TITLE_news_keywords; ?>" /> <!-- //  GOOGLE UNIQUEMENT ! -->
    <link type="text/plain" rel="author" href="<?= $WEB_humans; ?>" />
    <link rel="canonical" href="<?= $WEB_canonical; ?>" />
    <link rel="shortlink" href="<?= $WEB_canonical; ?>" />
    <!-- // ** Open Graph pour Facebook -->
    <meta property="og:locale" content="fr_FR" />
    <!-- //  <meta property="og:type" content="" /> -->
    <meta property="og:title" content="<?= $TITLE_index; ?>" />
    <meta property="og:description" content="<?= $TITLE_description; ?>" />
    <meta property="og:url" content="<?= $WEB_canonical; ?>" />
    <meta property="og:site_name" content="<?= $TITLE_index; ?>" />
    <meta property="og:image" content="<?= $FILE_OG_400x400; ?>" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />
    <!-- // ** Stylesheets **// -->
    <link rel="stylesheet" href="<?= $TFEASR_css_main; ?>" />
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= $TFEASR_css_noscript; ?>">
    </noscript>
</head>