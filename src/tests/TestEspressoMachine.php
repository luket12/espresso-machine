<?php

namespace SoConnect\Espresso\Tests;

use PHPUnit\Framework\TestCase;
use SoConnect\Espresso\EspressoMachine;

class TestEspressoMachine extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine
     */
    public function testEspressoGettersAndSetters()
    {
        $espressoMachineA = new EspressoMachine(0, 0.0, 'none');

        $this->assertEquals(0, $espressoMachineA->getBeans());
        $this->assertEquals(0.0, $espressoMachineA->getWater());
        $this->assertEquals('none', $espressoMachineA->getStatus());

        $espressoMachineB = new EspressoMachine(9, 24.5, 'working');

        $this->assertEquals(9, $espressoMachineB->getBeans());
        $this->assertEquals(24.5, $espressoMachineB->getWater());
        $this->assertEquals('working', $espressoMachineB->getStatus());
    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine::addBeans
     */
    public function testEspressoMachineCanAddBeans()
    {
        $espressoMachine = new EspressoMachine(9, 24.5, 'working');

        $espressoMachine->addBeans(5);
        $this->assertEquals(14, $espressoMachine->getBeans());

        $espressoMachine->addBeans(2);
        $this->assertEquals(16, $espressoMachine->getBeans());

        $espressoMachine->addBeans(1000);
        $this->assertEquals(1016, $espressoMachine->getBeans());
    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine::addWater
     */
    public function testEspressoMachineCanAddWater()
    {
        $espressoMachine = new EspressoMachine(9, 24.5, 'working');

        $espressoMachine->addWater(1.0);
        $this->assertEquals(25.5, $espressoMachine->getWater());

        $espressoMachine->addWater(22.3);
        $this->assertEquals(47.8, $espressoMachine->getWater());

        $espressoMachine->addWater(19000.254);
        $this->assertEquals(19048.054, $espressoMachine->getWater());
    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine::addWater
     */
    public function testFullWaterContainerThrowsException()
    {

    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine::makeEspresso
     */
    public function testEmptyWaterContainerThrowsException()
    {

    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine::addBeans
     */
    public function testFullBeanContainerThrowsException()
    {

    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine::makeEspresso
     */
    public function testEmptyBeanContainerThrowsException()
    {

    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine::makeEspresso
     */
    public function testEspressoMachineCanMakeSingleEspresso()
    {

    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine::makeDoubleEspresso
     */
    public function testEspressoMachineCanMakeDoubleEspresso()
    {

    }
}
