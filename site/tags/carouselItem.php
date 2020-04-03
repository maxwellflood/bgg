<?php

kirbytext::$tags['carouselItem'] = array(
  'attr' => array(
    'pageLink',
    'imageLoc',
    'image'
  ),
  'html' => function($tag) {

    $imageTitle = $tag->attr('carouselItem');
    $pageLink = $tag->attr('pageLink');
    $imageLoc = $tag->attr('imageLoc');
    $image = $tag->attr('image');

    return '<div class="swiper-slide hover-shadow">
              <a href="/'. $pageLink .'">
                <div>
                  <img src="content/'. $imageLoc .'/'. $image .'" alt="'. $imageTitle .'">
                  <h4>'. $imageTitle .'</h4>
                  <button class="small-button-outline-gold">Learn more</button>
                </div>
              </a>
            </div>';
  }
);
