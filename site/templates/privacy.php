<?php snippet('header') ?>

    <!-- Header -->
    <div class="page-header-wrapper background-light-grey header-image-01">
      <div class="container flex-center">
            <div class="row as-center">
              <div class="flex-center">
                <div class="col-12 center as-center" data-aos="fade-up">
                  <h1><?= $page->title()->html() ?></h1>
                </div>
              </div>
            </div>
      </div>
    </div>
    <!-- Header End-->

    <!-- Features -->
    <div class="background-white">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-3 hidden-sm"></div>
          <div class="col-6">
            <h2><?= $page->introTitle()->html() ?></h2>
            <p>
              <?= $page->introCopy()->kirbytext() ?>
            </p>
          </div>
          <div class="col-3 hidden-sm"></div>
        </div>

      </div>
    </div>
    <!-- Features End-->


<?php snippet('footer') ?>
