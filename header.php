<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <?php wp_head(); ?>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Strona Główna">Strona Główna</a></li>
            <li><a href="#projects" data-after="Galeria">Galeria</a></li>
            <li><a href="#about" data-after="O mnie">O mnie</a></li>
            <li><a href="#contact" data-after="Kontakt">Kontakt</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
  