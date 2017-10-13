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
