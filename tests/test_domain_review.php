<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(76, 24, 20, 93);
assert(DomainReviewLens::score($item) === 209);
assert(DomainReviewLens::lane($item) === "ship");
