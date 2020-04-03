<?php

$games = page('games-packages')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of games:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $games = $games->limit($limit);

?>

  <?php foreach($games as $game): ?>


  <div class="row med-padding-bottom mix <?= $game->gameType()->html() ?>">
    <div class="flex-center">

      <div class="col-7">
        <?php if($image = $game->images()->sortBy('sort', 'asc')->last()): $thumb = $image; ?>
          <img src="../assets/images/pl-1200x800.png" alt="" data-echo="<?= $thumb->url() ?>">
        <?php endif ?>
      </div>
      <div class="col-4 as-center">
        <h2><?= $game->title()->html() ?></h2>
        <p><?= $game->introText()->html() ?></p>
        <a class="button" href="<?= $game->url() ?>">
          <button type="button" name="button" class="button-dark-green-white">Learn more</button>
        </a>
      </div>
      <div class="col-1 hidden-sm"></div>
    </div>
  </div>


  <?php endforeach ?>
