<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(66, 87, 14, 11, 11);
assert(Policy::score($signal_case_1) === 152);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(86, 80, 13, 14, 6);
assert(Policy::score($signal_case_2) === 162);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(78, 72, 17, 25, 10);
assert(Policy::score($signal_case_3) === 90);
assert(Policy::classify($signal_case_3) === "review");
