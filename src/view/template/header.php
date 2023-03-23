<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thierry509</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./asset/css/fontawesome.min.css">
    <link rel="stylesheet" href="./asset/css/brands.min.css">
    <link rel="stylesheet" href="./asset/css/solid.min.css">
    <link rel="shortcut icon" href="./img/logo_thierry.png" type="image/x-icon">
    <?php
    if(isset($stylePage)):
        foreach($stylePage as $style):?>
            <link rel="stylesheet" href= <?= $style?>>
        <?php endforeach ;
        endif;
        ?>
</head>

<body>
    <nav>
        <div class="logo"><a href="">
                <div class="img-box img"></div>Thierry509
            </a></div>
            <i class="fa-solid fa-bars menu"></i>
        <ul>
            <li><a href="#home"> HOME </a></li>
            <li><a href="#about"> ABOUT </a></li>
            <li><a href="/blog"> BLOG </a></li>
            <li><a href="#project"> PROJECT </a></li>
            <li><a href="#contact"> CONTACT </a></li>
        </ul>
    </nav>
    <main>