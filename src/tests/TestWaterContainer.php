<?php

namespace SoConnect\Coffee\Tests;

use PHPUnit\Framework\TestCase;
use SoConnect\Espresso\Containers\WaterContainer\WaterContainer;

class TestWaterContainer extends TestCase
{
    /**
     * @test
     * @covers \SoConnect\Coffee\Containers\BeanContainer\BeanContainer::addWater
     */
    public function testWaterContainerCanAddWater(): void
    {
        $waterContainer = new WaterContainer(10.0);

        $waterContainer->addWater(5.4);
        $this->assertEquals(15.4, $waterContainer->getWater());

        $waterContainer->addWater(2);
        $this->assertEquals(17.4, $waterContainer->getWater());

        $waterContainer->addWater(1000);
        $this->assertEquals(1017.4, $waterContainer->getWater());
    }
}
