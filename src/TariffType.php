<?php

namespace App;

enum TariffType: string
{
    case CURRENT = 'current';
    case ARCHIVE = 'archive';
    case SYSTEM = 'system';

    public static function values(): array
    {
        return array_map(fn ($case) => $case->value, self::cases());
    }
}
