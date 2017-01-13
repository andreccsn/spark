<?php
    $pageTitle = !isset($pageTitle) ? 'Spark' : $pageTitle;
    $pageDescription = !isset($pageDescription) ? 'A lightweight css framework built on top of Sass' : $pageDescription;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?= $pageDescription ?>">
        <title><?= $pageTitle ?> / Spark - CSS Framework</title>
        
        <link rel="stylesheet" href="assets/stylesheets/vendor/prism.css" media="screen">
        <link rel="stylesheet" href="assets/stylesheets/src/spark.css" media="screen">
        <link rel="stylesheet" href="assets/stylesheets/src/css.css" media="screen">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <nav class="navbar" role="navigation">
                    <a href="index.php" class="brand" title="Spark - A lightweight css framework">Spark</a>
                    <ul class="nav inline">
                        <li class="nav-item"><a href="" class="nav-link">Getting Started</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Documentation</a></li>
                        <li class="nav-item"><a href="" class="nav-link">About</a></li>
                    </ul>
                </nav>
            </div>

            <div class="hero-title">
                <div class="container">
                    <h1><?= $heroTitle ?></h1>
                    <p class="lead"><?= $pageDescription ?></p>
                </div>
            </div>
        </header>

        <main class="container">
            <div class="row">
                <section class="content" role="main">
