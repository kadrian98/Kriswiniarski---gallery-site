<?php
/*
Template Name: Front
*/
          $image = get_field('logo');
          $picture = $image['sizes']['pageBanner'];
          $description = get_field('description');

?>

<?php get_header();?>


  <!-- Hero Section  -->
  <section id="hero"
  style="background-image: url('<?php echo get_field('main')['url']; ?>')">
    <div class="hero container">
      <div>
        <h1>Krzysztof Winiarski <span></span></h1>
        <h1>Fotografia <span></span></h1>       
        <a href="#about" data-after="About" type="button" class="cta">O MNIE</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title"><span>Galeria</span></h1>
      </div>
      <div class="all-projects">

          <?php     
          

            $homepagePosts = new WP_Query(array(

          'posts_per_page' => 3,
          'post_type' => array(
            'my-post-type' => 'galeria',
            
          )
          
        ));
        
        while($homepagePosts->have_posts()) {
          $homepagePosts->the_post(); 
          
          $titleText = get_field('text');
          ?>


        <div class="project-item">
          <div class="project-info">
            <a href="<?php the_permalink(); ?>">
              <h1 class="gallery-header" ><?php the_title(); ?></h1>
              <p><?php echo $titleText;?></p>
            </a>   
          </div>
          <div class="project-img">
            <?php the_post_thumbnail();?>
          </div>
        </div>

        <?php }

        ?>
        
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">

          <img src="<?php echo $picture;?>">

        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">O <span>mnie</span></h1>
        <h2>Krzysztof Winiarski</h2>
        <?php if($description) ?>
        <p><?php echo $description ?></p>

      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Kontakt</h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Telefon</h1>
            <h2>+48 691 898 989</h2>
            
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>mist@makeup-institute.pl</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Adres</h1>
            <h2>Bociania, Szczecin</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <?php get_footer(); ?>



  