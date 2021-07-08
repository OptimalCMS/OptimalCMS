<!DOCTYPE html>
<html lang="<?= $site->locale ?>">
<head>
  <meta charset="<?= $site->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->title ?> | <?= $site->title ?></title>
  <meta name="description" content="<?= $page->description ?>">
  <?= execute_action("head") ?>
</head>
<body>

  
  
<?= execute_action("script") ?>
</body>
</html>
