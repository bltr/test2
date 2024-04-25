<?php

declare(strict_types=1);

namespace App;

use DateTimeImmutable;

class TariffDto
{
    public function __construct(
        public readonly string $name,
        public readonly int $price,
        public readonly DateTimeImmutable $valid_until,
        public readonly int $speed,
        public readonly TariffType $tariff_type,
    ) {
    }
}
