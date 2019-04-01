<?php

namespace SoConnect\Espresso\Tests;

use PHPUnit\Framework\TestCase;
use SoConnect\Coffee\Containers\BeanContainer\BeanContainer;
use SoConnect\Espresso\Containers\WaterContainer\WaterContainer;
use SoConnect\Espresso\EspressoMachine\EspressoMachine;

class EspressoMachineTest extends TestCase
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
        $waterContainer = new WaterContainer(1.0);
        $espressoMachineA = new EspressoMachine($beanContainer, $waterContainer, '4 Espressos left');

        $this->assertInstanceOf(BeanContainer::class, $espressoMachineA->getBeanContainer());
        $this->assertInstanceOf(WaterContainer::class, $espressoMachineA->getWaterContainer());
        $this->assertEquals('4 Espressos left', $espressoMachineA->getStatus());
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
        $beanContainer = new BeanContainer(50);
        $waterContainer = new WaterContainer(10.0);
        $espressoMachineA = new EspressoMachine($beanContainer, $waterContainer, 'full');

        $espressoMachineA->makeDoubleEspresso();
        $this->assertEquals(9.50, $waterContainer->getWater());

        $espressoMachineA->makeDoubleEspresso();
        $this->assertEquals(9.00, $waterContainer->getWater());
    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine\EspressoMachine::getStatus
     */
    public function testEspressoStatusesReportCorrectly()
    {
        $waterContainerA = new WaterContainer(0);
        $beanContainerA =  new BeanContainer(0);
        $espressoMachineA = new EspressoMachine($beanContainerA, $waterContainerA);

        $this->assertEquals('Add beans and water', $espressoMachineA->getStatus());

        $waterContainerB = new WaterContainer(10.0);
        $beanContainerB =  new BeanContainer(0);
        $espressoMachineB = new EspressoMachine($beanContainerB, $waterContainerB);

        $this->assertEquals('Add beans', $espressoMachineB->getStatus());

        $waterContainerB = new WaterContainer(0);
        $beanContainerB =  new BeanContainer(10);
        $espressoMachineB = new EspressoMachine($beanContainerB, $waterContainerB);

        $this->assertEquals('Add water', $espressoMachineB->getStatus());

        $waterContainerC = new WaterContainer(10.0);
        $beanContainerC =  new BeanContainer(10);
        $espressoMachineC = new EspressoMachine($beanContainerC, $waterContainerC);

        $this->assertEquals('40 Espressos left', $espressoMachineC->getStatus());
    }
}
