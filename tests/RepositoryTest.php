<?php

use PHPUnit\Framework\TestCase;
use src\Repository;

class RepositoryTest extends TestCase
{
    public function testSelectRepository(){
        $stub = $this->createMock(Repository::class);
        $stub->method('getNumsToSum')
            ->willReturn(array(1,3));

        $this->assertEquals(array(1,3), $stub->getNumsToSum());    }
}