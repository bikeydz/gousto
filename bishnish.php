<?php
require(dirname(__FILE__)."/library/BishNish.php");

$bishnish = new BishNish(dirname(__FILE__)."/data/countries.csv");
$bishnish->process();
