<?php

kirbytext::$tags['packageBtm'] = array(
  'attr' => array(
    'prodDesc',
    'prodList',
    'prod01',
    'prod01Price',
    'prod02',
    'prod02Price',
    'prodBook'
  ),
  'html' => function($tag) {

    $prodTitle = $tag->attr('packageBtm');
    $prodDesc = $tag->attr('prodDesc');
    $prodList = $tag->attr('prodList');
    $prod01 = $tag->attr('prod01');
    $prod01Price = $tag->attr('prod01Price');
    $prod02 = $tag->attr('prod02');
    $prod02Price = $tag->attr('prod02Price');
    $prodBook = $tag->attr('prodBook');

    return '<div class="row" data-aos="fade-up">
              <div class="col-2 hidden-sm"></div>
              <div class="col-8 package">

                <div class="package-intro x-sm-padding-bottom">
                  <h2>'.$prodTitle.'</h2>
                  <p>'.$prodDesc.'</p>
                </div>

                <div class="package-included sm-padding-bottom border-top">
                  <h4>What is included</h4>
                  <ul class="content-list">'.$prodList.'</ul>
                </div>

                <div class="package-price sm-padding-bottom border-top">
                  <h4>Price</h4>
                  <div class="package-pricing">
                    <p class="small no-margin">'.$prod01.'</p>
                    <p class="small no-margin right"><strong>'.$prod01Price.'</strong></p>
                  </div>
                  <div class="package-pricing">
                    <p class="small no-margin">'.$prod02.'</p>
                    <p class="small no-margin right"><strong>'.$prod02Price.'</strong></p>
                  </div>
                </div>

                <div class="package-book border-top">
                  <a id="support-section-link" class="typeform-share button" href="'.$prodBook.'" data-mode="drawer_right">
                    <button type="button" name="button" class="button-dark-green-white button-fw">BOOK NOW</button>
                  </a>
                </div>

              </div>
              <div class="col-2 hidden-sm"></div>
            </div>';
  }
);
