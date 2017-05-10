<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class mysterynumberTest extends TestCase
{

    public function testNumberIsGreaterThanOrEqualTo0()
    {
        $mystery = new MysteryNumber();
        $this->assertGreaterThanOrEqual(0, $mystery->getNumber());
        // $this->assertLessThanOrEqual(9, $mystery->getNumber());
    }

    public function testNumberIsLessThanOrEqualTo9()
    {
        $mystery = new MysteryNumber();
        $this->assertLessThanOrEqual(9, $mystery->getNumber());
    }

    public function testNumberIsNumber()
    {
        $mystery = new MysteryNumber();
        $this->assertInternalType('integer', $mystery->getNumber());
    }

    public function testSubmit()
    {
        $mystery = new MysteryNumber();
        $this->assertInternalType('boolean', $mystery->submit(2));
    }
}
