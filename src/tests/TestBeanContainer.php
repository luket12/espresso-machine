<?php

namespace SoConnect\Coffee\Tests;

use PHPUnit\Framework\TestCase;
use SoConnect\Coffee\BeanContainer;
use SoConnect\Coffee\WaterContainer;
use SoConnect\Espresso\EspressoMachine;

class TestBeanContainer extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @covers \SoConnect\Espresso\EspressoMachine::addBeans
     */
    public function testWaterContainerCanAddBeans(): void
    {
        $beanContainer = new BeanContainer(10);

        $beanContainer->addBeans(5);
        $this->assertEquals(15, $beanContainer->getBeans());

        $beanContainer->addBeans(2);
        $this->assertEquals(17, $beanContainer->getBeans());

        $beanContainer->addBeans(1000);
        $this->assertEquals(1017, $beanContainer->getBeans());
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
}
