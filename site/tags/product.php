<?php

kirbytext::$tags['product'] = array(
  'attr' => array(
    'prodDesc',
    'prodList',
    'prodDim',
    'prodRules',
    'prodBook'
  ),
  'html' => function($tag) {

    $prodTitle = $tag->attr('product');
    $prodDesc = $tag->attr('prodDesc');
    $prodList = $tag->attr('prodList');
    $prodDim = $tag->attr('prodDim');
    $prodRules = $tag->attr('prodRules');
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
                  <h4>Dimensions</h4>
                  <ul class="content-list">'.$prodDim.'</ul>
                </div>

                <div class="package-intro x-sm-padding-bottom border-top">
                  <h4>Rules</h4>
                  <p>'.$prodRules.'</p>
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
