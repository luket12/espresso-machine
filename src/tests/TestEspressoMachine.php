<?php

namespace SoConnect\Espresso\Tests;

use PHPUnit\Framework\TestCase;
use SoConnect\Coffee\BeanContainer;
use SoConnect\Coffee\WaterContainer;
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
