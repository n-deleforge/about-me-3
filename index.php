<?php
    $appVersion = "1.0";
    $titlePage = "Nicolas Deleforge";
    $description = "Développeur web, sur cette page, je vous présente mes différents réseaux et mon entreprise de réalisation de site internet et d'applications web.";
    $mainURL = "https://nicolas-deleforge.fr";
    $bannerURL = "https://nicolas-deleforge.fr/about-me/assets/image/banner.png";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $titlePage; ?></title>
    <meta name="title" content="<?php echo $titlePage; ?>">
    <meta name="description" content="<?php echo $description; ?>">

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $mainURL; ?>">
    <meta property="og:title" content="<?php echo $titlePage; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="<?php echo $bannerURL; ?>">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $mainURL; ?>">
    <meta property="twitter:title" content="<?php echo $titlePage; ?>">
    <meta property="twitter:description" content="<?php echo $description; ?>">
    <meta property="twitter:image" content="<?php echo $bannerURL; ?>">

    <link rel="stylesheet" href="assets/css/main.min.css?v=<?php echo $appVersion; ?>">
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
            <a class="button elem" target="_blank" rel="noreferrer" href="https://forgecode.fr"><i class="fas fa-hammer"></i> ForgeCode</a>
            <a class="button elem" target="_blank" rel="noreferrer" href="https://github.com/n-deleforge"><i class="fab fa-github"></i> GitHub</a>
            <a class="button elem" target="_blank" rel="noreferrer" href="https://linkedin.com/in/nicolasdeleforge"><i class="fab fa-linkedin"></i> LinkedIn</a>
        </div>

        <script src="https://n-deleforge.github.io/libraries/littleJS.min.js"></script>
        <script src="assets/js/main.min.js?v=<?php echo $appVersion; ?>"></script>
</body>
</html>