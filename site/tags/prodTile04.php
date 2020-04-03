<?php

kirbytext::$tags['prodTile04'] = array(
  'attr' => array(
    'prodDesc',
    'imageLoc',
    'image'
  ),
  'html' => function($tag) {

    $prodTitle = $tag->attr('prodTile04');
    $prodDesc = $tag->attr('prodDesc');
    $imageLoc = $tag->attr('imageLoc');
    $image = $tag->attr('image');

    return '<div class="text-image-module">
              <div class="five-col flex-item-center one-col-right text-order-mobile">
                <h3>'. $prodTitle .'</h3>
                <p>'. $prodDesc .'</p>
              </div>
              <div class="six-col image-order-mobile">
                <img src="content/'. $imageLoc .'/'. $image .'" alt="'. $prodTitle .'">
              </div>
            </div>';
  }
);
