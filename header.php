<?php
/**
 * The template for displaying the header
 *
 */
$options = get_option('theme_settings');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'blogname' ); ?></title>
    <link rel="shortcut icon" href="<?php echo $options['favicon'];?>">
    <?php
        wp_head();
    ?>
  </head>
<body <?php body_class(); ?>>
<header>
<!-- Header -->
  <header id="header">
        <div class="top-line" id="top-line">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/YokNgalam1.png" alt="logo">
            </div>
            <div class="menu">
                <ul class="menu_ul">
                  <li><a id="a_header" href="#header">Home</a></li>
                  <li><a id="a_destination" href="#destination">Destination</a></li>
                  <li><a id="a_ittinery" href="#ittinery">Ittinery</a></li>
                  <li><a id="a_contact" href="#contact">Contact</a></li>
                  <!-- <li><a href="<?php echo get_template_directory_uri();?>/page_posts.php">Posts</a></li> -->
                  <li><a href="<?php echo get_permalink(10); ?>">Posts</a></li>
                </ul>
            </div>
        </div>
        <div class="lets_get_lost">
            <span class="lgl_span_1">
                <span class="lgl_span_1_1">LETS GET </span><span class="lgl_span_1_2">LOST</span>
            </span>
            <br>
            <br>
            <span class="lgl_span_2">
                <span class="lgl_span_2_1">
                    Malang will never dissapointed you.
                </span>
                <br>
                <br>
                <span class="lgl_span_2_2">
                    From every step you will be amazed and suddenly fallin love with Malang
                </span>
            </span>

            <div class="div_btn1">
                <a href="#">
                    <button class="button_1">SET ITTINERY NOW</button>
                </a>
            </div>
            <span class="lgl_span_3"></span>
        </div>
        <div class="city_of_love">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Vector_Smart_Object.png" alt="">
            <span class="city_of_love_1">
                <span class="city_of_love_1_1">
                    <span class="city_of_love_1_1_1">City if</span> <span class="city_of_love_1_1_2">Love</span>
                </span>
                <br>
                <span class="city_of_love_1_2">
                    Malang is the second largest city East Java province, Indonesia. It has a history
                    <br>
                    <br>
                    dating back to the ancient mataram kingdom. The city is famos for its cool
                    <br>
                    <br>
                    temperature. People in East Java sometimes call it "Paris of East Java".
                </span>
            </span>
        </div>
    </header>

</header>
