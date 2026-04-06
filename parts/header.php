<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja stránka</title>
    <?php
    include_once "functions.php";
    getCSS(); 
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="container main-header">
        <div>
          <a href="index.php">
            <img src="img/logo.png" height="40" alt="Logo">
          </a>
        </div>
        <nav class="main-nav">
            <ul class="main-menu" id="main-menu">
                <?php
                $menuData = getMenuData("header");
                printMenu($menuData);
                ?>
            </ul>
            <a class="hamburger" id="hamburger">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
    </header>