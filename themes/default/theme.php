<!DOCTYPE html>
<html lang="<?= site->locale ?>">
<head>
  <meta charset="<?= site->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= page->title ?> | <?= site->title ?></title>
  <?= siteHead() ?>
</head>
<body>
  <footer class="">
    <p>
      <?= block->footer ?>
    </p>
    <p class="powered">
      Proudly Powered by <a href="https://optimalcms.github.io/" target="_blank">OptimalCMS</a>
    </p>
  </footer>
  <?= siteEnd() ?>
</body>
</html>
