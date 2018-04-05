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
        $this->assertSame(190, $this->calculator->Sum(200, -10));
        $this->assertInternalType("int", $this->calculator->Sum(1,2));
    }

    public function testMod()
    {
        $this->assertSame(0, $this->calculator->Mod(10,2));
    }
}