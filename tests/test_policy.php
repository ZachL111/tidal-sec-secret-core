<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(74, 88, 19, 18, 5);
assert(Policy::score($signal_case_1) === 118);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(62, 99, 13, 22, 9);
assert(Policy::score($signal_case_2) === 137);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(88, 103, 11, 25, 9);
assert(Policy::score($signal_case_3) === 189);
assert(Policy::classify($signal_case_3) === "accept");
