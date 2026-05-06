<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(49, 39, 15, 89);
assert(DomainReviewLens::score($item) === 181);
assert(DomainReviewLens::lane($item) === "ship");
