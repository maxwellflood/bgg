<?php snippet('header') ?>


<!-- Header -->
<div class="page-header-wrapper background-light-grey" data-aos="fade-down">

  <div class="header-image">
    <?php $image=$page->image('03-header.jpg'); ?>
    <?php
      if ($image): ?>
      <img src="<?= $image->url() ?>" alt="fuck">
    <?php endif ?>
  </div>

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

<!-- Product Info -->
<div class="background-white">
  <div class="container">

    <?= $page->productInfo()->kirbytext() ?>

  </div>
</div>
<!-- Product Info End -->

<!-- Product Showcase -->

<div class="background-white desktop">
  <div class="container full-width padding-half">
    <div class="row" data-aos="fade-up">
      <div class="col-12">
        <?php $productImage = $page->images()->first(); ?>
        <img src="<?= $productImage->url() ?>" alt="<?= $page->title()->html() ?> package image" />
      </div>
    </div>
  </div>
</div>

<!-- Product Showcase End-->

<!-- Extras -->
<div class="background-white">
	<div class="container" data-aos="fade-up">

		<div class="row x-sm-padding-bottom">
			<div class="col-2 hidden-sm"></div>
			<div class="col-8 center">
				<h2><?= $page->extrasTitle()->html() ?></h2>
        <p><?= $page->extrasText()->html() ?></p>
			</div>
			<div class="col-2 hidden-sm"></div>
		</div>

		<div class="row x-sm-padding-bottom">
      <?php foreach($page->extrasImages()->toStructure() as $item): ?>
        <?php $icon = $page->image($item->icon()); ?>

        <div class="col-4 center">
					<a href="../custom-branding">
						<img src="../assets/images/pl-1200x800.png" alt="custom branding image" data-echo="<?= $icon->url() ?>">
            <p class="micro"><?= $item->title()->html() ?></p>
					</a>
				</div>

      <?php endforeach ?>
		</div>

    <div class="row">
			<div class="col-12 center">
        <a class="button" href="../custom-branding">
          <button type="button" name="button" class="button-dark-green-white">Find out more</button>
        </a>
			</div>
		</div>

	</div>

</div>
<!-- Extras End-->


<!-- CTA -->
<div class="background-light-grey">
  <div class="container">

    <div class="row"  data-aos="fade-up">
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
