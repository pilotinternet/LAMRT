<?php // $Id: comment.tpl.php,v 1.1.2.4 2008/09/12 21:50:37 psynaptic Exp $ ?>
<div class="<?php print $comment_classes ?>">

<?php if ($picture): ?>
  <div class="picture">
    <?php print $picture ?>
  </div>
<?php endif ?>

<?php if ($comment->new): ?>
  <a id="new"></a>
  <span class="new"><?php print $new ?></span>
<?php endif ?>

  <div class="date">
    <?php print $comment_date ?>
  </div>

<?php if ($title): ?>
  <h2><?php print $title ?></h2>
<?php endif ?>

<?php if ($submitted): ?>
  <span class="username"><?php print t('By !user', array('!user' => theme('username', $comment))) ?></span>
<?php endif ?>

  <div class="content"><?php print $content ?></div>

<?php if ($links): ?>
  <div class="comment-links"><?php print $links ?></div>
<?php endif ?>
</div>
