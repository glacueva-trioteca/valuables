<?php

namespace Valuables\Domain\Traits;

trait ArrayableEnum
{
    use HasLabels;
    use HasDescription;
    use HasTitle;

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function labels(): array
    {
        return self::labels();
    }

    public static function array(): array
    {
        return array_combine(self::values(), self::names());
    }

    public static function reverseArray(): array
    {
        return array_combine(self::names(), self::values());
    }

    public static function dropdownOptions(): array
    {
        return array_combine(self::values(), self::values());
    }

    public static function filterOptions(): array
    {
        return array_combine(self::labels(), self::values());
    }

    public static function dropdownOptionsWithLabels(): array
    {
        return array_combine(self::values(), self::labels());
    }
}
