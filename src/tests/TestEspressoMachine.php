<?php

namespace SoConnect\Espresso\Tests;

use PHPUnit\Framework\TestCase;
use SoConnect\Coffee\Containers\BeanContainer\BeanContainer;
use SoConnect\Espresso\Containers\WaterContainer\WaterContainer;
use SoConnect\Espresso\EspressoMachine\EspressoMachine;

class TestEspressoMachine extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine\EspressoMachine
     */
    public function testEspressoGetters()
    {
        $beanContainer = new BeanContainer(5);
        $waterContainer = new WaterContainer(0.0);
        $espressoMachineA = new EspressoMachine($beanContainer, $waterContainer, 'empty');

        $this->assertInstanceOf(BeanContainer::class, $espressoMachineA->getBeanContainer());
        $this->assertInstanceOf(WaterContainer::class, $espressoMachineA->getWaterContainer());
        $this->assertEquals('empty', $espressoMachineA->getStatus());
    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine\EspressoMachine::makeEspresso
     */
    public function testEspressoMachineCanMakeSingleEspresso()
    {
        $beanContainer = new BeanContainer(50);
        $waterContainer = new WaterContainer(10.0);
        $espressoMachineA = new EspressoMachine($beanContainer, $waterContainer, 'full');

        $espressoMachineA->makeEspresso();
        $this->assertEquals(9.75, $waterContainer->getWater());

        $espressoMachineA->makeEspresso();
        $this->assertEquals(9.50, $waterContainer->getWater());
    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine\EspressoMachine::makeDoubleEspresso
     */
    public function testEspressoMachineCanMakeDoubleEspresso()
    {

    }
}
