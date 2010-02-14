<?php // $Id: node.tpl.php,v 1.1.2.3.2.2 2009/03/12 14:34:04 psynaptic Exp $ ?>
<div id="node-<?php print $node->nid ?>" class="<?php print $classes ?>">

<?php if (!$page): ?>
  <h2 class="teaser-title"><a href="<?php print $node_url ?>" title="<?php print $title ?>">
    <?php print $title ?></a></h2>
<?php endif ?>

<?php if ($submitted || $terms): ?>
  <div class="meta">
    <?php if ($submitted): ?>
      <div class="submitted"><?php print $submitted ?></div>
    <?php endif ?>
    <?php if ($terms): ?>
      <div class="terms"><?php print $terms ?></div>
    <?php endif ?>
  </div>
<?php endif ?>

  <div class="content clear-block">
    <?php print $picture ?>
    <?php print $content ?>
  </div>

<?php if ($links): ?>
  <div class="node-links"><?php print $links ?></div>
<?php endif ?>

</div>
