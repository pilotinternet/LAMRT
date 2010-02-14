<?php
// $Id: template.php,v 1.1.2.7.2.7 2009/03/16 10:25:03 psynaptic Exp $

// Auto-rebuild the theme registry during theme development.
if (theme_get_setting('clean_rebuild_registry')) {
  drupal_rebuild_theme_registry();
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function phptemplate_preprocess_node(&$vars, $hook) {
  $node = $vars['node'];

  // Create node classes.
  $vars['classes'] = phptemplate_node_classes($vars);

  switch ($node->type) {
    case 'blog':
      $vars['submitted'] = clean_blog_date($node);
      break;
  }
}

function _phptemplate_create_linked_vars($node, $field)
{
  $arr=array();
  $data=$node->$field;
  if($data) {
    $entry=$data[0];
    if($entry["nid"]) {
      foreach($data as $c) {
        if($detail=node_load($c["nid"])) {
          $arr[]=$detail;
        }
      }
    }
  }
  return $arr;
} 


/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
function phptemplate_preprocess_page(&$vars, $hook) {
  $vars['path'] = base_path() . path_to_theme() .'/';
  $vars['logo'] = preg_replace('@^'. base_path() .'@', '', $vars['logo']);
}

/**
 * Create node classes for node templates files.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @return $classes
 *   A string of node classes for inserting into the node template.
 */
function phptemplate_node_classes($vars) {
  $node = $vars['node'];
  $classes = 'node node-'. $node->type .' node-'. $node->type .'-';
  if ($vars['page']) {
    $classes .= 'page';
  }
  elseif ($vars['teaser']) {
    $classes .= 'teaser';
  }
  if ($vars['sticky']) {
    $classes .= ' sticky';
  }
  if (!$vars['status']) {
    $classes .= ' node-unpublished';
  }
  return $classes;
}

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
function phptemplate_preprocess_comment(&$vars, $hook) {
  $comment = $vars['comment'];
  $vars['comment_date'] = clean_comment_date($comment);
  $vars['comment_classes'] = 'comment'. ($comment->new ? ' comment-new' : '');
  $vars['comment_classes'] .= ($comment->status == COMMENT_NOT_PUBLISHED) ? ' comment-unpublished' : '';
  $vars['comment_classes'] .= ' '. $vars['zebra'] .' clear-block';
}

/**
 * Formats calendar style dates for blog posts.
 *
 * @param $node
 *   The node object from which to extract submitted date information.
 * @return themed date.
 */
function clean_blog_date($node) {
  $day = format_date($node->created, 'custom', "j");
  $month = format_date($node->created, 'custom', "M");
  $year = format_date($node->created, 'custom', "Y");
  $output = '<span class="day">'. $day .'</span>';
  $output .= '<span class="month">'. $month .'</span>';
  $output .= '<span class="year">'. $year .'</span>';
  return $output;
}

/**
 * Formats calendar style dates for comments.
 *
 * @param $comment
 *   The comment object from which to extract submitted date information.
 * @return themed date.
 */
function clean_comment_date($comment) {
  $day = format_date($comment->timestamp, 'custom', 'd M');
  $time = format_date($comment->timestamp, 'custom', 'H:i');
  $output = '<span class="day">'. $day .'</span>';
  $output .= '<span class="time">'. $time .'</span>';
  return $output;
}
