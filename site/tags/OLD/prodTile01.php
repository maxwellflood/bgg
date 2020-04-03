<?php

kirbytext::$tags['prodTile01'] = array(
  'attr' => array(
    'prodDesc',
    'pageLink',
    'imageLoc',
    'image'
  ),
  'html' => function($tag) {

    $prodTitle = $tag->attr('prodTile01');
    $prodDesc = $tag->attr('prodDesc');
    $imageLoc = $tag->attr('imageLoc');
    $image = $tag->attr('image');

    return '<div class="text-image-module">
              <div class="seven-col image-order-mobile">
                <img src="content/'. $imageLoc .'/'. $image .'" alt="'. $prodTitle .'">
              </div>
              <div class="four-col flex-item-center one-col-left text-order-mobile">
                <h3>'. $prodTitle .'</h3>
                <p>'. $prodDesc .'</p>
              </div>
            </div>';
  }
);
