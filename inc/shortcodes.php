<?php

add_shortcode('abv_home_header', 'abv_home_header_func');

function abv_home_header_func($atts, $content) {
  ob_start();
  ?>
  <div class="section slide-one">
      <div class="container">
          <div class="row">
              <div class="col-left">
                  <h2><?=$atts['title'];?></h2>
                  <h2>partner</h2>
                  <h3>for design agencies</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, dolores.</p>
              </div>
              <div class="col-right">
                  <div class="image-wr">
                      <img src="https://api.fnkr.net/testimg/250x400/ff5e5e/FFF/?text=pic">
                  </div>
              </div>
          </div>
      </div>
      <a href="#" class="scroll next-slide">
          <img src="<?=get_template_directory_uri();?>/images/general/icon-scrolling.svg" alt="">
      </a>
  </div>
  <?php
  return ob_get_clean();
}

add_shortcode('abv_home_header2', 'abv_home_header_func2');

function abv_home_header_func2($atts, $content) {
  ob_start();
  ?>
  <div class="section slide-one">
      <div class="container">
          <div class="row">
              <div class="col-left">
                  <?=$content;?>
                  </div>
              <div class="col-right">
                  <div class="image-wr">
                      <img src="https://api.fnkr.net/testimg/250x400/ff5e5e/FFF/?text=pic">
                  </div>
              </div>
          </div>
      </div>
      <a href="#" class="scroll next-slide">
          <img src="<?=get_template_directory_uri();?>/images/general/icon-scrolling.svg" alt="">
      </a>
  </div>
  <?php
  return ob_get_clean();
}

add_shortcode('abv_testimonials', 'abv_testimonials_func');

function abv_testimonials_func($atts, $content) {
  ob_start();

  $args = [
    'post_type' => 'abv_testimonial',
    'posts_per_page'  => -1,
    'post_status' => 'publish',
  ];

  $query = new WP_Query($args);

  if ( $query->have_posts() ) {

  ?>
  <div class="section slide-four">
      <div class="container">
          <div class="section-inner">
              <h2>Testimonials</h2>
              <div class="testimonials-gallery-wrap">
                  <div class="testimonials-gallery gallery-init">
<?php
while ( $query->have_posts() ) {
   $query->the_post();
   ?>
                      <div>
                          <div class="testimonial">
                              <div class="testimonial-cite">
                                  <span class="quote quote-top"><svg class="icon icon-quote" width="1em" height="1em">
<use xlink:href="<?=get_template_directory_uri();?>/images/svg-symbols.svg#quote" width="100%" height="100%"></use>
</svg>
</span>
                              <?php the_content();?>
                              </div>
                              <div class="testimonial-content">
                                  <div class="testimonial-info">
                                      <div class="testimonial-name"><?php echo types_render_field( "author" ); ?>
</div>
                                      <div class="testimonial-role"><?php echo types_render_field( "position" ); ?>
                                      </div>
                                      <div class="testimonial-social">
                                          <a href="<?php echo types_render_field( 'linkedin' ); ?>" target="_blank">
                                              <svg class="icon icon-in" width="1em" height="1em">
                                                  <use xlink:href="<?=get_template_directory_uri();?>/images/svg-symbols.svg#in" width="100%" height="100%"></use>
                                              </svg>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="testimonial-photo">
                                    <?php
                                    $image = get_post_meta(get_the_ID() , '_thumbnail_id', true);
                                    
                                    $src = wp_get_attachment_image_src($image);
                                    ?>
                                      <img src="<?=$src[0];?>">
                                  </div>
                              </div>
                          </div>
                      </div>
<?php } ?>

                  </div>
              </div>
          </div>
      </div>
      <a href="#" class="scroll next-slide">
          <img src="<?=get_template_directory_uri();?>/images/general/icon-scrolling.svg" alt="">
      </a>
  </div>
  <?php
}

wp_reset_postdata(); // Возвращаем Wordpress в исходное состояние после нашего запроса WP_Query

  return ob_get_clean();
}
