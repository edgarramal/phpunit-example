<?php

use PHPUnit\Framework\TestCase;

use src\Calculator;

class CalculatorTest extends TestCase
{
    private $calculator;
    public function __construct()
    {
        $this->calculator = new Calculator();
    }

    public function testSum()
    {
        $this->assertSame(20, $this->calculator->Sum(15, 5));
    }

    public function testMod()
    {
        $this->assertSame(0, $this->calculator->Mod($a,$b));
    }
}