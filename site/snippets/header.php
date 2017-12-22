<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
    <meta charset="UTF-8">
    <link href="http://gmpg.org/xfn/11" rel="profile">

    <!-- Enable responsiveness on mobile devices-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
      <?php e($page->isHomePage(),
        $site->title() . ' · ' . $site->tagline(),
        $page->title() . ' · ' . $site->title()
      ) ?>
    </title>

    <!-- CSS -->
    <?= css(array('assets/css/poole.css', 'assets/css/syntax.css')) ?>
    
    <!-- Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $site->url() ?>/assets/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" href="<?= $site->url() ?>/assets/favicon.ico">

    <!-- Planned: RSS -->
    <!--  <link rel="alternate" type="application/rss+xml" title="RSS" href="/atom.xml">-->
  </head>
  <body>

    <div class="container content">
      <header class="masthead">
        <h3 class="masthead-title">
          <a href="<?= $site->url() ?>" title="Home"><?= $site->title() ?></a>
          <small><?= $site->tagline() ?></small>
        </h3>
      </header>

      <main>