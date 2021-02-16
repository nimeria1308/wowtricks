<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="description" content="<?= $page_description ?>">
    <meta name="keywords" content="<?= $page_keywords ?>">

    <link rel="icon" type="image/png" href="/resources/images/wow.png">
    <link rel="stylesheet" type="text/css" href="/resources/styles.css">
    <title>wowtricks! <?= $page_title ?></title>
</head>

<body>
    <div class="header_logo">
        <a href="/">
            <img class="logo" alt="wowtricks logo" src="/resources/images/wow.png" />
            <span class="title">wowtricks!</span>
        </a>
    </div>
    <div class="menu">
        <?= require 'menu.php' ?>
    </div>
    <div id="page_content">
        <div class="page_title">
            <h1><?= $page_title ?></h1>
        </div>
        <a id="top"></a>
        <?= $page_content ?></div>
    <div class="footer">
        Copyright (C) <span id="year"></span> Simona Dimitrova
    </div>
    <script src="/resources/scripts.js"></script>
</body>

</html>