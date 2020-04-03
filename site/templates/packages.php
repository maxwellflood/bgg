<?php snippet('header') ?>

<!-- Header -->
<div class="page-header-wrapper background-light-grey header-image-02" data-aos="fade-down">
  <div class="container flex-center">
        <div class="row as-center">
          <div class="flex-center">
            <div class="col-2 as-center hidden-sm"></div>
            <div class="col-8 center as-center" data-aos="fade-up">
              <h1><?= $page->title()->html() ?></h1>
            </div>
            <div class="col-2 as-center hidden-sm"></div>
          </div>
        </div>
  </div>
</div>
<!-- Header End-->

<!-- Package Features -->
			<div class="background-white">
				<div class="container">

					<div class="row center med-padding-bottom" data-aos="fade-up">
						<div class="col-3 hidden-sm"></div>
						<div class="col-6">
							<h2><?= $page->introTitle()->html() ?></h2>
							<p>
                <?= $page->introCopy()->html() ?>
							</p>
						</div>
						<div class="col-3 hidden-sm"></div>
					</div>

					<div class="games-container" data-aos="fade-up">

            <?php snippet('package-showcase') ?>

					</div>

				</div>
			</div>
			<!-- Package Features End-->


<!-- CTA -->
<div class="background-light-grey">
  <div class="container">

    <div class="row">
      <div class="col-2 hidden-sm"></div>
        <div class="col-8 center">
          <h2><?= $page->ctaTitle()->html() ?></h2>
          <?= $page->ctaText()->kirbytext() ?>
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
