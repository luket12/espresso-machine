<?php

namespace SoConnect\Coffee\Tests;

use PHPUnit\Framework\TestCase;
use SoConnect\Coffee\Containers\BeanContainer\BeanContainer;
use SoConnect\Espresso\Containers\ContainerFullException;

class TestBeanContainer extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @covers \SoConnect\Coffee\Containers\BeanContainer\BeanContainer::addBeans
     */
    public function testBeanContainerCanAddBeans(): void
    {
        $beanContainer = new BeanContainer(10, 2000);

        $beanContainer->addBeans(5);
        $this->assertEquals(15, $beanContainer->getBeans());

        $beanContainer->addBeans(2);
        $this->assertEquals(17, $beanContainer->getBeans());

        $beanContainer->addBeans(1000);
        $this->assertEquals(1017, $beanContainer->getBeans());
    }

    /**
     * @test
     * @covers \SoConnect\Coffee\Containers\BeanContainer\BeanContainer
     */
    public function testFullBeanContainerThrowsException()
    {
        $beanLimit = 25;

        $beanContainer = new BeanContainer(10, $beanLimit);

        $beanContainer->addBeans(15);

        $this->expectException(ContainerFullException::class);
        $beanContainer->addBeans(1);
    }
}
