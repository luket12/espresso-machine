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

    public function testEspressoMachineCanAddBeans()
    {

    }

    public function testEspressoMachineCanAddWater()
    {

    }

    public function testFullWaterContainerThrowsException()
    {

    }

    public function testEmptyWaterContainerThrowsException()
    {

    }

    public function testFullBeanContainerThrowsException()
    {

    }

    public function testEmptyBeanContainerThrowsException()
    {

    }

    public function testEspressoMachineCanMakeSingleEspresso()
    {

    }

    public function testEspressoMachineCanMakeDoubleEspresso()
    {

    }
}
