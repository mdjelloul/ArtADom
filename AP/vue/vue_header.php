<?php
 include_once 'modele/connection.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="./vue/css/style2.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>

<body>

  <div class="header">
    <img class="imglogo" src="vue/image/util/ongletArtADom.jpg" alt="">

    <ul class="menu">
      <a href="index.php">Accueil</a>
      <a href="index.php?section=artiste">Artistes</a>
      <a href="index.php?section=spectacle">Spectacles</a>
      <a href="index.php?section=reservation">Reservation</a>
      <a href="index.php?section=contact">Contact</a>
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </div>

