<?php // $Id: page.tpl.php,v 1.1.2.5.2.6 2009/03/12 13:24:30 psynaptic Exp $ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="content-language" content="<?php print $language->language ?>" />
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <!--[if IE]><link rel="stylesheet" href="<?php print $path ?>ie.css" type="text/css"><![endif]-->
  <!--[if lte IE 6]><link rel="stylesheet" href="<?php print $path ?>ie6.css" type="text/css"><![endif]-->


  <!-- Temporary include of Hitby's remote css file during dev -->
  <link rel="stylesheet" href="http://www.hookdesignalter.co.uk/lamrthitby.css" type="text/css" />


</head>

<body class="<?php print $body_classes ?>">
  <div id="page">

    <div id="header">
      <?php if ($header || $search_box): ?>
        <div id="header-right">
          <?php print $header ?>
          <?php print $search_box ?>
        </div>
      <?php endif ?>

      <?php if ($logo): ?>
        <a id="logo" href="<?php print $base_path ?>">
          <?php print theme('image', $logo) ?>
        </a>
      <?php endif ?>
      <?php if ($site_name): ?>
        <a id="site-name" href="<?php print $base_path ?>">
          <?php print $site_name ?>
        </a>
      <?php endif ?>
      <?php if ($site_slogan): ?>
        <span id="slogan"><?php print $site_slogan ?></span>
      <?php endif ?>
    </div>

<div id="content">
  
    <?php if ($left): ?>
      <div id="left" class="sidebar">
        <?php print $left ?>
      </div>
    <?php endif ?>

    <div id="centre">
      <?php print $messages ?>

      <?php if ($tabs): ?>
        <div class="tabs"><?php print $tabs ?></div>
      <?php endif ?>

      <?php if ($title): ?>
        <h1 class="page-title"><?php print $title ?></h1>
      <?php endif ?>

      <?php print $help ?>
      
      <?php if ($content_top): ?>
        <div id="content-top" class="region region-content_top">
          <?php print $content_top; ?>
        </div> <!-- /#content-top -->
      <?php endif; ?>
      
      <?php print $content ?>
      
      <?php if ($content_bottom): ?>
      <div id="content-bottom" class="region region-content_bottom">
        <?php print $content_bottom; ?>
      </div> <!-- /#content-bottom -->
    <?php endif; ?>
    
      <?php print $feed_icons ?>

    </div>
    </div>
    
    <!--// centre -->

    <?php if ($right): ?>
      <div id="right" class="sidebar">
        <?php print $right ?>
      </div>
    <?php endif ?>

    <?php if ($footer): ?>
      <div id="footer"><?php print $footer ?></div>
    <?php endif ?>

    <?php if ($footer_message): ?>
      <div id="footer-message"><?php print $footer_message ?></div>
    <?php endif ?>

  </div><!--// page -->
  <?php print $closure ?>
</body>
</html>
