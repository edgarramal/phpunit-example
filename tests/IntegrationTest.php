<?php

use PHPUnit\Framework\TestCase;

class IntegrationTest extends TestCase
{
    public function testController(){
        $controller=new \src\Controller();
        $this->assertSame(4, $controller->SumDataFromRepository());
    }
}