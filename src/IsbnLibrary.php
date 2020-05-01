<?php

declare(strict_types=1);

namespace thomasdcodes;

class IsbnLibrary
{
    public static function sanitizeIsbn(string $isbn): string
    {
        return str_replace('-', '', $isbn);
    }

    public static function isIsbn13Valid(string $isbn): bool
    {
        $isbn = static::sanitizeIsbn($isbn);

        return static::calculateIsbn13CheckNumber($isbn) === (int)substr($isbn, -1, 1);
    }

    public static function calculateIsbn13CheckNumber(string $isbn): int
    {
        $isbn = static::sanitizeIsbn($isbn);

        $numbers = [];
        for ($i = 0; $i <= 11; $i++) {
            $numbers[$i] = ($i % 2 == 0) ? substr($isbn, $i, 1) : substr($isbn, $i, 1) * 3;
        }

        $checkNumber = 10 - (array_sum($numbers) % 10);

        return ($checkNumber == 10) ? 0 : $checkNumber;
    }
}
