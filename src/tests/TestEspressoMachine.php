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
        $espressoMachine = new EspressoMachine(0, 0.0, 'none');

        $this->assertEquals(0, $espressoMachine->getBeans());
        $this->assertEquals(0.0, $espressoMachine->getWater());
        $this->assertEquals('none', $espressoMachine->getStatus());
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
