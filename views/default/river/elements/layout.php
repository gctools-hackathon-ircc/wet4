<?php
/**
 * Layout of a river item
 *
 * @uses $vars['item'] ElggRiverItem
 */

$item = $vars['item'];

echo elgg_view('page/components/image_block', array(
	'image' => elgg_view('river/elements/image', $vars),
	'body' => elgg_view('river/elements/body', $vars),
	'class' => 'col-xs-12  panel panel-river',
));