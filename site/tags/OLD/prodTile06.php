<?php

kirbytext::$tags['prodTile02'] = array(
  'attr' => array(
    'prodDesc',
    'pageLink',
    'imageLoc',
    'image'
  ),
  'html' => function($tag) {

    $prodTitle = $tag->attr('prodTile02');
    $prodDesc = $tag->attr('prodDesc');
    $pageLink = $tag->attr('pageLink');
    $imageLoc = $tag->attr('imageLoc');
    $image = $tag->attr('image');

    return '<div class="text-image-module">
              <div class="four-col flex-item-center one-col-right text-order-mobile">
                <h2>'. $prodTitle .'</h2>
                <p>'. $prodDesc .'</p>
                <a href="'. $pageLink .'" class="large-button-outline-gold">Learn more</a>
              </div>
              <div class="seven-col image-order-mobile">
                <img src="content/'. $imageLoc .'/'. $image .'" alt="'. $prodTitle .'">
              </div>
            </div>';
  }
);
