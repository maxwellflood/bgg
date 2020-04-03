<?php snippet('header') ?>

    <!-- Header -->
    <div class="page-header-wrapper background-light-grey header-image-02" data-aos="fade-down">
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
              <?= $page->introCopy()->html() ?>
            </p>
          </div>
          <div class="col-3 hidden-sm"></div>
        </div>

      </div>
    </div>
    <!-- Features End-->

    <!-- Image(s) -->

    <div class="background-white desktop">
      <div class="container full-width padding-half">
        <div class="row" data-aos="fade-up">
          <div class="col-12">
            <?php $productImage = $page->images()->first(); ?>
            <img src="<?= $productImage->url() ?>" class="burlington-games-image" />
          </div>
        </div>
      </div>
    </div>

    <!-- Image(s) -->

    <!-- Features -->
    <div class="background-white">
      <div class="container">

        <div class="row med-padding-bottom" data-aos="fade-up">
          <div class="col-3 hidden-sm"></div>
          <div class="col-6">
            <h2><?= $page->servicesTitle()->html() ?></h2>
            <p>
              <?= $page->servicesCopy()->kirbytext() ?>
            </p>
          </div>
          <div class="col-3 hidden-sm"></div>
        </div>

        <div class="row med-padding-bottom" data-aos="fade-up">
          <div class="col-3 hidden-sm"></div>
          <div class="col-6">
            <h2><?= $page->whyTitle()->html() ?></h2>
            <p>
              <?= $page->whyCopy()->kirbytext() ?>
            </p>
          </div>
          <div class="col-3 hidden-sm"></div>
        </div>

      </div>
    </div>
    <!-- Features End-->


    <!-- CTA -->
    <div class="background-light-grey">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-2 hidden-sm"></div>
            <div class="col-8 center">
              <h2><?= $page->ctaTitle()->html() ?></h2>
              <p><?= $page->ctaText()->html() ?></p>
              <a class="typeform-share button" href="https://maxwellflood1.typeform.com/to/EYuGqK" data-mode="drawer_right">
    						<button type="button" name="button" class="button-dark-green-white">GET A QUOTE NOW</button>
    					</a>
            </div>
            <div class="col-2 hidden-sm"></div>
          </div>
        </div>

    </div>
    <!-- CTA End-->

<?php snippet('footer') ?>
