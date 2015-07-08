<?php

require __DIR__ . '/vendor/autoload.php';

$latte = new Latte\Engine;

$json = ['pre <!-- foo --> post', '<!--' => 'val'];

foreach (['ok', 'fail'] as $template) {
	$raw = $latte->renderToString(__DIR__ . "/$template.latte", ['json' => $json]);
	try {
		Nette\Utils\Json::decode($raw);
		echo "$template is ok\n";
	} catch (Exception $e) {
		echo "$template failed\n";
	}
}
