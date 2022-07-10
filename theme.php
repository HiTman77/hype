<?php global $Wcms ?>
<!DOCTYPE HTML>
<html lang="en-us">
<head>
<title><?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?></title>
<meta name="description" content="<?= $Wcms->page('description') ?>">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="/themes/hype/assets/css/main.css?v<?php echo(rand(1,10));?><?php echo(rand(1,20));?>" />
<noscript><link rel="stylesheet" href="/themes/hype/assets/css/noscript.css" /></noscript>
<link rel="shortcut icon" href="/data/files/favicon.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?= $Wcms->css() ?>
</head>  
<body class="is-preload">
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>
<header id="header">
<a href="/" class="title"><img src="/data/files/logo.png" alt="<?= $Wcms->page('title') ?>"></a>
<nav>
<ul>
<?= $Wcms->menu() ?>
</ul>
</nav>
</header>
<div id="wrapper">
<section id="main" class="wrapper">
<div class="inner">
<h1 class="major"><?= $Wcms->page('keywords') ?></h1>
<?= $Wcms->page('content') ?>
</div>
</section>
<section>
<div class="inner">
<?= $Wcms->block('subside') ?>
</div>
</section>
</div>
<footer id="footer" class="wrapper alt">
<div class="inner">
<?= $Wcms->footer() ?>
</div>
</footer>
<script src="/themes/hype/assets/js/jquery.min.js"></script>
<script src="/themes/hype/assets/js/jquery.scrollex.min.js"></script>
<script src="/themes/hype/assets/js/jquery.scrolly.min.js"></script>
<script src="/themes/hype/assets/js/browser.min.js"></script>
<script src="/themes/hype/assets/js/breakpoints.min.js"></script>
<script src="/themes/hype/assets/js/util.js"></script>
<script src="/themes/hype/assets/js/main.js"></script>
<?= $Wcms->js() ?>
</body>
</html>