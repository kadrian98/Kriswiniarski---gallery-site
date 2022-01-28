<?php 

$link = get_field('link');

wp_head(); ?>
<section id="header">
    <div class="header-gallery container-gallery">    
        <div class="nav-list-gallery">
          <ul>
            <li><a class="list-gallery" href="<?php echo $link['url']; ?>">Strona Główna</a></li>         
          </ul>
        </div>     
    </div>
  </section>

<!-- <h1 class="gallery-header"><?php the_title();?></h1> -->

<div class="img-container">
<?php the_content();
 ?>



</div>