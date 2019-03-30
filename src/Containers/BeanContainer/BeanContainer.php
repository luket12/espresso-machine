<?php

namespace SoConnect\Coffee\Containers\BeanContainer;

use SoConnect\Espresso\Containers\ContainerException;
use SoConnect\Espresso\Containers\ContainerFullException;

class BeanContainer implements ContainsBeans
{
    /**
     * @var int $beans  The number of spoons of beans available
     */
    private $beans;

    /**
     * BeanContainer constructor.
     * @param int $beans  The number of spoons of coffee beans
     */
    public function __construct(int $beans)
    {
        $this->beans = $beans;
    }

    /**
     * @param int $numSpoons  The number of spoons available
     * @throws ContainerFullException
     */
    public function addBeans(int $numSpoons): void
    {
        // Increment the number of beans by how many spoons
        $this->beans += $numSpoons;
    }

    /**
     * @return int Return the number of beans available
     */
    public function getBeans(): int
    {
        // Return the total beans count
        return $this->beans;
    }

    /**
     * @param int $numSpoons  Number of spoons of beans to use
     * @throws ContainerException
     * @return int The number of spoons used
     */
    public function useBeans(int $numSpoons): int
    {
        // Decrement the number of beans by the num spoons
    }
}
