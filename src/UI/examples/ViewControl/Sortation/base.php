<?php

function base() {
	//Loading factories
	global $DIC;
	$f = $DIC->ui()->factory();
	$renderer = $DIC->ui()->renderer();

	$options = array(
		'internal_rating' => 'Best',
		'date_desc' => 'Most Recent',
	);

	$s = $f->viewControl()->sortation($options)
		->withIdentifier("ord");

	$s2 = $s->withLabel($DIC->language()->txt('sortation_std_label'))
		->withIdentifier("ord2");

	//pre-selected
	$s3 = $f->viewControl()->sortation($options)
		->withLabel("Most Recent");

	return implode('<hr>', array(
		$renderer->render($s),
		$renderer->render($s2),
		$renderer->render($s3)
	));
}
