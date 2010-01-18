<?php
// $Id: search-theme-form.tpl.php,v 1.1 2007/10/31 18:06:38 dries Exp $

/**
 * @file search-theme-form.tpl.php
 * Default theme implementation for displaying a search form directly into the
 * theme layout. Not to be confused with the search block or the search page.
 *
 * Available variables:
 * - $search_form: The complete search form ready for print.
 * - $search: Array of keyed search elements. Can be used to print each form
 *   element separately.
 *
 * Default keys within $search:
 * - $search['search_theme_form']: Text input area wrapped in a div.
 * - $search['submit']: Form submit button.
 * - $search['hidden']: Hidden form elements. Used to validate forms when submitted.
 *
 * Since $search is keyed, a direct print of the form element is possible.
 * Modules can add to the search form so it is recommended to check for their
 * existance before printing. The default keys will always exist.
 *
 *   <?php if (isset($search['extra_field'])): ?>
 *     <div class="extra-field">
 *       <?php print $search['extra_field']; ?>
 *     </div>
 *   <?php endif; ?>
 *
 * To check for all available data within $search, use the code below.
 *
 *   <?php print '<pre>'. check_plain(print_r($search, 1)) .'</pre>'; ?>
 *
 * @see template_preprocess_search_theme_form()
 */
?>
<div id="search" class="container-inline">
	<div id="searchbox_image">
	<input type="text" name="search_theme_form" id="edit-search-theme-form-l" size="15" maxlength="255" value="" title="Site Search" class="form-text" />
	</div>
	<input type="image" class="form-submit-main" value="" id="edit-submit-main" name="op" src=<?php print '"/' . path_to_theme() . '/images/search-go.png"' ?> alt="" width="23" height="23" border="0" />
	<input type="hidden" name="form_id" id="edit-search-theme-form" value="search_theme_form" />
	<input type="hidden" name="form_token" id="a-unique-id" value="<?php print drupal_get_token('search_theme_form'); ?>" />
</div>