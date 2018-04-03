<?php

use PHPUnit\Framework\TestCase;

use src\Calculator;
class CalculatorTest extends TestCase
{
    public function testSum()
    {
        $calculator = new Calculator();

        $this->assertSame(20, $calculator->Sum(15,5));
    }
}