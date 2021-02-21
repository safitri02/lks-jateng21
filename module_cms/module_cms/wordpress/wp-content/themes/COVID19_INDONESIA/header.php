<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_bloginfo('stylesheet_directory') ?>/asset/css/base.css">
    <link rel="stylesheet" href="<?= get_bloginfo('stylesheet_directory') ?>/asset/css/style.css">
    <title><?= bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>
<body>

<navbar>
<?= wp_nav_menu() ?>
</navbar>




