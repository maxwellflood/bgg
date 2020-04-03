<?php

kirbytext::$tags['prodTile04'] = array(
  'attr' => array(
    'prodDesc',
    'pageLink',
    'imageLoc',
    'image'
  ),
  'html' => function($tag) {

    $prodTitle = $tag->attr('prodTile04');
    $prodDesc = $tag->attr('prodDesc');
    $pageLink = $tag->attr('pageLink');
    $imageLoc = $tag->attr('imageLoc');
    $image = $tag->attr('image');

    return '<div class="text-image-module">
              <div class="four-col flex-item-center one-col-right one-col-left text-order-mobile">
                <h3>'. $prodTitle .'</h3>
                <p>'. $prodDesc .'</p>
              </div>
              <div class="six-col image-order-mobile">
                <img src="content/'. $imageLoc .'/'. $image .'" alt="'. $prodTitle .'">
              </div>
            </div>';
  }
);
