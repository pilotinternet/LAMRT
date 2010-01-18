<?php // $Id: block.tpl.php,v 1.1.2.2.2.1 2008/11/13 14:14:48 psynaptic Exp $ ?>
<div id="block-<?php print $block->module .'-'. $block->delta ?>" class="block block-<?php print $block->module ?>">

<?php if ($block->subject): ?>
  <h2><?php print $block->subject ?></h2>
<?php endif ?>

  <div class="content"><?php print $block->content ?></div>
</div>
