<?php
    $APP_VERSION = "1.0";
    $TITLE_PAGE = "Nicolas Deleforge";
    $DESCRIPTION = "Développeur web, sur cette page, je vous présente mes différents réseaux et mon entreprise de réalisation de site internet et d'applications web.";
    $MAIN_URL = "https://nicolas-deleforge.fr";
    $BANNER_URL = "https://nicolas-deleforge.fr/about-me/assets/image/banner.png";
    $LINKS = [
        ["https://forgecode.fr", "fas fa-hammer", "ForgeCode"],
        ["https://github.com/n-deleforge", "fab fa-github", "Github"],
        ["https://linkedin.com/in/nicolasdeleforge", "fab fa-linkedin", "LinkedIn"]
    ];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $TITLE_PAGE; ?></title>
    <meta name="title" content="<?php echo $TITLE_PAGE; ?>">
    <meta name="description" content="<?php echo $DESCRIPTION; ?>">

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $MAIN_URL; ?>">
    <meta property="og:title" content="<?php echo $TITLE_PAGE; ?>">
    <meta property="og:description" content="<?php echo $DESCRIPTION; ?>">
    <meta property="og:image" content="<?php echo $BANNER_URL; ?>">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $MAIN_URL; ?>">
    <meta property="twitter:title" content="<?php echo $TITLE_PAGE; ?>">
    <meta property="twitter:description" content="<?php echo $DESCRIPTION; ?>">
    <meta property="twitter:image" content="<?php echo $BANNER_URL; ?>">

    <link rel="stylesheet" href="assets/css/main.min.css?v=<?php echo $APP_VERSION; ?>">
    <link rel="stylesheet" href="assets/css/fontawesome/all.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/image/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/image/favicon/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="assets/image/favicon/favicon.ico">
</head>

<body>
    <div id="app">

        <div id="header" class="elem">
            <div id="photo"></div>
            <div id="name">
                <p id="firstName">Nicolas</p>
                <p id="lastName">Deleforge</p>
            </div>
        </div>

        <div id="buttonList">
            <?php 
                foreach($LINKS as $link)
                    echo '<a class="button elem" target="_blank" rel="noreferrer" href="' . $link[0] . '"><i class="' . $link[1] . '"></i> ' . $link[2] . '</a>';
            ?>
        </div>

        <script src="https://nicolas-deleforge.fr/libraries/littleJS.min.js"></script>
        <script src="assets/js/main.min.js?v=<?php echo $APP_VERSION; ?>"></script>
</body>
</html>