<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use thomasdcodes\IsbnLibrary;

class IsbnLibraryTest extends TestCase
{
    public function testSanitizeIsbnWith()
    {
        $sanitizedIsbn = IsbnLibrary::sanitizeIsbn('978-3-123-45677-8');

        $this->assertEquals('9783123456778', $sanitizedIsbn);
    }

    public function testIsIsbn13ValidWithValidIsbn()
    {
        $isValid = IsbnLibrary::isIsbn13Valid('978-3-123-45677-0');

        $this->assertTrue($isValid);
    }

    public function testIsIsbn13ValidWithInvalidIsbn()
    {
        $isValid = IsbnLibrary::isIsbn13Valid('978-3-123-45677-8');

        $this->assertFalse($isValid);
    }

    public function testCalculateIsbn13CheckNumberWithResultOf0()
    {
        $checkNumber = IsbnLibrary::calculateIsbn13CheckNumber('978-3-123-45677');

        $this->assertEquals(0, $checkNumber);
    }

    public function testCalculateIsbn13CheckNumberWithResultOf1()
    {
        $checkNumber = IsbnLibrary::calculateIsbn13CheckNumber('978-3-123-45670');

        $this->assertEquals(1, $checkNumber);
    }

    public function testCalculateIsbn13CheckNumberWithResultOf2()
    {
        $checkNumber = IsbnLibrary::calculateIsbn13CheckNumber('978-3-123-45673');

        $this->assertEquals(2, $checkNumber);
    }

    public function testCalculateIsbn13CheckNumberWithResultOf3()
    {
        $checkNumber = IsbnLibrary::calculateIsbn13CheckNumber('978-3-123-45676');

        $this->assertEquals(3, $checkNumber);
    }

    public function testCalculateIsbn13CheckNumberWithResultOf4()
    {
        $checkNumber = IsbnLibrary::calculateIsbn13CheckNumber('978-3-123-45679');

        $this->assertEquals(4, $checkNumber);
    }

    public function testCalculateIsbn13CheckNumberWithResultOf5()
    {
        $checkNumber = IsbnLibrary::calculateIsbn13CheckNumber('978-3-123-45672');

        $this->assertEquals(5, $checkNumber);
    }

    public function testCalculateIsbn13CheckNumberWithResultOf6()
    {
        $checkNumber = IsbnLibrary::calculateIsbn13CheckNumber('978-3-123-45675');

        $this->assertEquals(6, $checkNumber);
    }

    public function testCalculateIsbn13CheckNumberWithResultOf7()
    {
        $checkNumber = IsbnLibrary::calculateIsbn13CheckNumber('978-3-123-45678');

        $this->assertEquals(7, $checkNumber);
    }

    public function testCalculateIsbn13CheckNumberWithResultOf8()
    {
        $checkNumber = IsbnLibrary::calculateIsbn13CheckNumber('978-3-123-45671');

        $this->assertEquals(8, $checkNumber);
    }

    public function testCalculateIsbn13CheckNumberWithResultOf9()
    {
        $checkNumber = IsbnLibrary::calculateIsbn13CheckNumber('978-3-123-45674');

        $this->assertEquals(9, $checkNumber);
    }
}
