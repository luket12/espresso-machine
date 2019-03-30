<?php

namespace SoConnect\Coffee\Tests;

use PHPUnit\Framework\TestCase;
use SoConnect\Espresso\Containers\ContainerException;
use SoConnect\Espresso\Containers\ContainerFullException;
use SoConnect\Espresso\Containers\WaterContainer\WaterContainer;

class TestWaterContainer extends TestCase
{
    /**
     * @test
     * @covers \SoConnect\Espresso\Containers\WaterContainer\WaterContainer::addWater
     */
    public function testWaterContainerCanAddWater(): void
    {
        $waterContainer = new WaterContainer(10.0, 1020);

        $waterContainer->addWater(5.4);
        $this->assertEquals(15.4, $waterContainer->getWater());

        $waterContainer->addWater(2);
        $this->assertEquals(17.4, $waterContainer->getWater());

        $waterContainer->addWater(1000);
        $this->assertEquals(1017.4, $waterContainer->getWater());
    }

    /**
     * @test
     * @covers \SoConnect\Espresso\Containers\WaterContainer\WaterContainer::addWater
     */
    public function testFullWaterContainerThrowsException()
    {
        $waterLimit = 20.0;

        $beanContainer = new WaterContainer(10.0, $waterLimit);

        $beanContainer->addWater(10.0);

        $this->expectException(ContainerFullException::class);
        $beanContainer->addWater(1.0);
    }

    /**
     * @test
     * @covers \SoConnect\Espresso\Containers\WaterContainer\WaterContainer::useWater
     */
    public function testEmptyWaterContainerThrowsException()
    {
        $waterContainer = new WaterContainer(10.0, 25.0);
        $waterContainer->useWater(10.0);
        $this->expectException(ContainerException::class);
        $waterContainer->useWater(1.0);
    }
}
