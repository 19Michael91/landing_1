<?php

get_header();

?>




  <?php

    // $args = array( 'posts_per_page' => 1 );
    $lastposts = get_post(get_the_ID());


    //foreach( $lastposts as $post ){
      //var_dump($lastposts);
      //setup_postdata($post); // устанавливаем данные
      ?>

        <div class="post_main"> <!-- Start post -->
            <h1><?php echo $lastposts->post_title;?> <span><?php echo $lastposts->post_date; ?></span></h1>
            <div class="post">
                <?php echo $lastposts->post_content; ?>
                <hr />
                <?php comments_template(); ?>
            </div>
        </div>

      <?php
    //}
    //wp_reset_postdata(); // сброс

  ?>




<?php

get_footer();

?>
