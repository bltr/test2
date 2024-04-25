<?php

declare(strict_types=1);

namespace App;

use DateTimeImmutable;

readonly final class TariffDto
{
    public function __construct(
        public string $name,
        public int $price,
        public DateTimeImmutable $valid_until,
        public int $speed,
        public TariffType $tariff_type,
    ) {
    }
}
