<?php
require(dirname(__FILE__)."/library/WordInverter.php");

if ($argc < 2) {
	echo "Usage: {$argv[0]} <sentence>\n\n";
	exit;
}
var_dump($argv);die();

// shift the first value for file name
array_shift($argv);

$text = implode(" ",$argv);

$wordInverter =  new WordInverter();
echo $wordInverter->reverse($text);
