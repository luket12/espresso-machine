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
     * @var int $beans  The limit of beans available
     */
    private $limit;

    /**
     * BeanContainer constructor.
     * @param int $beans The number of spoons of coffee beans
     * @param int $limit
     */
    public function __construct(int $beans, int $limit = 50)
    {
        $this->beans = $beans;
        $this->limit = $limit;
    }

    /**
     * @param int $numSpoons  The number of spoons available
     * @throws ContainerFullException
     */
    public function addBeans(int $numSpoons): void
    {
        $newBeanTotal = $this->beans + $numSpoons;

        if ($newBeanTotal > $this->limit) {
            throw new ContainerFullException('The container limit has been reached');
        }

        // Increment the number of beans by how many spoons
        $this->beans = $newBeanTotal;
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
        $newBeanTotal = $this->beans - $numSpoons;

        if ($newBeanTotal < 0) {
            throw new ContainerException('There are no beans left to use');
        }

        // Decrement the number of beans by the num spoons
        $this->beans = $newBeanTotal;

        return $numSpoons;
    }
}
