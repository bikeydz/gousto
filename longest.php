<?php
require(dirname(__FILE__).'/library/LongestIncreasingSubsequence.php');

if ($argc <2 || (!preg_match('/^[0-9]+(,[0-9]+)+$/',$argv[1]) && !file_exists($argv[1]))) {
	echo "Usage: {$argv[0]} <integers | integer file>\n\n";
	echo "eg: {$argv[0]} 1,3,5,2,6,2,4,5,2,2,5,6,7,6\n\n";
	echo "or: {$argv[0]} my_integers.txt\n\n";
	echo "integers in a file should be formatted in the same way.\n\n";
	exit;
}

if (file_exists($argv[1])) {
	$integers = explode(',',trim(file_get_contents($argv[1])));
} else {
	$integers = explode(',',$argv[1]);
}

$longIncSec = new LongestIncreasingSubsequence();

$longest = $longIncSec->calculate($integers);

if ($longest === null) {
	echo "No increasing sequences were found in the list.\n";
} else {
	echo implode(',',$longest)."\n";
}
