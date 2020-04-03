<?php snippet('header') ?>

    <!-- Header -->
    <div class="page-header-wrapper background-light-grey header-image-01" data-aos="fade-down">
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

        <div class="row lg-padding-bottom" data-aos="fade-up">
          <div class="col-3 hidden-sm"></div>
          <div class="col-6">
            <h2><?= $page->introTitle()->html() ?></h2>
            <p>
              <?= $page->introCopy()->html() ?>
            </p>
          </div>
          <div class="col-3 hidden-sm"></div>
        </div>


        <div class="row lg-padding-bottom" data-aos="fade-up">
          <div class="flex-center">

            <div class="col-8">
              <img src="../assets/images/pl-1200x800.png" alt="" data-echo="../content/custom-branding/<?= $page->block01Image()->html() ?>">
            </div>
            <!-- <div class="col-1 hidden-sm"></div> -->
            <div class="col-4 as-center">
              <h2><?= $page->block01Title()->html() ?></h2>
              <p><?= $page->block01Text()->html() ?></p>
              <a id="support-section-link" class="typeform-share button" href="https://maxwellflood1.typeform.com/to/EYuGqK" data-mode="drawer_right">
    						<button type="button" name="button" class="button-dark-green-white">GET A QUOTE</button>
    					</a>
            </div>
          </div>
        </div>

        <div class="row lg-padding-bottom" data-aos="fade-up">
          <div class="flex-center">

            <div class="col-4 as-center mob-second-el">
              <h2><?= $page->block02Title()->html() ?></h2>
              <p><?= $page->block02Text()->html() ?></p>
              <a id="support-section-link" class="typeform-share button" href="https://maxwellflood1.typeform.com/to/EYuGqK" data-mode="drawer_right">
    						<button type="button" name="button" class="button-dark-green-white">GET A QUOTE</button>
    					</a>
            </div>
            <!-- <div class="col-1 hidden-sm mob-second-el"></div> -->
            <div class="col-8 mob-first-el">
              <img src="../assets/images/pl-1200x800.png" alt="" data-echo="../content/custom-branding/<?= $page->block02Image()->html() ?>">
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Features End-->

    <!-- CTA -->
    <div class="background-light-grey">
      <div class="container">

        <div class="row">
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
