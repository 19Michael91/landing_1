<?php
// Template Name: Page Posts
get_header();

?>

  <?php

    $args = array();
    $lastposts = get_posts();

    foreach( $lastposts as $post ){
      setup_postdata($post); // устанавливаем данные
      ?>

      <div class="post_main">
          <h1><?php the_title();?> <span><?php the_date_xml(); ?></span></h1>
          <div class="post">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
              <?php the_excerpt(); ?>
              <p><a href="<?php the_permalink(); ?>">Читать далее</a></p>
              <p><?php the_tags(); ?></p>
          </div>
      </div>

      <?php
    }
    wp_reset_postdata(); // сброс

  ?>




<?php

get_footer();

?>

