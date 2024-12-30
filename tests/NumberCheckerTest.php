<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/NumberChecker.php';

class NumberCheckerTest extends TestCase
{
    public function testIsEvenWithEvenNumber()
    {
        $numberChecker = new NumberChecker(4);
        $this->assertTrue($numberChecker->isEven(), "4 hauria de ser parell.");
    }

    public function testIsEvenWithOddNumber()
    {
        $numberChecker = new NumberChecker(5);
        $this->assertFalse($numberChecker->isEven(), "5 no hauria de ser parell.");
    }

    public function testIsPositiveWithPositiveNumber()
    {
        $numberChecker = new NumberChecker(3);
        $this->assertTrue($numberChecker->isPositive(), "3 hauria de ser positiu.");
    }

    public function testIsPositiveWithNegativeNumber()
    {
        $numberChecker = new NumberChecker(-1);
        $this->assertFalse($numberChecker->isPositive(), "-1 no hauria de ser positiu.");
    }

    public function testIsPositiveWithZero()
    { 
        $numberChecker = new NumberChecker(0);
        $this->assertFalse($numberChecker->isPositive(), "0 no és positiu.");
    }
}
?>
